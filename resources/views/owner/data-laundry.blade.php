@extends('layouts.sidebar-owner')

@section('content')

<div class="flex-1 p-10 bg-white shadow-md rounded-lg"> 
    <div class="max-w-6xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">All Order Laundry</h1>
        <hr class="mb-4">

        <!-- Search & Total -->
        <div class="flex justify-between items-center mb-4">
            <span class="text-lg font-semibold">
                TOTAL: {{ isset($resultDate) ? count($resultDate) : count($datas) }}
            </span>
            <form action="{{ route('owner.filterdate') }}" method="GET" class="flex items-center space-x-2">
                <input type="date" name="date" id="date" class="px-3 py-2 border rounded-md">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md flex items-center gap-2">
                    <span class="material-symbols-outlined">Search</span>
                </button>
            </form>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto overflow-y-auto bg-white rounded-lg shadow">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                    <tr>
                        <th class="p-3 border">Nama Pemesan</th>
                        <th class="p-3 border">Alamat</th>
                        <th class="p-3 border">Nomor Telepon</th>
                        <th class="p-3 border text-center whitespace-nowrap">Total Berat (KG)</th>
                        <th class="p-3 border">Jenis Paket</th>
                        <th class="p-3 border">Total Harga</th>
                        <th class="p-3 border">Tanggal</th>
                        <th class="p-3 border">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($resultDate) && count($resultDate) == 0)
                        <tr>
                            <td colspan="6" class="text-center p-4 text-gray-500">Data Tidak Ditemukan</td>
                        </tr>
                    @else
                        @foreach ($resultDate ?? $datas as $data)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 border py-4 text-center whitespace-nowrap text-sm text-gray-500">{{ $data->nama }}</td>
                            <td class="px-6 border py-4 text-center whitespace-nowrap text-sm text-gray-500">{{ $data->alamat }}</td>
                            <td class="px-6 border py-4 text-center whitespace-nowrap text-sm text-gray-500">+62 {{ $data->noHp }}</td>
                            <td class="px-6 border py-4 text-center whitespace-nowrap text-sm text-gray-500">{{ $data->total_berat }} KG</td>
                            <td class="px-6 border py-4 text-center whitespace-nowrap text-sm text-gray-500">{{ $data->jenis_paket }}</td>
                            <td class="px-6 border py-4 text-center whitespace-nowrap text-sm text-gray-500">Rp {{ number_format($data->total_harga, 0, ',' , '.') }}</td>
                            <td class="px-6 border py-4 text-center whitespace-nowrap text-sm text-gray-500">{{ $data->created_at->format('d/m/y') }}</td>
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
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div> 
@endsection
