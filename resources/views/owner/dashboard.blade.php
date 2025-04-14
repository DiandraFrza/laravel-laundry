@extends('layouts.sidebar-owner')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-6">Ringkasan Bulan Ini ({{ $bulanIni }}/{{ $tahunIni }})</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
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
</div>
@endsection
