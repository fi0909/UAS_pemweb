<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Daftar Produk di Katalog Sewa
    </title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        
        h1{
            font-size: 3rem;
            margin: 5rem;
            font-weight: bold;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-custom {
            background-color: #ccff33;
            color: black;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
        }

        .btn-custom:hover {
            background-color: #b3e600;
        }

        .search-bar {
            display: flex;
            align-items: center;
        }

        .search-bar input {
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            border-right: none;
        }

        .search-bar button {
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            background-color: #ccff33;
            border: none;
            padding: 0 10px;
        }

        .search-bar button:hover {
            background-color: #b3e600;
        }

        .price-range {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .price-range input {
            width: 100%;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'?>
    <div class="container mt-5">
        <h1 class="text-center mb-5">
            Daftar Produk di Katalog Sewa
        </h1>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <h5 class="card-title">
                        Cari produk yang mau disewa
                    </h5>
                    <div class="search-bar mb-3">
                        <input class="form-control" placeholder="Search products..." type="text" />
                        <button class="btn">
                            <i class="fas fa-search">
                            </i>
                        </button>
                    </div>
                    <h5 class="card-title">
                        Harga
                    </h5>
                    <div class="price-range mb-3">
                        <input class="form-range" max="50000" min="29000" step="1000" type="range" />
                    </div>
                    <p>
                        Price: Rp29.000 - Rp50.000
                    </p>
                    <button class="btn btn-custom w-100">
                        Filter
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <img alt="Asus Vivobook 15" class="card-img-top" height="200"
                        src="https://storage.googleapis.com/a1aa/image/jVdntwcnXtIYLRHuR4PwIvgsWsXKk4cInBSQJrU0LAquhVfJA.jpg"
                        width="300" />
                    <div class="card-body">
                        <h5 class="card-title">
                            Asus Vivobook 15
                        </h5>
                        <ul>
                            <li>
                                Prosesor: Intel Core i5 Generasi ke-10
                            </li>
                            <li>
                                RAM: 8GB
                            </li>
                            <li>
                                Penyimpanan: 512GB SSD
                            </li>
                            <li>
                                Layar: 15.6” Full HD
                            </li>
                        </ul>
                        <p>
                            Tugas kuliah, presentasi, dan pemrograman dasar.
                        </p>
                        <button class="btn btn-custom w-100" onclick="gotodetail(">
                            Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <img alt="Apple MacBook Air M1" class="card-img-top" height="200"
                        src="https://storage.googleapis.com/a1aa/image/mSwyJ5eUhKWHXaP25sk14qe1abueEQdm52YuV6feCayX2wqfE.jpg"
                        width="300" />
                    <div class="card-body">
                        <h5 class="card-title">
                            Apple MacBook Air M1
                        </h5>
                        <ul>
                            <li>
                                Prosesor: Apple M1 Chip
                            </li>
                            <li>
                                RAM: 8GB
                            </li>
                            <li>
                                Penyimpanan: 256GB SSD
                            </li>
                            <li>
                                Layar: 13.3” Retina Display
                            </li>
                        </ul>
                        <p>
                            Desain grafis, editing video, dan aplikasi berat.
                        </p>
                        <button class="btn btn-custom w-100">
                            Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <img alt="Dell XPS 13" class="card-img-top" height="200"
                        src="https://storage.googleapis.com/a1aa/image/ND4mXmcc4L4tBx0hY1LRqsazh0QwxW9HH7e7gMmDdE1YDreTA.jpg"
                        width="300" />
                    <div class="card-body">
                        <h5 class="card-title">
                            Dell XPS 13
                        </h5>
                        <ul>
                            <li>
                                Prosesor: Intel Core i7 Generasi ke-11
                            </li>
                            <li>
                                RAM: 16GB
                            </li>
                            <li>
                                Penyimpanan: 1TB SSD
                            </li>
                            <li>
                                Layar: 13.4” 4K UHD
                            </li>
                        </ul>
                        <p>
                            Produktivitas tinggi dan multitasking.
                        </p>
                        <button class="btn btn-custom w-100">
                            Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <img alt="HP Spectre x360" class="card-img-top" height="200"
                        src="https://storage.googleapis.com/a1aa/image/IZ8GtDf5jQ3JbKneBzN7SWP4kuxGTLknULhSC7jBWgBBHW9TA.jpg"
                        width="300" />
                    <div class="card-body">
                        <h5 class="card-title">
                            HP Spectre x360
                        </h5>
                        <ul>
                            <li>
                                Prosesor: Intel Core i7 Generasi ke-10
                            </li>
                            <li>
                                RAM: 16GB
                            </li>
                            <li>
                                Penyimpanan: 512GB SSD
                            </li>
                            <li>
                                Layar: 13.3” Full HD Touchscreen
                            </li>
                        </ul>
                        <p>
                            Fleksibilitas dan performa tinggi.
                        </p>
                        <button class="btn btn-custom w-100">
                            Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <img alt="Lenovo ThinkPad X1 Carbon" class="card-img-top" height="200"
                        src="https://storage.googleapis.com/a1aa/image/luMl2uEZluZUKZYjPShRHwbFnguvR7coH3Trl3AezxrdDreTA.jpg"
                        width="300" />
                    <div class="card-body">
                        <h5 class="card-title">
                            Lenovo ThinkPad X1 Carbon
                        </h5>
                        <ul>
                            <li>
                                Prosesor: Intel Core i7 Generasi ke-10
                            </li>
                            <li>
                                RAM: 16GB
                            </li>
                            <li>
                                Penyimpanan: 1TB SSD
                            </li>
                            <li>
                                Layar: 14” Full HD
                            </li>
                        </ul>
                        <p>
                            Ketahanan dan performa bisnis.
                        </p>
                        <button class="btn btn-custom w-100">
                            Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <img alt="Microsoft Surface Laptop 4" class="card-img-top" height="200"
                        src="https://storage.googleapis.com/a1aa/image/tFjWZcPpMJJxNNHZPtSYnqimJ4Jypvf2KCHChgbTrlteGW9TA.jpg"
                        width="300" />
                    <div class="card-body">
                        <h5 class="card-title">
                            Microsoft Surface Laptop 4
                        </h5>
                        <ul>
                            <li>
                                Prosesor: AMD Ryzen 7
                            </li>
                            <li>
                                RAM: 16GB
                            </li>
                            <li>
                                Penyimpanan: 512GB SSD
                            </li>
                            <li>
                                Layar: 15” PixelSense
                            </li>
                        </ul>
                        <p>
                            Desain elegan dan performa kuat.
                        </p>
                        <button class="btn btn-custom w-100">
                            Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <img alt="Acer Swift 3" class="card-img-top" height="200"
                        src="https://storage.googleapis.com/a1aa/image/i9mUEwIU8ap8AZq1Pfa7mWM4XfzmwHp1uuazCLx4QKvfNs6nA.jpg"
                        width="300" />
                    <div class="card-body">
                        <h5 class="card-title">
                            Acer Swift 3
                        </h5>
                        <ul>
                            <li>
                                Prosesor: AMD Ryzen 5
                            </li>
                            <li>
                                RAM: 8GB
                            </li>
                            <li>
                                Penyimpanan: 512GB SSD
                            </li>
                            <li>
                                Layar: 14” Full HD
                            </li>
                        </ul>
                        <p>
                            Portabilitas dan efisiensi.
                        </p>
                        <button class="btn btn-custom w-100">
                            Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <img alt="Asus ZenBook 14" class="card-img-top" height="200"
                        src="https://storage.googleapis.com/a1aa/image/FkQnS40HJ7rNMVQhxENq2cyiUvmYC3igXR5vAacnyOrthVfJA.jpg"
                        width="300" />
                    <div class="card-body">
                        <h5 class="card-title">
                            Asus ZenBook 14
                        </h5>
                        <ul>
                            <li>
                                Prosesor: Intel Core i7 Generasi ke-11
                            </li>
                            <li>
                                RAM: 16GB
                            </li>
                            <li>
                                Penyimpanan: 512GB SSD
                            </li>
                            <li>
                                Layar: 14” Full HD
                            </li>
                        </ul>
                        <p>
                            Desain premium dan performa tinggi.
                        </p>
                        <button class="btn btn-custom w-100">
                            Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <img alt="Razer Blade 15" class="card-img-top" height="200"
                        src="https://storage.googleapis.com/a1aa/image/J91EpMl2QWJ7CVNovDOpwqZDEjQR0OKG28IYX111e9LcDreTA.jpg"
                        width="300" />
                    <div class="card-body">
                        <h5 class="card-title">
                            Razer Blade 15
                        </h5>
                        <ul>
                            <li>
                                Prosesor: Intel Core i7 Generasi ke-10
                            </li>
                            <li>
                                RAM: 16GB
                            </li>
                            <li>
                                Penyimpanan: 1TB SSD
                            </li>
                            <li>
                                Layar: 15.6” Full HD 144Hz
                            </li>
                        </ul>
                        <p>
                            Gaming dan performa tinggi.
                        </p>
                        <button class="btn btn-custom w-100">
                            Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <img alt="LG Gram 17" class="card-img-top" height="200"
                        src="https://storage.googleapis.com/a1aa/image/UWRKfKnX2g1tBCSNROBBEPLucSwGdB1VcuE5jy6eecgpNs6nA.jpg"
                        width="300" />
                    <div class="card-body">
                        <h5 class="card-title">
                            LG Gram 17
                        </h5>
                        <ul>
                            <li>
                                Prosesor: Intel Core i7 Generasi ke-11
                            </li>
                            <li>
                                RAM: 16GB
                            </li>
                            <li>
                                Penyimpanan: 1TB SSD
                            </li>
                            <li>
                                Layar: 17” WQXGA
                            </li>
                        </ul>
                        <p>
                            Layar besar dan portabilitas.
                        </p>
                        <button class="btn btn-custom w-100">
                            Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js">
    </script>
    <script>
        function goToDetail(name, price, image) {
            const params = new URLSearchParams({ name, price, image });
            window.location.href = `katalog.php${params.toString()}`;
        }
    </script>
</body>

</html>