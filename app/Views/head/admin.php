<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Aplikasi Pemesanan Makanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-50 text-gray-800 font-sans">
    <!-- Navbar -->
    <nav class="bg-blue-600 px-6 py-4 shadow-md flex justify-between items-center">
        <div class="text-white text-xl font-bold tracking-wide">🍽️ RUMAH MAKAN SEDERHANA</div>
        <div class="flex items-center gap-6 text-white">
            <a href="#" class="hover:underline">Master Data</a>
            <a href="#" class="hover:underline">Data Transaksi</a>
            <a href="#" class="hover:underline">Laporan</a>
        </div>
        <div class="flex items-center gap-3 text-white">
            <i class="fas fa-bell"></i>
            <i class="fas fa-user-circle text-2xl"></i>
            <span class="font-semibold">ADMIN</span>
        </div>
    </nav>

    <!-- Breadcrumb -->
    <div class="bg-white border-b px-6 py-3 text-sm text-gray-500">
        Home / <span class="font-semibold text-gray-700">Dashboard</span>
    </div>

    <!-- Dashboard -->
    <main class="px-6 py-6 max-w-7xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">📊 Dashboard</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
            <!-- Card -->
            <div class="bg-blue-500 text-white p-5 rounded-2xl shadow-md">
                <div class="text-5xl font-bold">14</div>
                <div class="text-lg mt-1">Restoran</div>
                <a href="#" class="mt-4 inline-flex items-center text-sm underline hover:opacity-80">
                    Lihat selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <div class="bg-green-500 text-white p-5 rounded-2xl shadow-md">
                <div class="text-5xl font-bold">2</div>
                <div class="text-lg mt-1">Daftar Menu</div>
                <a href="#" class="mt-4 inline-flex items-center text-sm underline hover:opacity-80">
                    Lihat selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <div class="bg-yellow-500 text-white p-5 rounded-2xl shadow-md">
                <div class="text-5xl font-bold">4</div>
                <div class="text-lg mt-1">Pesanan Belum Bayar</div>
                <a href="#" class="mt-4 inline-flex items-center text-sm underline hover:opacity-80">
                    Lihat selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <div class="bg-red-500 text-white p-5 rounded-2xl shadow-md">
                <div class="text-5xl font-bold">6</div>
                <div class="text-lg mt-1">Pesanan Sudah Bayar</div>
                <a href="#" class="mt-4 inline-flex items-center text-sm underline hover:opacity-80">
                    Lihat selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <div class="bg-purple-600 text-white p-5 rounded-2xl shadow-md">
                <div class="text-5xl font-bold">8</div>
                <div class="text-lg mt-1">Total Pesanan</div>
                <a href="#" class="mt-4 inline-flex items-center text-sm underline hover:opacity-80">
                    Lihat selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>

        <!-- Welcome Banner -->
        <div class="bg-green-600 text-white mt-8 p-6 rounded-2xl shadow-lg">
            <h2 class="text-xl font-bold mb-1">Selamat Datang, "ADMIN"</h2>
            <p class="text-sm">DI APLIKASI PEMESANAN MAKANAN DI RUMAH MAKAN SEDERHANA</p>
        </div>
    </main>

    <!-- Footer -->
    <footer class="mt-10 p-6 text-center text-sm text-gray-500 border-t">
        &copy; 2024 Kendali Restoran. All rights reserved.
    </footer>
</body>
</html>
