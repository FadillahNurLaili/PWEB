<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angkasa Pura | News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(255, 255, 255);
        }

        .navbar {
            background-color: white;
            /* background-image: url('BGSUB3.jpg');; */
            /* Transparan dengan warna putih */
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            /* Bayangan bawah */
        }

        .navbar-brand img {
            width: 40px;
            height: auto;
        }

        .navbar-brand {
            font-weight: bold;
            color: #000000;
        }

        .nav-link:hover {
            color: #002f6c;
            /* Warna link saat hover */
        }

        .carousel-item {
            position: relative;
            height: 500px;
        }

        .carousel-item img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }

        .carousel-caption {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.5);
            /* Dark overlay */
            color: white;
            padding: 20px;
            text-align: center;
        }

        .carousel-caption h3 {
            font-size: 1.8rem;
            font-weight: bold;
        }

        .carousel-caption p {
            font-size: 1.2rem;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <!-- Navbar (if you want to include the same navbar as previous pages) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logoAP.png') }}" alt="Logo" class="d-inline-block align-text-top">
                AngkasaPura | AIRPORTS
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/blog/about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/blog/subsidiary') }}">Subsidiary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/blog/news') }}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel Section -->
    <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            <!-- First Slide -->
            <div class="carousel-item active">
                <img src="{{ asset('images/biak1.jpg') }}" alt="Bandara Biak" class="d-block w-100">
                <div class="carousel-caption" style="padding: 15%;">
                    <div>
                        <h3>Bandara Frans Kaisiepo Biak</h3>
                        <p>Bandara dengan runway terpanjang nomor 4 di Indonesia. Bandara ini menjadi pusat penerbangan
                            pada masa penjajahan Belanda dan masa pembebasan Irian Barat.</p>
                    </div>
                </div>
            </div>
            <!-- Second Slide -->
            <div class="carousel-item">
                <img src="{{ asset('images/bali.jpeg') }}" alt="Bandara Bali" class="d-block w-100">
                <div class="carousel-caption" style="padding: 10%;">
                    <div>
                        <h3>Bandara I Gusti Ngurah Rai Bali</h3>
                        <p>Raih "The 3rd World Best Airport 2016" oleh ACI. Bandara ini juga meraih prestasi serupa di
                            tahun 2015 dalam kategori bandara dengan 15-25 juta penumpang per tahun.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional: Carousel controls if you want to add manual control (arrows) -->
        <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
