<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f1e4;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
            position: flex;
        }
        
        .background-wave {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 250px;
            background: linear-gradient(135deg,rgb(154, 161, 255), #fad0c4);
            clip-path: ellipse(100% 50% at 50% 0%);
        }
        
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .welcome-text {
            animation: fadeIn 2s ease-in-out;
            font-size: 2.5rem;
            font-weight: bold;
            position: relative;
            z-index: 1;
        }
        .restaurant-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            cursor: pointer;
            text-decoration: none;
        }
        .restaurant-card:hover {
            transform: scale(1.05);
        }
        .restaurant-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }
        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-top: 50px;
            position: relative;
        }
        .rating {
            color: #ffc107;
            font-size: 1.2rem;
        }
        .card-text {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="background-wave"></div>
    <div class="container position-relative">
        <div class="row">
            <div class="col-12">
                <h1 class="welcome-text text-white">Silakan Pilih Restoran Anda</h1>
                <p class="fw-bolder fs-4">Pilih restoran favorit Anda dan nikmati hidangan terbaik!</p>
            </div>
        </div>
        <div class="restaurant-container">
            <a href="/pages/sate" class="card restaurant-card p-3" style="width: 18rem;" onclick="alert('Anda memilih Restoran Sate Mas Joko')">
                <img src="img/sate.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text text-start">Sate Khas Nusantara – Warisan Rasa yang Melekat di Hati!
                    Di "Sate Mas Joko", kami menyajikan sate dengan daging pilihan yang dibakar sempurna, berpadu dengan bumbu kacang khas yang kaya rasa. <br>  <span class="text-muted">Lihat menu lengkap...</span></p>
                    <div class="rating text-start">★★★★★</div>
                </div>
            </a>
            <a href="/pages/sakuraBento" class="card restaurant-card p-3" style="width: 18rem;"  onclick="alert('Anda memilih Restoran Sakura Bento')">
                <img src="img/katsu.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text text-start">Kelezatan Jepang dalam Setiap Gigitan!
                    "Sakura Bento" menghadirkan hidangan khas Jepang seperti Chicken Katsu, Beef Yakiniku, dan Tempura yang otentik. <br>  <span class="text-muted">Lihat menu lengkap...</span></p>
                    <div class="rating text-start">★★★★★</div>
                </div>
            </a>
            <a href="#" class="card restaurant-card p-3" style="width: 18rem;"  onclick="alert('Anda memilih Restoran C')">
                <img src="img/iga.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text text-start">Restoran C - Hidangan khas terbaik! <br>  <span class="text-muted">Lihat menu lengkap...</span></p>
                    <div class="rating text-start">★★★★☆</div>
                </div>
            </a>
            <a href="#" class="card restaurant-card p-3" style="width: 18rem;"  onclick="alert('Anda memilih Restoran D')">
                <img src="img/ayam.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text text-start">Restoran D - Menu spesial menanti Anda! <br>  <span class="text-muted">Lihat menu lengkap...</span></p>
                    <div class="rating text-start">★★★☆☆</div>
                </div>
            </a>
            <a href="#" class="card restaurant-card p-3" style="width: 18rem;"  onclick="alert('Anda memilih Restoran E')">
                <img src="img/spageti.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text text-start">Restoran E - Sensasi rasa luar biasa! <br>  <span class="text-muted">Lihat menu lengkap...</span></p>
                    <div class="rating text-start">★★★★★</div>
                </div>
            </a>
        </div>
    </div>
    <!-- footer -->
    <footer class="footer">
        <p>&copy; 2025 Restoran Favorit. Semua Hak Dilindungi.</p>
        <p>Hubungi kami: <a href="mailto:info@restoran.com" class="text-light">info@restoran.com</a></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
