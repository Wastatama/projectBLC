<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang BLC Surabaya</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-white m-0 p-0">

    <!-- Header -->
    <header class="sticky top-0 z-50 bg-white shadow-md py-6">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <img src="/images/logo.png" alt="Logo Blc" class="h-10 w-auto">
                <h1 class="text-xl font-bold text-orange-400 mx-3 mb-1">Broadband Learning Center </h1>
            </div>
            <nav>
                <ul class="flex justify-center gap-10">
                    <li><a href="/" class="px-2 py-2 hover:text-orange-400">Beranda</a></li>
                    <li class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="hover:text-orange-600 focus:outline-none">Informasi</button>
                        <ul x-show="open" @click.away="open = false" x-transition class="absolute z-50 mt-2 w-48 bg-white border rounded-lg shadow-lg py-2 ">
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
            <h1 class="text-white text-3xl md:text-4xl font-bold text-center">
                Tentang <br> Broadband Learning Center Surabaya
            </h1>
        </div>
    </div>

    <!-- Content Section -->
    <div class="container mx-auto px-4 py-10 flex flex-col md:flex-row gap-6">

        <!-- Main Content -->
       <!-- Main Content -->
<main class="md:w-3/4 text-justify text-gray-800 leading-relaxed space-y-6 px-2 md:px-6 bg-white rounded shadow-lg p-6">
    <h2 class="text-2xl font-bold text-orange-500">
        Tentang BLC Surabaya
    </h2>

    <p class="font-medium">
        Broadband Learning Center (BLC) Surabaya adalah fasilitas pembelajaran publik yang disediakan untuk meningkatkan pemahaman dan keterampilan masyarakat di bidang Teknologi Informasi dan Komunikasi (TIK).
    </p>

    <p class="font-medium">
        Kehadiran BLC merupakan bentuk komitmen dalam mendukung transformasi digital, khususnya di Kota Surabaya. Melalui berbagai program pelatihan, bimbingan teknis, dan layanan informasi, BLC menjadi sarana literasi digital yang terbuka bagi seluruh lapisan masyarakat — mulai dari pelajar, mahasiswa, tenaga kerja, hingga masyarakat umum.
    </p>

    <p class="font-medium">
        Didukung oleh tenaga pengajar yang kompeten dan fasilitas komputer yang memadai, BLC Surabaya secara rutin menyelenggarakan pelatihan. Materi pelatihan meliputi pengenalan komputer, penggunaan internet secara bijak, aplikasi perkantoran, dan pengembangan website dasar. Semua layanan ini diberikan secara gratis dan terbuka untuk siapa saja.
    </p>

    <p class="font-medium">
        Melalui inisiatif ini, BLC Surabaya diharapkan mampu mendorong masyarakat agar semakin siap menghadapi tantangan era digital serta dapat memanfaatkan teknologi secara cerdas, produktif, dan bertanggung jawab.
    </p>
</main>


<!-- Sidebar (sebelah kanan dan sticky) -->
    <aside class="md:w-1/4 w-full">
      <div class="bg-white rounded shadow p-4 sticky top-24 max-h-[calc(100vh-6rem)] overflow-auto">
        <h2 class="text-lg font-semibold mb-4 text-gray-800">Informasi</h2>
        <ul class="space-y-2">
          <li><a href="{{ route('informasi.tentang') }}" class="text-orange-500 font-bold">Tentang</a></li>
          <li><a href="{{ route('informasi.pendaftaran') }}" class="text-orange-500 hover:underline">Pendaftaran</a></li>
          <li><a href="{{ route('informasi.maklumat') }}" class="text-orange-500 hover:underline">Maklumat & standar</a></li>
          <li><a href="{{ route('informasi.pembelajaran') }}" class="text-orange-500 hover:underline">Pembelajaran</a></li>
          <li><a href="{{ route('informasi.faq') }}" class="text-orange-500 hover:underline">FAQ</a></li>
        </ul>
      </div>
    </aside>
    </div>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
