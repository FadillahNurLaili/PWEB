<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angkasa Pura | AIRPORTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("{{ asset('images/BG4.jpg') }}");
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: #333;
        }


        .search-bar {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand img {
            width: 40px;
            height: auto;
        }

        .navbar-brand {
            font-weight: bold;
            color: #000;
        }

        .hero-text {
            text-align: center;
            margin-top: 170px;
            color: #000;
        }

        .menu-items {
            margin-top: 20px;
        }

        .btn-search {
            background-color: #004aad;
            color: white;
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->
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

    <!-- Hero Section -->
    <div class="container">
        <div class="hero-text">
            <h1>Find The Airports</h1>
            <p>Encourage You to Discover More Indonesia's Pleasure</p>
        </div>

        <!-- Search Bar -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="search-bar">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Airport name, City, Province">
                            <button class="btn btn-search" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <h2>Halaman Tiap Pertemuan</h2>
        <p>Silakan pilih file pertemuan yang ingin Anda lihat:</p>

        <ul class="list-group">
            <li class="list-group-item">
                <a href="{{ url('/hello') }}">Pertemuan 2.0</a>
            </li>
            <li class="list-group-item">
                <a href="{{ url('/style') }}">Pertemuan 2.2</a>
            </li>
            <li class="list-group-item">
                <a href="{{ url('/style2') }}">Pertemuan 2.3</a>
            </li>
            <li class="list-group-item">
                <a href="{{ url('/responsive1') }}">Pertemuan 3</a>
            </li>
            <li class="list-group-item">
                <a href="{{ url('/tugas1') }}">Pertemuan 3 Tugas</a>
            </li>
            <li class="list-group-item">
                <a href="{{ url('/5026221032') }}">Pertemuan 5</a>
            </li>
            <li class="list-group-item">
                <a href="{{ url('/form') }}">Pertemuan 7</a>
            </li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
