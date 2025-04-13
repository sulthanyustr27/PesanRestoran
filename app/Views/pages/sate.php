<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Pemesanan Makanan dan Minuman</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-gray-100">
<header class="bg-orange-500 text-white p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold"><a href="/">PEMESANAN MAKANAN DAN MINUMAN</a></h1>
    <div class="flex items-center">
        <span class="mr-2">Sate Pak Joko</span>
        <i class="fas fa-user-circle text-2xl"></i>
    </div>
</header>
<main class="p-4">
    <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row justify-between">
            <div class="w-full lg:w-2/3">
                <h2 class="text-lg font-semibold mb-4">Silahkan Pilih Menu Makanan dan Minuman</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="bg-white p-4 rounded shadow">
                        <img alt="Paket Nasi Timbel Komplit" class="w-full h-40 object-cover mb-4"
                             src="https://storage.googleapis.com/a1aa/image/bNbTfRTfrPanxa-mNmpu1GIhfzdHfIuazDOr2g0uZGA.jpg"/>
                        <p class="text-center font-semibold">Rp. 25.000</p>
                        <p class="text-center mb-4">PAKET NASI TIMBEL KOMPLIT</p>
                        <button class="bg-blue-500 text-white py-2 px-4 rounded w-full pilih-btn"
                                data-menu="PAKET NASI TIMBEL KOMPLIT" data-harga="25000">Pilih
                        </button>
                    </div>
                    <div class="bg-white p-4 rounded shadow">
                        <img alt="Paket Nasi Tutug Oncom" class="w-full h-40 object-cover mb-4"
                             src="https://storage.googleapis.com/a1aa/image/skLcZry9LZHNgtwUpKeTZCSneHQIeZIyWMjIv6koZAA.jpg"/>
                        <p class="text-center font-semibold">Rp. 25.000</p>
                        <p class="text-center mb-4">PAKET NASI TUTUG ONCOM</p>
                        <button class="bg-blue-500 text-white py-2 px-4 rounded w-full pilih-btn"
                                data-menu="PAKET NASI TUTUG ONCOM" data-harga="25000">Pilih
                        </button>
                    </div>
                    <div class="bg-white p-4 rounded shadow">
                        <img alt="Paket Nasi Tutug Oncom" class="w-full h-40 object-cover mb-4"
                             src="https://storage.googleapis.com/a1aa/image/skLcZry9LZHNgtwUpKeTZCSneHQIeZIyWMjIv6koZAA.jpg"/>
                        <p class="text-center font-semibold">Rp. 5.000</p>
                        <p class="text-center mb-4">Es teh</p>
                        <button class="bg-blue-500 text-white py-2 px-4 rounded w-full pilih-btn"
                                data-menu="Es teh" data-harga="5000">Pilih
                        </button>
                    </div>
                    <div class="bg-white p-4 rounded shadow">
                        <img alt="Paket Nasi Tutug Oncom" class="w-full h-40 object-cover mb-4"
                             src="https://storage.googleapis.com/a1aa/image/skLcZry9LZHNgtwUpKeTZCSneHQIeZIyWMjIv6koZAA.jpg"/>
                        <p class="text-center font-semibold">Rp. 105.000</p>
                        <p class="text-center mb-4">Sate</p>
                        <button class="bg-blue-500 text-white py-2 px-4 rounded w-full pilih-btn"
                                data-menu="Sate" data-harga="105000">Pilih
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/3 mt-8 lg:mt-0">
                <h2 class="text-lg font-semibold mb-4">Pesanan Anda</h2>
                <div class="bg-white p-4 rounded shadow">
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700" for="name">Atas Nama</label>
                        <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="name" type="text"
                               value="HAKIM"/>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700" for="order-code">Kode Pemesanan</label>
                        <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="order-code" type="text"
                               value="PSN0822100001"/>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700" for="table-number">No Meja</label>
                        <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="table-number"
                               placeholder="No Meja" type="text"/>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white" id="order-table">
                            <thead>
                            <tr>
                                <th class="px-4 py-2">Hapus</th>
                                <th class="px-4 py-2">Menu</th>
                                <th class="px-4 py-2">Jumlah</th>
                                <th class="px-4 py-2">Harga</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="border px-4 py-2 text-center">
                                    <i class="fas fa-trash text-red-500 hapus-btn"></i>
                                </td>
                                <td class="border px-4 py-2">PAKET NASI TIMBEL KOMPLIT</td>
                                <td class="border px-4 py-2 text-center">1</td>
                                <td class="border px-4 py-2 text-right">25000</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <span class="font-semibold" id="total-price">TOTAL: Rp.25.000</span>
                    </div>
                    <div class="flex justify-between mt-4">
                        <button class="bg-green-500 text-white py-2 px-4 rounded" id="order-btn">ORDER</button>
                        <button class="bg-yellow-500 text-white py-2 px-4 rounded" id="ubah-btn">Ubah Pesanan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- back end -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const pilihButtons = document.querySelectorAll('.pilih-btn');
        const orderTable = document.getElementById('order-table').getElementsByTagName('tbody')[0];
        const totalPriceElement = document.getElementById('total-price');
        let totalPrice = 25000;

        pilihButtons.forEach(button => {
            button.addEventListener('click', function () {
                const menu = this.getAttribute('data-menu');
                const harga = parseInt(this.getAttribute('data-harga'));

                let existingRow = null;
                const rows = orderTable.getElementsByTagName('tr');
                for (let i = 0; i < rows.length; i++) {
                    if (rows[i].cells[1].textContent === menu) {
                        existingRow = rows[i];
                        break;
                    }
                }

                if (existingRow) {
                    const jumlahCell = existingRow.cells[2];
                    const hargaCell = existingRow.cells[3];
                    const jumlah = parseInt(jumlahCell.textContent) + 1;
                    jumlahCell.textContent = jumlah;
                    hargaCell.textContent = harga * jumlah;
                } else {
                    const newRow = orderTable.insertRow();
                    newRow.innerHTML = `
                        <td class="border px-4 py-2 text-center">
                            <i class="fas fa-trash text-red-500 hapus-btn"></i>
                        </td>
                        <td class="border px-4 py-2">${menu}</td>
                        <td class="border px-4 py-2 text-center">1</td>
                        <td class="border px-4 py-2 text-right">${harga}</td>
                    `;

                    newRow.querySelector('.hapus-btn').addEventListener('click', function () {
                        const row = this.closest('tr');
                        const price = parseInt(row.cells[3].textContent);
                        totalPrice -= price;
                        totalPriceElement.textContent = `TOTAL: Rp.${totalPrice}`;
                        row.remove();
                    });
                }

                totalPrice += harga;
                totalPriceElement.textContent = `TOTAL: Rp.${totalPrice}`;
            });
        });

        document.getElementById('order-btn').addEventListener('click', function () {
            alert('Order placed successfully!');
        });

        document.getElementById('ubah-btn').addEventListener('click', function () {
            alert('Order updated successfully!');
        });

        document.querySelectorAll('.hapus-btn').forEach(button => {
            button.addEventListener('click', function () {
                const row = this.closest('tr');
                const price = parseInt(row.cells[3].textContent);
                totalPrice -= price;
                totalPriceElement.textContent = `TOTAL: Rp.${totalPrice}`;
                row.remove();
            });
        });
    });
</script>
</body>
</html>