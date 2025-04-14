<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaundryFresh</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans">
    <!-- Hero Section -->
    <section style="background-color:rgb(250, 242, 232);" class="py-8 md:py-10 px-4">
        <div class="container mx-auto flex flex-col md:flex-row items-center gap-6 px-4">
            <!-- Gambar -->
            <div class="md:w-1/2 flex justify-center md:justify-start">
                <img src="{{ asset('assets/img/icon_laundry.png') }}" alt="Laundry Image" class="w-64 md:w-80 lg:w-[450px]">
            </div>
            
            <!-- Text -->
            <div class="md:w-1/2 text-center md:text-left px-4">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-blue-700 leading-tight">TUNGGU DIRUMAH AJA!</h1>

                <p class="text-gray-600 mt-4 text-base sm:text-lg">Order Laundry Kapanpun Untuk Semua Keperluan Laundry Anda. Hemat Waktu Lagi Dan Lebih Praktis Untuk Anda Yang Malas Keluar Rumah Atau Sibuk</p>
            </div>
        </div>
    </section>

    <section id="contact" class="py-6 px-4 sm:px-6" style="background-color: #A7D7E7;">
        <div class="container mx-auto px-3">
            <div class="md:w-3/4 lg:w-1/2 px-4">
                <p class="mt-4 text-gray-600 text-base sm:text-lg text-left">Selamat Datang di Era Baru Mencuci Laundry.</p>
                <h1 class="text-xl sm:text-2xl font-bold text-blue-700 leading-tight mt-2 text-left">Tidak Punya Waktu Untuk Ke Laundry? <br>Pakaian Anda Kami Yang Jemput Dan Antar !</h1>
                <p class="text-gray-600 mt-4 text-sm sm:text-base text-left">Sibuk dan tidak sempat pergi ke laundry? Tenang, kami siap membantu! Dengan layanan antar jemput, pakaian Anda akan dijemput dan dicuci dengan standar terbaik. Setelah itu, pakaian akan dikirim kembali dalam kondisi bersih dan wangi. Hubungi kami lewat WhatsApp, dan biarkan tim mengurus semuanya. Pakaian Anda akan siap pakai tanpa repot!</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="services" class="py-12 md:py-20 px-4 sm:px-6 bg-gray-50">
    <div class="container mx-auto text-center max-w-6xl">
        <h2 class="text-2xl sm:text-3xl font-bold text-blue-600 mb-2">LAYANAN PROFESIONAL KAMI</h2>
        <p class="text-gray-600 mb-8">Dengan bahan detergen premium dan pewangi pilihan</p>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-4">
            <!-- Layanan 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <div class="bg-blue-100 w-20 h-20 mx-auto rounded-full flex items-center justify-center">
                    <img src="{{ asset('assets/img/icon_kiloan.png') }}" alt="Cuci Kiloan" class="w-12 h-12">
                </div>
                <h3 class="text-xl font-semibold mt-4 text-blue-800">Cuci Kiloan</h3>
                <p class="text-blue-600 font-medium my-2">Rp 8.000/kg</p>
                <ul class="text-left text-gray-600 text-sm mt-3 space-y-2">
                    <li class="flex items-start">
                        <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Minimal 3 kg</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Gratis pewangi lembut</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Selesai 24 jam</span>
                    </li>
                </ul>
                <button 
                    onclick="window.open('https://wa.me/6285215692377?text=Halo%20LaundryFresh,%0A%0ASaya%20ingin%20memesan%20layanan%20laundry%20dengan%20detail%20sebagai%20berikut%3A%0A%0A*Nama*%3A%20%0A*No.%20HP*%3A%20%0A*Alamat*%3A%20%0A*Jenis%20Layanan*%3A%20%0A-%20Cuci%20Kering%0A-%20Cuci%20Setrika%0A-%20Express%0A*Perkiraan%20Berat*%3A%20%0A*Catatan%20Khusus*%3A%20%0A%0ATerima%20kasih', '_blank')"
                    class="mt-4 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-full text-sm transition-colors">
                    Pesan Sekarang
                </button>
            </div>

            <!-- Layanan 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <div class="bg-blue-100 w-20 h-20 mx-auto rounded-full flex items-center justify-center">
                    <img src="{{ asset('assets/img/icon_kiloan-1.png') }}" alt="Cuci Setrika" class="w-12 h-12">
                </div>
                <h3 class="text-xl font-semibold mt-4 text-blue-800">Cuci + Setrika</h3>
                <p class="text-blue-600 font-medium my-2">Rp 12.000/kg</p>
                <ul class="text-left text-gray-600 text-sm mt-3 space-y-2">
                    <li class="flex items-start">
                        <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Setrika rapi per item</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Lipatan profesional</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Gratis packing plastik</span>
                    </li>
                </ul>
                <button class="mt-4 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-full text-sm transition-colors">
                    Pesan Sekarang
                </button>
            </div>

            <!-- Layanan 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <div class="bg-blue-100 w-20 h-20 mx-auto rounded-full flex items-center justify-center">
                    <img src="{{ asset('assets/img/icon_TBEAR.png') }}" alt="Boneka" class="w-12 h-12">
                </div>
                <h3 class="text-xl font-semibold mt-4 text-blue-800">Laundry Boneka</h3>
                <p class="text-blue-600 font-medium my-2">Rp 25.000/item</p>
                <ul class="text-left text-gray-600 text-sm mt-3 space-y-2">
                    <li class="flex items-start">
                        <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Cuci steril khusus boneka</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Pengeringan sempurna</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Aman untuk anak-anak</span>
                    </li>
                </ul>
                <button class="mt-4 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-full text-sm transition-colors">
                    Pesan Sekarang
                </button>
            </div>

            <!-- Layanan 4 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <div class="bg-blue-100 w-20 h-20 mx-auto rounded-full flex items-center justify-center">
                    <img src="{{ asset('assets/img/icon_baby.png') }}" alt="Bayi" class="w-12 h-12">
                </div>
                <h3 class="text-xl font-semibold mt-4 text-blue-800">Perlengkapan Bayi</h3>
                <p class="text-blue-600 font-medium my-2">Rp 15.000/kg</p>
                <ul class="text-left text-gray-600 text-sm mt-3 space-y-2">
                    <li class="flex items-start">
                        <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Detergen khusus hypoallergenic</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Tekstur tetap lembut</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Pewangi aman untuk bayi</span>
                    </li>
                </ul>
                <button class="mt-4 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-full text-sm transition-colors">
                    Pesan Sekarang
                </button>
            </div>
        </div>
    </div>
