@extends('layouts.sidebar-admin')

@section('content')

<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-6">Ringkasan Bulan Ini ({{ $bulanIni }}/{{ $tahunIni }})</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-lg font-semibold">Total Order</h2>
            <p class="text-3xl font-bold text-blue-600">{{ $totalOrder }}</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-lg font-semibold">Total Selesai</h2>
            <p class="text-3xl font-bold text-green-600">{{ $totalSelesai }}</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-lg font-semibold">Total Pemasukan</h2>
            <p class="text-3xl font-bold text-yellow-600">Rp {{ number_format($totalPemasukan, 0, ',', '.') }}</p>
        </div>
    </div>

    <!-- Unfinished Orders Section -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-bold mb-4">Order Belum Selesai</h2>
        
        @if($unfinishedOrders->isEmpty())
            <p class="text-gray-500">Tidak ada order yang belum selesai</p>
        @else
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-200 text-sm md:text-base">
                    <thead class="bg-blue-500 text-white">
                        <tr>
                            <th class="p-3 border text-left">Nama</th>
                            <th class="p-3 border text-left">Alamat</th>
                            <th class="p-3 border text-center">Jenis</th>
                            <th class="p-3 border text-center">Total</th>
                            <th class="p-3 border text-center">Tanggal</th>
                            <th class="p-3 border text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($unfinishedOrders as $order)
                        <tr class="hover:bg-gray-50">
                            <td class="p-3 border text-left">{{ $order->nama }}</td>
                            <td class="p-3 border text-left">{{ Str::limit($order->alamat, 20) }}</td>
                            <td class="p-3 border text-center">{{ $order->jenis_paket }}</td>
                            <td class="p-3 border text-center">Rp {{ number_format($order->total_harga, 0, ',', '.') }}</td>
                            <td class="p-3 border text-center">{{ $order->created_at->format('d/m/y') }}</td>
                            <td class="p-3 border text-center">
                                <form action="{{ route('admin.complete', $order->id) }}" method="POST" class="complete-form">
                                    @csrf
                                    <button type="submit" class="p-2 bg-green-500 text-white rounded-full hover:bg-green-600 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>

<!-- SweetAlert CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Handle complete order confirmation
        const completeForms = document.querySelectorAll('.complete-form');
        
        completeForms.forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                Swal.fire({
                    title: 'Konfirmasi Penyelesaian Order',
                    text: "Apakah Anda yakin ingin menandai order ini sebagai selesai?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#10B981',
                    cancelButtonColor: '#6B7280',
                    confirmButtonText: 'Ya, Selesaikan',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                    }
                });
            });
        });
    });
</script>
@endsection