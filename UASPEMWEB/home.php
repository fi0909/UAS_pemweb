<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Laptop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .hero-section {
            padding: 50px 0;
        }
        
        .hero-section img {
            max-width: 100%;
            height: auto;
        }
        
        .hero-text {
            margin-bottom: 30px;
        }
        
        .hero-text h1 {
            font-size: 48px;
            font-weight: bold;
        }
        
        .hero-text p {
            font-size: 18px;
            color: #666;
        }
        
        .btn-primary {
            background-color: #333;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
        }
        
        .partners img {
            max-height: 100px;
            margin: 75px;
        }
        
        </style>
</head>

<body>
    <?php include 'navbar.php'?>
    
    <div class="container hero-section">
        <div class="row align-items-center">
            <div class="col-md-6 hero-text">
                <h1>
                    Selamat Datang di Website Go Laptop
                </h1>
                <p>
                    Kami hadir untuk membantu mahasiswa memenuhi kebutuhan perangkat laptop dengan mudah, cepat, dan
                    terjangkau. Jelajahi solusi terbaik kami untuk mendukung aktivitas akademik dan proyek Anda.
                </p>
                <a class="btn btn-primary" href="#">
                    Lihat Katalog Sewa
                </a>
            </div>
            <div class="col-md-6">
                <img alt="Laptop with abstract shapes" height="400"
                src="foto\home1.png"
                width="600" />
            </div>
        </div>
    </div>
    <div class="container text-center partners">
        <img alt="ASUS Logo" height="50"
        src="foto\pngegg (9).png"
        width="150" />
        <img alt="Apple Logo" height="50" src="foto\pngegg (15).png"
        width="150" />
        <img alt="Acer Logo" height="50" src="foto\pngegg (8).png"
        width="150" />
        <img alt="Lenovo Logo" height="50"
        src="foto\pngegg (14).png"
        width="150" />
    </div>
    
    <?php include 'layanan_utama.php'?>
    <?php include 'promo_card.php'?>
    <?php include 'kelebihan_layanan.php'?>
    <?php include 'testimoni.php'?>
    <?php include 'footer.php'?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js">
    </script>
</body>