</section>

    <!-- Search Section -->
    <section id="cari" class="py-8 md:py-10 px-4 text-center">
        <div class="container mx-auto">
            <h2 class="text-2xl sm:text-3xl font-bold text-blue-600">Cari Pesanan Anda</h2>
            <form action="/search" method="GET" class="mt-4 flex flex-col sm:flex-row justify-center gap-2 max-w-md mx-auto">
                <input type="text" name="noHp" placeholder="Cari berdasarkan No HP" required class="p-2 border border-gray-300 rounded flex-grow">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Cari</button>
            </form>
        </div>
    </section>

    <!-- Service Section -->
    <section id="service" class="py-12 md:py-20 px-4 sm:px-6 bg-gray-200">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl sm:text-3xl font-bold text-blue-600">MENGAPA MEMILIH LAUNDRY KAMI</h2>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg">
                    <img src="{{ asset('assets/img/icon_1_mesin_cuci.png') }}" alt="Washing Icon" class="mx-auto mb-4 w-16 h-16">
                    <h3 class="text-lg sm:text-xl font-semibold">Jaminan Higienis</h3>
                    <p class="mt-2 text-gray-600 text-sm sm:text-base">Dengan konsep 1 mesin untuk 1 pelanggan, pakaian tidak dicampur dengan pelanggan yang lain agar lebih higienis dan mencegah pakaian tertukar dengan pelanggan lain.</p>
                </div>
                <div class="bg-white p-6 rounded-lg">
                    <img src="{{ asset('assets/img/icon-sabun.png') }}" alt="Ironing Icon" class="mx-auto mb-4 w-16 h-16">
                    <h3 class="text-lg sm:text-xl font-semibold">Penggunaan Detergen Pilihan</h3>
                    <p class="mt-2 text-gray-600 text-sm sm:text-base">Kami menggunakan berbagai jenis deterjen dan pembersih sesuai dengan jenis noda dan bahan pakaian Anda. Semua pakaian ditangani oleh staf terlatih.</p>
                </div>
                <div class="bg-white p-6 rounded-lg">
                    <img src="{{ asset('assets/img/icon-checkmark.png') }}" alt="Dry Cleaning Icon" class="mx-auto mb-4 w-16 h-16">
                    <h3 class="text-lg sm:text-xl font-semibold">Jaminan Kehilangan</h3>
                    <p class="mt-2 text-gray-600 text-sm sm:text-base">Prosedur kami selalu diperbarui untuk meningkatkan layanan. Jika terjadi kehilangan, kami memberikan garansi sesuai syarat dan ketentuan.</p>
                </div>
                <div class="bg-white p-6 rounded-lg">
                    <img src="{{ asset('assets/img/icon_monitoring.png') }}" alt="Washing Icon" class="mx-auto mb-4 w-16 h-16">
                    <h3 class="text-lg sm:text-xl font-semibold">Pemantauan Proses Cucian Secara Realtime</h3>
                    <p class="mt-2 text-gray-600 text-sm sm:text-base">Anda dapat memantau proses cucian Anda, mulai dari pencucian hingga tahap finishing.</p>
                </div>
                <div class="bg-white p-6 rounded-lg">
                    <img src="{{ asset('assets/img/icon_payment.png') }}" alt="Ironing Icon" class="mx-auto mb-4 w-16 h-16">
                    <h3 class="text-lg sm:text-xl font-semibold">Fleksibilitas Pembayaran</h3>
                    <p class="mt-2 text-gray-600 text-sm sm:text-base">Kami menyediakan berbagai metode pembayaran yang dapat disesuaikan dengan kebutuhan Anda, termasuk pembayaran tunai atau transfer melalui BCA atau QRIS.</p>
                </div>
                <div class="bg-white p-6 rounded-lg">
                    <img src="{{ asset('assets/img/icon_digital.png') }}" alt="Dry Cleaning Icon" class="mx-auto mb-4 w-16 h-16">
                    <h3 class="text-lg sm:text-xl font-semibold">Digitalisasi Proses</h3>
                    <p class="mt-2 text-gray-600 text-sm sm:text-base">Semua proses mulai dari penjemputan hingga pengantaran kembali dilakukan secara paperless, memastikan kemudahan dan efisiensi.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-12 md:py-20 px-4 sm:px-6 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-blue-600">CARA KERJA LAUNDRY KAMI</h2>
            <div class="mt-8 flex flex-col sm:flex-row justify-center items-center gap-6 sm:gap-8 md:gap-10">
                <div class="flex flex-col items-center max-w-xs">
                    <img src="{{ asset('assets/img/icon_schedule.png') }}" alt="Washing Icon" class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 mb-4">
                    <h3 class="text-base sm:text-lg font-semibold text-center">Pilih Jadwal Pengambilan kapan saja</h3>
                </div>
                <div class="flex flex-col items-center max-w-xs">
                    <img src="{{ asset('assets/img/icon_mesin_cuci.png') }}" alt="Ironing Icon" class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 mb-4">
                    <h3 class="text-base sm:text-lg font-semibold text-center">Kami Proses Pakaian Anda</h3>
                </div>
                <div class="flex flex-col items-center max-w-xs">
                    <img src="{{ asset('assets/img/icon_delivery2.png') }}" alt="Dry Cleaning Icon" class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 mb-4">
                    <h3 class="text-base sm:text-lg font-semibold text-center">Antar Pakaian Bersih Sesuai <br>Jadwal Antar Jemput</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="py-6 bg-gray-100 dark:text-gray-900">
        <div class="container px-6 mx-auto space-y-6 divide-y dark:divide-gray-600 md:space-y-12 divide-opacity-50">
            <div class="grid grid-cols-12">
                <div class="pb-6 col-span-full md:pb-0 md:col-span-6">
                    <a rel="noopener noreferrer" href="#" class="flex justify-center space-x-3 md:justify-start">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full dark:bg-violet-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="flex-shrink-0 w-5 h-5 rounded-full dark:text-gray-50">
                                <path d="M18.266 26.068l7.839-7.854 4.469 4.479c1.859 1.859 1.859 4.875 0 6.734l-1.104 1.104c-1.859 1.865-4.875 1.865-6.734 0zM30.563 2.531l-1.109-1.104c-1.859-1.859-4.875-1.859-6.734 0l-6.719 6.734-6.734-6.734c-1.859-1.859-4.875-1.859-6.734 0l-1.104 1.104c-1.859 1.859-1.859 4.875 0 6.734l6.734 6.734-6.734 6.734c-1.859 1.859-1.859 4.875 0 6.734l1.104 1.104c1.859 1.859 4.875 1.859 6.734 0l21.307-21.307c1.859-1.859 1.859-4.875 0-6.734z"></path>
                            </svg>
                        </div>
                        <span class="self-center text-2xl font-semibold">LaundryFresh</span>
                    </a>
                </div>
                <div class="col-span-6 text-center md:text-left md:col-span-3">
                    <p class="pb-1 text-lg font-medium">Category</p>
                    <ul>
                        <li>
                            <a rel="noopener noreferrer" href="#" class="hover:dark:text-violet-600">Link</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#" class="hover:dark:text-violet-600">Link</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#" class="hover:dark:text-violet-600">Link</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#" class="hover:dark:text-violet-600">Link</a>
                        </li>
                    </ul>
                </div>
                <div class="col-span-6 text-center md:text-left md:col-span-3">
                    <p class="pb-1 text-lg font-medium">Category</p>
                    <ul>
                        <li>
                            <a rel="noopener noreferrer" href="#" class="hover:dark:text-violet-600">Link</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#" class="hover:dark:text-violet-600">Link</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#" class="hover:dark:text-violet-600">Link</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#" class="hover:dark:text-violet-600">Link</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="grid justify-center pt-6 lg:justify-between">
                <div class="flex flex-col self-center text-sm text-center md:block lg:col-start-1 md:space-x-6">
                    <span>©2025 diandrfrzaa__</span>
                    <a rel="noopener noreferrer" href="#">
                        <span>Privacy policy</span>
                    </a>
                    <a rel="noopener noreferrer" href="#">
                        <span>Terms of service</span>
                    </a>
                </div>
                <div class="flex justify-center pt-4 space-x-4 lg:pt-0 lg:col-end-13">
                    <a rel="noopener noreferrer" href="#" title="Email" class="flex items-center justify-center w-10 h-10 rounded-full dark:bg-violet-600 dark:text-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                    </a>
                    <a rel="noopener noreferrer" href="#" title="Twitter" class="flex items-center justify-center w-10 h-10 rounded-full dark:bg-violet-600 dark:text-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" fill="currentColor" class="w-5 h-5">
                            <path d="M 50.0625 10.4375 C 48.214844 11.257813 46.234375 11.808594 44.152344 12.058594 C 46.277344 10.785156 47.910156 8.769531 48.675781 6.371094 C 46.691406 7.546875 44.484375 8.402344 42.144531 8.863281 C 40.269531 6.863281 37.597656 5.617188 34.640625 5.617188 C 28.960938 5.617188 24.355469 10.21875 24.355469 15.898438 C 24.355469 16.703125 24.449219 17.488281 24.625 18.242188 C 16.078125 17.8125 8.503906 13.71875 3.429688 7.496094 C 2.542969 9.019531 2.039063 10.785156 2.039063 12.667969 C 2.039063 16.234375 3.851563 19.382813 6.613281 21.230469 C 4.925781 21.175781 3.339844 20.710938 1.953125 19.941406 C 1.953125 19.984375 1.953125 20.027344 1.953125 20.070313 C 1.953125 25.054688 5.5 29.207031 10.199219 30.15625 C 9.339844 30.390625 8.429688 30.515625 7.492188 30.515625 C 6.828125 30.515625 6.183594 30.453125 5.554688 30.328125 C 6.867188 34.410156 10.664063 37.390625 15.160156 37.472656 C 11.644531 40.230469 7.210938 41.871094 2.390625 41.871094 C 1.558594 41.871094 0.742188 41.824219 -0.0585938 41.726563 C 4.488281 44.648438 9.894531 46.347656 15.703125 46.347656 C 34.617188 46.347656 44.960938 30.679688 44.960938 17.09375 C 44.960938 16.648438 44.949219 16.199219 44.933594 15.761719 C 46.941406 14.3125 48.683594 12.5 50.0625 10.4375 Z"></path>
                        </svg>
                    </a>
                    <a rel="noopener noreferrer" href="#" title="GitHub" class="flex items-center justify-center w-10 h-10 rounded-full dark:bg-violet-600 dark:text-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-5 h-5">
                            <path d="M10.9,2.1c-4.6,0.5-8.3,4.2-8.8,8.7c-0.5,4.7,2.2,8.9,6.3,10.5C8.7,21.4,9,21.2,9,20.8v-1.6c0,0-0.4,0.1-0.9,0.1 c-1.4,0-2-1.2-2.1-1.9c-0.1-0.4-0.3-0.7-0.6-1C5.1,16.3,5,16.3,5,16.2C5,16,5.3,16,5.4,16c0.6,0,1.1,0.7,1.3,1c0.5,0.8,1.1,1,1.4,1 c0.4,0,0.7-0.1,0.9-0.2c0.1-0.7,0.4-1.4,1-1.8c-2.3-0.5-4-1.8-4-4c0-1.1,0.5-2.2,1.2-3C7.1,8.8,7,8.3,7,7.6C7,7.2,7,6.6,7.3,6 c0,0,1.4,0,2.8,1.3C10.6,7.1,11.3,7,12,7s1.4,0.1,2,0.3C15.3,6,16.8,6,16.8,6C17,6.6,17,7.2,17,7.6c0,0.8-0.1,1.2-0.2,1.4 c0.7,0.8,1.2,1.8,1.2,3c0,2.2-1.7,3.5-4,4c0.6,0.5,1,1.4,1,2.3v2.6c0,0.3,0.3,0.6,0.7,0.5c3.7-1.5,6.3-5.1,6.3-9.3 C22,6.1,16.9,1.4,10.9,2.1z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal Cari -->
    <div id="detailModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center p-4">
        <div class="bg-white p-4 sm:p-6 rounded shadow-lg w-full max-w-md relative" onclick="event.stopPropagation()">
            <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            <h2 class="text-lg sm:text-xl font-bold mb-4">Detail Pesanan</h2>
            <hr class="border-gray-300 mb-4">
            <p class="font-bold mt-4">Nama Pemesan: <span class="font-normal" id="nama"></span></p>
            <p class="font-bold mt-4">No Handphone: <span class="font-normal" id="noHp"></span></p>
            <p class="font-bold mt-4">Total Harga: Rp. <span class="font-normal text-blue-600" id="totalHarga"></span></p>
            <p class="font-bold mt-4">Tanggal Pemesanan: <span class="font-normal" id="createdAt"></span></p>
            <p class="font-bold mt-4">Status: <span class="font-normal text-blue-600" id="status"></span></p>
            <hr class="border-gray-300 mb-4 mt-4">
            <button onclick="closeModal()" class="mt-4 bg-red-500 text-white px-4 py-2 rounded w-full sm:w-auto">Tutup</button>
        </div>
    </div>

    <!-- Modal Produk -->
    <div id="productModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center p-4">
        <div class="bg-white p-4 sm:p-6 rounded shadow-lg w-full max-w-md relative" onclick="event.stopPropagation()">
            <button onclick="closeProductModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            <h2 class="text-lg sm:text-xl font-bold mb-4">Estimasi Biaya Laundry</h2>
            <hr class="border-gray-300 mb-4">

            <!-- Pilih Produk -->
            <label class="font-bold">Jenis Laundry:</label>
            <select id="produkLaundry" class="border rounded p-2 w-full mt-2 text-sm sm:text-base" onchange="updateHarga()">
                <option value="10000">Cuci Kering - Rp. 10.000/kg</option>
                <option value="12000" disabled>Cuci Setrika - Rp. 12.000/kg -- (Belum Tersedia)</option>
                <option value="15000" disabled>Express - Rp. 15.000/kg -- (Belum Tersedia)</option>
            </select>

            <!-- Input Berat -->
            <label class="font-bold mt-4 block">Berat (kg):</label>
            <input type="number" id="berat" class="border rounded p-2 w-full mt-2 text-sm sm:text-base" value="1" min="1" oninput="updateHarga()">

            <!-- Total Harga -->
            <p class="font-bold mt-4">Total Harga: <span id="hargaEstimasi" class="text-blue-600">Rp. 10.000</span></p>

            <hr class="border-gray-300 my-4">
            <button onclick="closeProductModal()" class="bg-red-500 text-white px-4 py-2 rounded w-full sm:w-auto">Tutup</button>
        </div>
    </div>

    <!-- JavaScript -->
    <script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
    <script>
        var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"Klik disini untuk Order!","cornerRadius":40,"marginBottom":20,"marginLeft":20,"marginRight":20,"btnPosition":"right","whatsAppNumber":"6285215692377","welcomeMessage":"*Nama*: \n*No. HP*: \n*Alamat*: \n*Jenis Layanan*:\n- Cuci Kering\n- Cuci Setrika\n- Express\n*Perkiraan Berat*: \n*Catatan Khusus*: ","zIndex":999999,"btnColorScheme":"light"};
            window.onload = () => {
            _waEmbed(wa_btnSetting);
        };

        document.addEventListener("DOMContentLoaded", function () {
            document.querySelector("form").addEventListener("submit", function (event) {
                event.preventDefault();
                let noHp = document.querySelector("[name=noHp]").value;

                fetch(`/search/pesanan?noHp=${noHp}`)
                    .then((response) => {
                        if (!response.ok) {
                            throw new Error("Data tidak ditemukan");
                        }
                        return response.json();
                    })
                    .then((data) => {
                        console.log(data);
                        // Format harga biar ada titik ribuan
                        let formattedHarga = new Intl.NumberFormat("id-ID").format(data.total_harga);

                        // Format tanggal jadi DD/MM/YYYY
                        let dateObj = new Date(data.created_at);
                        let formattedDate = dateObj.toLocaleDateString("id-ID", {
                            day: "2-digit",
                            month: "2-digit",
                            year: "numeric"
                        });

                        document.getElementById("nama").textContent = data.nama;
                        document.getElementById("noHp").textContent = data.noHp;
                        document.getElementById("totalHarga").textContent = formattedHarga;
                        document.getElementById("createdAt").textContent = formattedDate;
                        document.getElementById("status").textContent = data.status;
                        document.getElementById("detailModal").classList.remove("hidden");
                    })
                    .catch((error) => {
                        alert(error.message);
                    });
            });

            // Biar bisa dipanggil global
            window.closeModal = function () {
                document.getElementById("detailModal").classList.add("hidden");
            };

            // Tutup modal jika klik di luar box modal
            document.getElementById("detailModal").addEventListener("click", function (event) {
                if (event.target === this) {
                    closeModal();
                }
            });
        });

        // produk
        function openProductModal() {
            document.getElementById("productModal").classList.remove("hidden");
        }

        function closeProductModal() {
            document.getElementById("productModal").classList.add("hidden");
        }

        function updateHarga() {
            let hargaPerKg = parseInt(document.getElementById("produkLaundry").value);
            let berat = parseInt(document.getElementById("berat").value);
            let total = hargaPerKg * berat;

            // Pastikan elemen yang dituju benar
            let totalHargaElem = document.getElementById("hargaEstimasi");
            
            if (totalHargaElem) {
                totalHargaElem.innerText = `Rp. ${total.toLocaleString()}`;
            } else {
                console.error("Element dengan id 'totalHarga' tidak ditemukan!");
            }
        }
        
    </script>
</body>
</html>