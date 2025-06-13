<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Maklumat Pelayanan</title>
  @vite(['resources/css/app.css'])
</head>
<body class="bg-white m-0 p-0">

  <!-- Header -->
  <header class="sticky top-0 z-50 bg-white shadow-md py-6">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <div class="flex items-center gap-2">
        <img src="/images/logo.png" alt="Logo Blc" class="h-10 w-auto">
        <h1 class="text-xl font-bold text-orange-400 mx-3 mb-1">Broadband Learning Center</h1>
      </div>
      <nav>
        <ul class="flex justify-center gap-10">
          <li><a href="/" class="px-2 py-2 hover:text-orange-400">Beranda</a></li>
          <li class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="hover:text-orange-600 focus:outline-none">Informasi</button>
            <ul x-show="open" @click.away="open = false" x-transition class="absolute z-50 mt-2 w-48 bg-white border rounded-lg shadow-lg py-2">
              <li><a href="/informasi/tentang" class="block px-4 py-2 hover:bg-orange-100">Tentang</a></li>
              <li><a href="/informasi/maklumat" class="block px-4 py-2 hover:bg-orange-100">Maklumat & Standar</a></li>
              <li><a href="/informasi/pendaftaran" class="block px-4 py-2 hover:bg-orange-100">Pendaftaran</a></li>
              <li><a href="/informasi/pembelajaran" class="block px-4 py-2 hover:bg-orange-100">Pembelajaran</a></li>
              <li><a href="/informasi/faq" class="block px-4 py-2 hover:bg-orange-100">FAQ</a></li>
            </ul>
          </li>
          <li><a href="/lokasi" class="px-2 py-2 hover:text-orange-400">Lokasi</a></li>
          <li><a href="/artikel" class="px-2 py-2 hover:text-orange-400">Artikel</a></li>
          <li><a href="/buku" class="px-4 py-1 rounded-xl font-semibold text-white bg-orange-400 hover:bg-orange-700 transition inline-flex items-center justify-center h-full shadow-md">Buku Tamu</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <div class="w-full h-64 bg-cover bg-center relative" style="background-image: url('{{ asset('images/pengunjung1.png') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
      <h1 class="text-white text-3xl md:text-4xl font-bold text-center">Pendaftaran <br> Broadband Learning Center Surabaya</h1>
    </div>
  </div>

  <!-- Formulir dan Sidebar -->
  <div class="container mx-auto px-4 py-10 flex flex-col md:flex-row gap-6">

    <!-- Formulir Pendaftaran -->
    <div class="w-full md:w-3/4 p-4 md:p-6">
      <div class="flex justify-center mb-6">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16">
      </div>

      <h2 class="text-3xl font-bold text-center text-orange-500 mb-2">Pendaftaran</h2>
      <p class="text-gray-600 text-center mb-8">Silahkan isi data diri Anda dengan lengkap</p>

      @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg">
          {{ session('success') }}
        </div>
      @endif

      <form action="{{ route('bukutamu.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
          <label for="nama_lengkap" class="block text-gray-700 mb-2">Nama Lengkap<span class="text-red-500">*</span></label>
          <input type="text" name="nama_lengkap" id="nama_lengkap" 
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" 
            required>
        </div>

        <div class="grid grid-cols-2 gap-4">
          <div>
            <label for="sesi" class="block text-gray-700 mb-2">Sesi<span class="text-red-500">*</span></label>
            <select name="sesi" id="sesi" 
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" 
              required>
              <option value="">Pilih Sesi</option>
              <option value="1">Sesi 1 (07.30-09.00)</option>
              <option value="2">Sesi 2 (09.00-10.30)</option>
              <option value="3">Sesi 3 (10.30-12.00)</option>
              <option value="4">Sesi 4 (13.00-14.30)</option>
              <option value="5">Sesi 5 (14.30-16.00)</option>
            </select>
          </div>

          <div>
            <label for="kategori" class="block text-gray-700 mb-2">Kategori<span class="text-red-500">*</span></label>
            <select name="kategori" id="kategori" 
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" 
              required>
              <option value="">Pilih Kategori</option>
              <option value="sd">SD</option>
              <option value="smp">SMP</option>
              <option value="sma">SMA</option>
              <option value="umum">Umum</option>
            </select>
          </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
          <div>
            <label for="jenis_kelamin" class="block text-gray-700 mb-2">Jenis Kelamin<span class="text-red-500">*</span></label>
            <select name="jenis_kelamin" id="jenis_kelamin" 
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" 
              required>
              <option value="">Pilih Gender</option>
              <option value="L">Laki-laki</option>
              <option value="P">Perempuan</option>
            </select>
          </div>

          <div>
            <label for="tanggal_lahir" class="block text-gray-700 mb-2">Tanggal Lahir<span class="text-red-500">*</span></label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" 
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" 
              required>
          </div>
        </div>

        <div>
          <label for="alamat" class="block text-gray-700 mb-2">Alamat<span class="text-red-500">*</span></label>
          <textarea name="alamat" id="alamat" rows="3" 
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" 
            required></textarea>
        </div>

        <div>
          <label for="no_telp" class="block text-gray-700 mb-2">No. Telepon</label>
          <input type="text" name="no_telp" id="no_telp" 
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
        </div>

        <button type="submit" 
          class="w-full bg-orange-500 hover:bg-orange-600 text-white font-medium py-3 px-4 rounded-lg transition duration-300">
          Kirim
        </button>
      </form>
    </div>

    <!-- Sidebar (sebelah kanan dan sticky) -->
    <aside class="md:w-1/4 w-full">
      <div class="bg-white rounded shadow p-4 sticky top-24 max-h-[calc(100vh-6rem)] overflow-auto">
        <h2 class="text-lg font-semibold mb-4 text-gray-800">Informasi</h2>
        <ul class="space-y-2">
          <li><a href="{{ route('informasi.tentang') }}" class="text-orange-500 hover:underline">Tentang</a></li>
          <li><a href="{{ route('informasi.pendaftaran') }}" class="text-orange-500 font-bold">Pendaftaran</a></li>
          <li><a href="{{ route('informasi.maklumat') }}" class="text-orange-500 hover:underline">Maklumat & standar</a></li>
          <li><a href="{{ route('informasi.pembelajaran') }}" class="text-orange-500 hover:underline">Pembelajaran</a></li>
          <li><a href="{{ route('informasi.faq') }}" class="text-orange-500 hover:underline">FAQ</a></li>
        </ul>
      </div>
    </aside>

  </div>

  <!-- Alpine.js -->
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
