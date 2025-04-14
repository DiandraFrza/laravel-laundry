<?php

namespace App\Http\Controllers;

use App\Models\DataPesanan;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OwnerController extends Controller
{
    public function dashboard()
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

        return view('owner.dashboard', compact(
            'totalPemasukan',
            'totalOrder',
            'totalSelesai',
            'bulanIni',
            'tahunIni'
        ));
    }

    public function show(Request $request)
    {
        // Ambil semua data order, diurutkan dari terbaru
        $datas = DataPesanan::orderBy('created_at', 'desc')->get();

        // Cek apakah ada query date
        if ($request->has('date') && $request->date != null) {
            $resultDate = DataPesanan::whereDate('created_at', $request->date)->get();
            return view('owner.data-laundry', compact('datas', 'resultDate'));
        }

        // Kalau nggak ada date yang dipilih
        return view('owner.data-laundry', compact('datas'));
        // return view('owner.data-laundry');

    }
    public function filterdate(Request $request){
        $date = $request->date;
        $resultDate = DataPesanan::where('created_at','like','%'.$date.'%')->get();
        
        return view('owner.data-laundry', ['datas' => $resultDate]);

    }

    public function laporanBulanan(Request $request)
    {
        $bulan = $request->bulan;
        $tahun = $request->tahun;

        $laporan = DataPesanan::select(
            DB::raw('DATE(created_at) as tanggal'),
            DB::raw('count(*) as total_transaksi'),
            DB::raw('sum(total_harga) as total_pemasukan')
        )
        ->whereMonth('created_at', $bulan)
        ->whereYear('created_at', $tahun)
        ->groupBy(DB::raw('DATE(created_at)'))
        ->orderBy('tanggal', 'asc')
        ->get();

        return view('owner.laporan', compact('laporan', 'bulan', 'tahun'));
    }

    public function createAdmin(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin',
        ]);

        return redirect()->route('owner.dashboard')->with('success', 'Akun admin berhasil dibuat!');
    }

    public function showCreateAdminForm()
    {
        return view('owner.create-admin');
    }

    // OwnerController.php
    public function listAdmins()
    {
        $admins = User::where('role', 'admin')
                    ->latest()
                    ->get();
                    
        return view('owner.manage-admin', compact('admins'));
    }

    public function showEditForm($id)
    {
        $admin = User::where('role', 'admin')->findOrFail($id);
        return view('owner.edit-admin', compact('admin'));
    }

    // Proses update
    public function updateAdmin(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$id,
        ]);

        $admin = User::findOrFail($id);
        $admin->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('owner.manage-admin')->with('success', 'Data admin berhasil diupdate!');
    }

    // Hapus admin
    public function deleteAdmin($id)
    {
        $admin = User::findOrFail($id);
        $admin->delete();

        return back()->with('success', 'Admin berhasil dihapus!');
    }
}
