@extends('layouts.sidebar-owner')

@section('content')
<div class="p-8">
    <div class="flex items-center mb-6">
        <a href="{{ route('owner.manage-admin') }}" class="mr-4 text-blue-600 hover:text-blue-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
        </a>
        <h1 class="text-2xl font-bold text-gray-800">Tambah Admin Baru</h1>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6 max-w-2xl mx-auto">
        <form action="{{ route('owner.create-admin') }}" method="POST">
            @csrf
            
            <div class="space-y-6">
                <!-- Nama Field -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition" placeholder="Diandra Firza">
                </div>
                
                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition" placeholder="admin@example.com">
                </div>
                
                <!-- Password Field -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" id="password" name="password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition" placeholder="Minimal 8 karakter">
                </div>
                
                <div>
                    <label>Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" required>
                    <div x-data="{ passwordError: '' }">
                        <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition" x-on:input="passwordError = $event.target.value.length < 8 ? 'Password minimal 8 karakter' : ''"type="password" name="password">
                        <p x-show="passwordError" x-text="passwordError" class="text-red-500 text-sm"></p>
                    </div>
                </div>
                <!-- Submit Button -->
                <div class="pt-4">
                    <button type="submit" 
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        Buat Akun Admin
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection