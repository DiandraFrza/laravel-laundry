@extends('layouts.sidebar-admin')

@section('content')

<div class="p-8">
    <h1 class="text-2xl font-bold text-blue-600 mb-4">Edit Order Input</h1>
    <hr class="border-gray-300 mb-6">

    <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-3xl mx-auto">
        <form action="{{ route('admin.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nama" class="block font-medium text-gray-700">Nama</label>
                <input type="text" id="nama" name="nama" value="{{ $data->nama }}" 
                    class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="noHp" class="block font-medium text-gray-700">Nomor HP</label>
                <input type="number" id="noHp" name="noHp" value="{{ $data->noHp }}" 
                    class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="totalBerat" class="block font-medium text-gray-700">Total Berat (KG)</label>
                <input type="number" id="totalBerat" name="totalBerat" value="{{ $data->total_berat }}" 
                    class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="status" class="block mb-1">Status</label>
                <select name="status" id="status" class="w-full p-2 border rounded">
                    <option value="Belum Selesai" {{ old('status', $data->status ?? '') == 'Belum Selesai' ? 'selected' : '' }}>Belum Selesai</option>
                    <option value="Diproses" {{ old('status', $data->status ?? '') == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                    <option value="Selesai" {{ old('status', $data->status ?? '') == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="alamat" class="block font-medium text-gray-700">Alamat</label>
                <input type="text" id="alamat" name="alamat" value="{{ $data->alamat }}" 
                    class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="jenis_paket" class="block font-medium text-gray-700">Jenis Paket</label>
                <select id="jenis_paket" name="jenis_paket" 
                    class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-500">
                    <option value="{{ $data->jenis_paket }}" selected>{{ $data->jenis_paket }}</option>
                    <option value="Cuci Kiloan">Cuci Kiloan</option>
                    <option value="Cuci Setrika">Cuci & Setrika</option>
                    <option value="Laundry Boneka">Laundry Boneka</option>
                    <option value="Perlengkapan Bayi">Perlengkapan Bayi</option>
                </select>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
