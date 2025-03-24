<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pemesanan Makanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <header class="bg-orange-500 p-4 flex justify-between items-center">
        <h1 class="text-white text-xl">PEMESANAN MAKANAN DAN MINUMAN</h1>
        <div class="flex items-center">
            <span class="text-white mr-2">Sate Pak Joko</span>
            <i class="fas fa-user-circle text-white text-2xl"></i>
        </div>
    </header>
    
    <main class="container mx-auto p-4">
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-2/3 p-4">
                <h2 class="text-lg font-semibold mb-4">Silahkan Pilih Menu Makanan dan Minuman</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Menu Items -->
                    <div class="bg-white p-4 rounded shadow">
                        <img src="https://storage.googleapis.com/a1aa/image/5AcfJoD79W1d757-i8tdmWUkEpCg4A-6V4uFjf9nmXw.jpg" 
                             alt="Paket Nasi Timbel Komplit - Rp. 25.000" 
                             class="w-full h-40 object-cover rounded mb-4">
                        <div class="text-center">
                            <p class="text-gray-700 font-semibold">Rp. 25.000</p>
                            <p class="text-gray-500">PAKET NASI TIMBEL KOMPLIT</p>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Pilih</button>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded shadow">
                        <img src="https://storage.googleapis.com/a1aa/image/IpoughYo9wzNUMQ0G5lH--oI0GzdmT-fwdt02ajo82s.jpg" 
                             alt="Paket Nasi Tutug Oncom - Rp. 25.000" 
                             class="w-full h-40 object-cover rounded mb-4">
                        <div class="text-center">
                            <p class="text-gray-700 font-semibold">Rp. 25.000</p>
                            <p class="text-gray-500">PAKET NASI TUTUG ONCOM</p>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Pilih</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="w-full md:w-1/3 p-4">
                <h2 class="text-lg font-semibold mb-4">Pesanan Anda</h2>
                <div class="bg-white p-4 rounded shadow">
                    <div class="mb-4">
                        <label class="block text-gray-700">Atas Nama</label>
                        <input type="text" class="w-full p-2 border rounded" readonly value="HAKIM">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Kode Pemesanan</label>
                        <input type="text" class="w-full p-2 border rounded" readonly value="PSN0822100001">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">No Meja</label>
                        <input type="text" class="w-full p-2 border rounded" placeholder="No Meja">
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
                                    <td class="border px-2 py-1">PAKET NASI TIMBEL KOMPLIT</td>
                                    <td class="border px-2 py-1">1</td>
                                    <td class="border px-2 py-1">25000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mb-4">
                        <p class="text-right font-semibold">TOTAL: Rp.25.000</p>
                    </div>
                    <div class="flex justify-between">
                        <button class="bg-green-500 text-white px-4 py-2 rounded">ORDER</button>
                        <button class="bg-yellow-500 text-white px-4 py-2 rounded">Ubah Pesanan</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>