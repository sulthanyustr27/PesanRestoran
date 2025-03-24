<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pemesanan Bento</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-red-100">
    <header class="bg-red-700 p-4 flex justify-between items-center">
        <h1 class="text-white text-xl font-semibold">PESAN MAKANAN DAN MINUMAN</h1>
        <div class="flex items-center">
            <span class="text-white mr-2">Sakura Bento</span>
            <i class="fas fa-user-circle text-white text-2xl"></i>
        </div>
    </header>
    <main class="container mx-auto p-4">
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-2/3 p-4">
                <h2 class="text-lg font-semibold mb-4 text-red-800">Pilih Menu Bento Anda</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Bento Item 1 -->
                    <div class="bg-white p-4 rounded shadow">
                        <img src="https://example.com/bento1.jpg" alt="Salmon Teriyaki Bento" class="w-full h-40 object-cover rounded mb-4">
                        <div class="text-center">
                            <p class="text-gray-700 font-semibold">Rp. 50.000</p>
                            <p class="text-gray-500">Salmon Teriyaki Bento</p>
                            <button class="bg-red-600 text-white px-4 py-2 rounded mt-2">Pilih</button>
                        </div>
                    </div>
                    <!-- Bento Item 2 -->
                    <div class="bg-white p-4 rounded shadow">
                        <img src="https://example.com/bento2.jpg" alt="Chicken Katsu Bento" class="w-full h-40 object-cover rounded mb-4">
                        <div class="text-center">
                            <p class="text-gray-700 font-semibold">Rp. 45.000</p>
                            <p class="text-gray-500">Chicken Katsu Bento</p>
                            <button class="bg-red-600 text-white px-4 py-2 rounded mt-2">Pilih</button>
                        </div>
                    </div>
                    <!-- Bento Item 3 -->
                    <div class="bg-white p-4 rounded shadow">
                        <img src="https://example.com/bento3.jpg" alt="Beef Yakiniku Bento" class="w-full h-40 object-cover rounded mb-4">
                        <div class="text-center">
                            <p class="text-gray-700 font-semibold">Rp. 55.000</p>
                            <p class="text-gray-500">Beef Yakiniku Bento</p>
                            <button class="bg-red-600 text-white px-4 py-2 rounded mt-2">Pilih</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-4">
                <h2 class="text-lg font-semibold mb-4 text-red-800">Pesanan Anda</h2>
                <div class="bg-white p-4 rounded shadow">
                    <div class="mb-4">
                        <label class="block text-gray-700">Atas Nama</label>
                        <input class="w-full p-2 border rounded" readonly type="text" value="TARO"/>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Kode Pemesanan</label>
                        <input class="w-full p-2 border rounded" readonly type="text" value="PSN0822100001"/>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">No Meja</label>
                        <input class="w-full p-2 border rounded" placeholder="No Meja" type="text"/>
                    </div>
                    <div class="mb-4">
                        <table class="w-full text-left border">
                            <thead>
                                <tr>
                                    <th class="border px-2 py-1">Hapus</th>
                                    <th class="border px-2 py-1">Menu</th>
                                    <th class="border px-2 py-1">Jumlah</th>
                                    <th class="border px-2 py-1">Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-2 py-1 text-center">
                                        <i class="fas fa-trash text-red-500"></i>
                                    </td>
                                    <td class="border px-2 py-1">Salmon Teriyaki Bento</td>
                                    <td class="border px-2 py-1">1</td>
                                    <td class="border px-2 py-1">50000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mb-4">
                        <p class="text-right font-semibold">TOTAL: Rp.50.000</p>
                    </div>
                    <div class="flex justify-between">
                        <button class="bg-red-700 text-white px-4 py-2 rounded">ORDER</button>
                        <button class="bg-yellow-500 text-white px-4 py-2 rounded">Ubah Pesanan</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>