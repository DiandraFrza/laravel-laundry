@extends('layouts.sidebar-owner')

@section('content')
@if(session('success'))
<div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">
    <p>{{ session('success') }}</p>
</div>
@endif
<div class="p-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Daftar Admin</h1>
        <a href="{{ route('owner.show-create-admin') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center gap-2 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
            </svg>
            Tambah Admin Baru
        </a>
    </div>

    <div class="overflow-x-auto overflow-y-auto bg-white rounded-lg shadow">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                  <th class="p-3 border">Nama</th>
                  <th class="p-3 border">Email</th>
                  <th class="p-3 border">Tanggal Dibuat</th>
                  <th class="p-3 border">Aksi</th>
              </tr>
          </thead>

          <tbody class="bg-white divide-y divide-gray-200">
    @foreach ($admins as $admin)
    <tr class="hover:bg-gray-50 transition-colors">
        <!-- Kolom Nama -->
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">{{ $admin->name }}</div>
                </div>
            </div>
        </td>
        
        <!-- Kolom Email -->
        <td class="px-6 border py-4 whitespace-nowrap text-center text-gray-500">
            {{ $admin->email }}
        </td>
        
        <!-- Kolom Tanggal Dibuat -->
        <td class="px-6 border py-4 whitespace-nowrap text-center text-gray-500">
            {{ $admin->created_at->format('d M Y H:i') }}
        </td>
        
        <!-- Kolom Aksi (Edit/Hapus) -->
        <td class="px-6 border py-4 whitespace-nowrap">
          <div class="flex justify-center items-center space-x-4">
              <!-- Tombol Edit -->
              <a href="{{ route('owner.edit-admin', $admin->id) }}" 
                class="text-blue-600 hover:text-blue-900 transition-colors"
                title="Edit">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                  </svg>
              </a>
              
              <!-- Tombol Hapus -->
              <form action="{{ route('owner.delete-admin', $admin->id) }}" method="POST" 
                    onsubmit="return confirm('Yakin hapus admin ini?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="text-red-600 hover:text-red-900 transition-colors" title="Hapus">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                      </svg>
                  </button>
              </form>
          </div>
      </td>
    </tr>
    @endforeach
</tbody>
        </table>
    </div>
</div>
@endsection