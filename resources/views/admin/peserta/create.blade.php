@extends('layouts.admin')

@section('page-title', 'Tambah Peserta Baru')
@section('content')
<div class="container mx-auto px-2 py-2">
    <div class="bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold mb-6">Tambah Peserta Baru</h1>
        
        <form action="{{ route('admin.peserta.store') }}" method="POST">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Kolom Kiri -->
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap*</label>
                        <input type="text" name="nama" required 
                                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500"
                                value="{{ old('nama') }}"
                                placeholder="Masukkan nama lengkap">
                        @error('nama')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">NIK*</label>
                        <input type="text" name="nik" required 
                                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500"
                                value="{{ old('nik') }}"
                                placeholder="Masukkan NIK">
                        @error('nik')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Lokasi BLC*</label>
                        <select name="lokasi_blc" required 
                                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                            <option value="">Pilih Lokasi BLC</option>
                            <option value="BLC Surabaya" {{ old('lokasi_blc') == 'BLC Surabaya' ? 'selected' : '' }}>BLC Surabaya</option>
                            <option value="BLC Barat" {{ old('lokasi_blc') == 'BLC Barat' ? 'selected' : '' }}>BLC Barat</option>
                            <option value="BLC Timur" {{ old('lokasi_blc') == 'BLC Timur' ? 'selected' : '' }}>BLC Timur</option>
                        </select>
                        @error('lokasi_blc')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <!-- Kolom Kanan -->
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin*</label>
                        <div class="flex space-x-4">
                            <label class="inline-flex items-center">
                                <input type="radio" name="jenis_kelamin" value="L" 
                                    {{ old('jenis_kelamin') == 'L' ? 'checked' : '' }} required
                                    class="text-blue-500 focus:ring-blue-500">
                                <span class="ml-2">Laki-laki</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="jenis_kelamin" value="P"
                                    {{ old('jenis_kelamin') == 'P' ? 'checked' : '' }}
                                    class="text-blue-500 focus:ring-blue-500">
                                <span class="ml-2">Perempuan</span>
                            </label>
                        </div>
                        @error('jenis_kelamin')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Status Validasi</label>
                        <select name="status" 
                                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                            <option value="">Belum Validasi</option>
                            <option value="tervalidasi" {{ old('status') == 'tervalidasi' ? 'selected' : '' }}>Tervalidasi</option>
                        </select>
                        @error('status')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="mt-8 flex justify-end space-x-4">
                <a href="{{ route('admin.peserta.index') }}" 
                class="px-4 py-2 bg-gray-300 rounded-md hover:bg-gray-400">
                    Batal
                </a>
                <button type="submit" 
                        class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>
</div>
@endsection