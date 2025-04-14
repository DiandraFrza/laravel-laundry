@extends('layouts.sidebar-admin')

@section('content')

<div class="p-8">
    <h1 class="text-2xl font-bold text-blue-600 mb-4">+ Tambah Data Laundry</h1>
    <hr class="border-gray-300 mb-6">

    <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-4xl mx-auto">
        <form action="{{ route('admin.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="nama" class="block font-medium text-gray-700">Nama</label>
                    <input type="text" id="nama" name="nama" required 
                        class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan Nama">
                </div>

                <!-- <div>
                    <label for="alamat" class="block font-medium text-gray-700">Alamat</label>
                    <input type="text" id="alamat" name="alamat" required 
                        class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-500"
                        placeholder="Jl. XXXXXX, RT XX, RW XX, No XX">
                </div> -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                <!-- Jalan -->
                <div>
                    <label for="jalan" class="block mb-1">Jalan</label>
                    <input type="text" id="jalan" name="jalan" 
                        class="w-full p-2 border rounded uppercase-input"
                        placeholder="JL. NAMA JALAN" required>
                </div>
                
                <!-- RT -->
                <div>
                    <label for="rt" class="block mb-1">RT</label>
                    <input type="text" id="rt" name="rt" 
                        class="w-full p-2 border rounded uppercase-input"
                        placeholder="001" pattern="[0-9]{3}" title="3 digit angka">
                </div>
                
                <!-- RW -->
                <div>
                    <label for="rw" class="block mb-1">RW</label>
                    <input type="text" id="rw" name="rw" 
                        class="w-full p-2 border rounded uppercase-input"
                        placeholder="002" pattern="[0-9]{3}" title="3 digit angka">
                </div>
                
                <!-- Nomor -->
                <div>
                    <label for="nomor" class="block mb-1">No.</label>
                    <input type="text" id="nomor" name="nomor" 
                        class="w-full p-2 border rounded uppercase-input"
                        placeholder="123" required>
                </div>
            </div>

                <div>
                    <label for="noHp" class="block font-medium text-gray-700">Nomor HP</label>
                    <input type="tel" name="noHp" pattern="[0-9]{10,15}" title="10-15 digit angka" required placeholder="08xxxxxxxxxx" class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="totalBerat" class="block font-medium text-gray-700">Total Berat (KG)</label>
                    <input type="number" id="totalBerat" name="totalBerat" required 
                        class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan Total Berat">
                </div>

                <div class="md:col-span-2">
                    <label class="block font-medium text-gray-700 mb-2">Jenis Paket</label>
                    <div class="flex flex-wrap gap-6">
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="jenis_paket" value="Cuci Kiloan" class="text-blue-500">
                            <span>Cuci Kiloan</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="jenis_paket" value="Cuci Setrika" class="text-blue-500">
                            <span>Cuci+Setrika</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="jenis_paket" value="Laundry Boneka" class="text-blue-500">
                            <span>Laundry Boneka</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="jenis_paket" value="Perlengkapan Bayi" class="text-blue-500">
                            <span>Perlengkapan Bayi</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="flex justify-end mt-6">
                <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Auto uppercase
    const inputs = document.querySelectorAll('.uppercase-input');
    inputs.forEach(input => {
        input.addEventListener('input', function() {
            this.value = this.value.toUpperCase();
        });
    });
    
    // Gabungkan alamat sebelum submit
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        const jalan = document.getElementById('jalan').value;
        const rt = document.getElementById('rt').value;
        const rw = document.getElementById('rw').value;
        const nomor = document.getElementById('nomor').value;
        
        // Buat hidden input jika belum ada
        let alamatInput = document.getElementById('alamat');
        if (!alamatInput) {
            alamatInput = document.createElement('input');
            alamatInput.type = 'hidden';
            alamatInput.name = 'alamat';
            alamatInput.id = 'alamat';
            form.appendChild(alamatInput);
        }
        
        // Format: JL. NAMA JALAN RT 001 RW 002 NO 123
        alamatInput.value = `${jalan} RT ${rt} RW ${rw} NO ${nomor}`;
    });
});
</script>
@endsection
