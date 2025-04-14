@extends('layouts.sidebar-admin')

@section('content')

<div class="flex-1 p-10 bg-white shadow-md rounded-lg"> 
    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between mb-4">
        <h1 class="text-2xl font-bold text-blue-600">Data History</h1>
        <div class="flex space-x-2">
            <a href="{{ route('admin.export.excel') }}" 
            class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
            Excel
            </a>
            <a href="{{ route('admin.export.pdf') }}" 
            class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
            PDF
            </a>
        </div>
    </div>
        <hr class="border-gray-300 mb-6">

        <!-- Table -->
        <div class="overflow-x-auto bg-gray-50 p-4 rounded-md">
            <table class="w-full border-collapse border border-gray-200 text-sm md:text-base">
                <thead class="bg-blue-500 text-white">
                    <tr>
                        <th class="p-3 border text-left">Nama</th>
                        <th class="p-3 border text-left">Alamat</th>
                        <th class="p-3 border text-center">Nomor HP</th>
                        <th class="p-3 border text-center">Berat</th>
                        <th class="p-3 border text-center">Jenis</th>
                        <th class="p-3 border text-center">Total</th>
                        <th class="p-3 border text-center">Tanggal</th>
                        <th class="p-3 border text-center">Status</th>
                        <th class="p-3 border text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($datas as $data)
                    <tr class="hover:bg-gray-100">
                        <td class="p-3 border text-left max-w-xs truncate whitespace-nowrap" title="{{ $data->nama }}">{{ $data->nama }}</td>
                        <td class="p-3 border text-left max-w-xs truncate whitespace-nowrap" title="{{ $data->alamat }}">{{ $data->alamat }}</td>
                        <td class="p-3 border text-center max-w-xs truncate whitespace-nowrap" title="{{ $data->noHp }}">+62 {{ $data->noHp }}</td>
                        <td class="p-3 border text-center max-w-xs truncate whitespace-nowrap" title="{{ $data->total_berat }}">{{ $data->total_berat }} KG</td>
                        <td class="p-3 border text-center max-w-xs truncate whitespace-nowrap" title="{{ $data->jenis_paket }}">{{ $data->jenis_paket }}</td>
                        <td class="p-3 border text-center max-w-xs truncate whitespace-nowrap" title="{{ $data->total_harga }}">Rp {{ number_format($data->total_harga, 0, ',' , '.') }}</td>
                        <td class="p-3 border text-center max-w-xs truncate whitespace-nowrap">{{ $data->created_at->format('d/m/y') }}</td>
                        <td class="p-3 border text-center max-w-xs truncate whitespace-nowrap">
                            @php
                                $statusColor = match($data->status) {
                                    'Belum Selesai' => 'bg-yellow-100 text-yellow-800',
                                    'Diproses' => 'bg-blue-100 text-blue-800',
                                    'Selesai' => 'bg-green-100 text-green-800',
                                    default => 'bg-gray-100 text-gray-800'
                                };
                            @endphp
                            
                            <span class="px-3 py-1 rounded-full text-sm font-semibold {{ $statusColor }}">
                                {{ $data->status }}
                            </span>
                        </td>
                        <td class="p-3 border flex justify-center space-x-2">
                            <a href="{{ route('admin.edit', $data->id) }}" class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">
                                Edit
                            </a>
                            <form action="{{ route('admin.delete', $data->id) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> 

<!-- SweetAlert CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Tangkap semua form dengan class delete-form
        const deleteForms = document.querySelectorAll('.delete-form');
        
        // Loop melalui setiap form
        deleteForms.forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault(); // Mencegah form submit langsung
                
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Data yang dihapus tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Jika user mengkonfirmasi, submit form
                        this.submit();
                    }
                });
            });
        });
    });
</script>

@endsection