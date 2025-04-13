<html>
<head>
    <title>Dashboard - Aplikasi Pemesanan Makanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-red-600 p-4 flex justify-between items-center">
        <div class="text-white font-bold">RUMAH MAKAN SEDERHANA</div>
        <div class="flex space-x-4">
            <a href="#" class="text-white">Master Data</a>
            <a href="#" class="text-white">Data Transaksi</a>
            <a href="#" class="text-white">Laporan</a>
        </div>
        <div class="flex items-center space-x-2">
            <i class="fas fa-bell text-white"></i>
            <i class="fas fa-user-circle text-white"></i>
            <span class="text-white">ADMIN</span>
        </div>
    </nav>

    <!-- Breadcrumb -->
    <div class="bg-gray-200 p-4">
        <div class="container mx-auto">
            <span class="text-gray-600">Home</span> / <span class="text-gray-600">Dashboard</span>
        </div>
    </div>

    <!-- Dashboard Content -->
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- Card 1 -->
            <div class="bg-blue-500 text-white p-4 rounded-lg shadow-md">
                <div class="text-4xl font-bold">14</div>
                <div class="text-lg">Restoran</div>
                <div class="mt-4">
                    <a href="#" class="text-white flex items-center">
                        Lihat selengkapnya <i class="fas fa-arrow-circle-right ml-2"></i>
                    </a>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="bg-green-500 text-white p-4 rounded-lg shadow-md">
                <div class="text-4xl font-bold">2</div>
                <div class="text-lg">Daftar Menu</div>
                <div class="mt-4">
                    <a href="#" class="text-white flex items-center">
                        Lihat selengkapnya <i class="fas fa-arrow-circle-right ml-2"></i>
                    </a>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="bg-yellow-500 text-white p-4 rounded-lg shadow-md">
                <div class="text-4xl font-bold">4</div>
                <div class="text-lg">Pesanan Belum Bayar</div>
                <div class="mt-4">
                    <a href="#" class="text-white flex items-center">
                        Lihat selengkapnya <i class="fas fa-arrow-circle-right ml-2"></i>
                    </a>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="bg-red-500 text-white p-4 rounded-lg shadow-md">
                <div class="text-4xl font-bold">6</div>
                <div class="text-lg">Pesanan Sudah Bayar</div>
                <div class="mt-4">
                    <a href="#" class="text-white flex items-center">
                        Lihat selengkapnya <i class="fas fa-arrow-circle-right ml-2"></i>
                    </a>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="bg-purple-500 text-white p-4 rounded-lg shadow-md">
                <div class="text-4xl font-bold">8</div>
                <div class="text-lg">Total Pesanan</div>
                <div class="mt-4">
                    <a href="#" class="text-white flex items-center">
                        Lihat selengkapnya <i class="fas fa-arrow-circle-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Welcome Message -->
        <div class="bg-green-600 text-white p-4 rounded-lg shadow-md mt-4">
            <div class="text-lg font-bold">Selamat Datang "ADMIN"</div>
            <div class="text-sm">DI APLIKASI PEMESANAN MAKANAN DI RUMAH MAKAN SEDERHANA</div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-200 p-4 mt-4">
        <div class="container mx-auto text-center text-gray-600">
            Copyright © 2020 Rumah Makan Sederhana.
        </div>
    </footer>
</body>
</html>