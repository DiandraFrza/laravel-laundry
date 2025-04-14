<?php

namespace App\Http\Controllers;

use App\Models\DataPesanan;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Exports\OrdersExport;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function dashboard(): View
    {
        $bulanIni = now()->month;
        $tahunIni = now()->year;

        $totalPemasukan = DataPesanan::whereMonth('created_at', $bulanIni)
            ->whereYear('created_at', $tahunIni)
            ->sum('total_harga');

        $totalOrder = DataPesanan::whereMonth('created_at', $bulanIni)
            ->whereYear('created_at', $tahunIni)
            ->count();

        $totalSelesai = DataPesanan::whereMonth('created_at', $bulanIni)
            ->whereYear('created_at', $tahunIni)
            ->where('status', 'selesai')
            ->count();

        // Get unfinished orders (Belum Selesai)
        $unfinishedOrders = DataPesanan::where('status', 'Belum Selesai')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.dashboard', compact(
            'totalPemasukan',
            'totalOrder',
            'totalSelesai',
            'bulanIni',
            'tahunIni',
            'unfinishedOrders'
        ));
    }

    // Add this new method to handle order completion
    public function completeOrder($id)
    {
        $order = DataPesanan::findOrFail($id);
        $order->update(['status' => 'selesai']);
        
        return redirect()->route('admin.dashboard')->with('success', 'Order telah diselesaikan!');
    }

    public function create(): View
    {
        return view('admin.input');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'jalan' => 'required|string|max:100',
            'rt' => 'required|string|size:3',
            'rw' => 'required|string|size:3',
            'nomor' => 'required|string|max:10',
            // validasi lainnya...
        ]);
        
        // Gabungkan alamat
        $alamat = strtoupper("{$request->jalan} RT {$request->rt} RW {$request->rw} NO {$request->nomor}");
        
        // Ambil inputan
        $jenisPaket = $request->jenis_paket;
        $berat = $request->totalBerat;

        // Tentukan harga per jenis paket
        switch ($jenisPaket) {
            case 'Cuci Kiloan':
                $harga = 8000;
                break;
            case 'Cuci Setrika':
                $harga = 12000;
                break;
            case 'Laundry Boneka':
                $harga = 25000;
                break;
            case 'Perlengkapan Bayi':
                $harga = 15000;
                break;
            default:
                $harga = 0;
                break;
        }

        // Kalau Laundry Boneka dihitung per item, bukan per kg
        $totalHarga = ($jenisPaket === 'Laundry Boneka') ? ($harga * $berat) : ($harga * $berat);

        // Simpan ke database
        $data = DataPesanan::create([
            'nama' => $request->nama,
            'noHp' => $request->noHp,
            'alamat' => $alamat,
            'total_berat' => $berat,
            'jenis_paket' => $jenisPaket,
            'total_harga' => $totalHarga,
            'status' => 'Belum Selesai',
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Data berhasil ditambahkan!');
    }


    public function show()
    {
        $datas = DataPesanan::orderBy('created_at', 'desc')->get();
        return view('admin.history',compact('datas'));
    }

    public function edit(string $id)
    {
        $data = DataPesanan::find($id);

        return view('admin.edit', compact('data'));
        
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'status' => 'required|in:Belum Selesai,Diproses,Selesai',
            'nama' => 'required|string|max:255',
            'noHp' => 'required|string|max:20',
            'totalBerat' => 'required|numeric',
            'jenis_paket' => 'required|string',
            'alamat' => 'required|string|max:255' // Ubah validasi alamat
        ]);

        // Hitung total harga
        $harga = match($request->jenis_paket) {
            'Cuci Kiloan' => 8000,
            'Cuci Setrika' => 12000,
            'Laundry Boneka' => 25000,
            'Perlengkapan Bayi' => 15000,
            default => 0
        };

        $totalHarga = ($request->jenis_paket === 'Laundry Boneka') 
            ? ($harga * $request->totalBerat) 
            : ($harga * $request->totalBerat);

        $data = DataPesanan::findOrFail($id);
        $data->update([
            'nama' => $validated['nama'],
            'noHp' => $validated['noHp'],
            'alamat' => $validated['alamat'],
            'total_berat' => $validated['totalBerat'],
            'jenis_paket' => $validated['jenis_paket'],
            'total_harga' => $totalHarga,
            'status' => $validated['status']
        ]);

        return redirect()->route('admin.history')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $data = DataPesanan::find($id);

        $data->delete();

        return redirect()->route('admin.history')->with('success', 'Data berhasil dihapus!');
    }


    // print
    public function exportExcel() 
    {
        return Excel::download(new OrdersExport, 'data_pesanan.xlsx');
    }

    public function exportPDF()
    {
        $orders = DataPesanan::orderBy('created_at', 'desc')->get();
        $pdf = Pdf::loadView('admin.orders-pdf', [
            'orders' => $orders
        ]);
        return $pdf->download('laporan-pesanan-'.now()->format('Ymd').'.pdf');
    }
}
