<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angkasa Pura | Subsidiary & Joint Ventures</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("{{ asset('images/BGSUB3.jpg') }}");
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: #333;
        }

        .navbar-brand img {
            width: 40px;
            height: auto;
        }

        .navbar-brand {
            font-weight: bold;
            color: #000;
        }

        /* Card Styling */
        .subsidiary-cards {
            padding: 50px 0;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .card img {
            max-width: 180px;
            /* Adjust width between 150-200px */
            height: auto;
            /* Keeps the aspect ratio intact */
            margin-bottom: 15px;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            max-width: 100px;
            height: auto;
            margin-bottom: 15px;
        }

        .card-title {
            font-weight: bold;
            color: #004aad;
        }

        /* Responsive media queries */
        @media (max-width: 768px) {
            .card img {
                max-width: 80px;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation Bar (Same as previous pages) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('/images/logoAP.png') }}" alt="Logo" class="d-inline-block align-text-top">
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

    <!-- Subsidiary Section -->
    <div class="container subsidiary-cards">
        <div class="row row-cols-1 row-cols-md-4 g-4">

            <!-- Card 1: Angkasa Pura Hotel (APH) -->
            <div class="col">
                <div class="card h-100 text-center p-3">
                    <h1></h1>
                    <h1></h1>
                    <h1></h1>
                    <img src="{{ asset('images/APH.png') }}" class="card-img-top mx-auto" alt="Angkasa Pura Hotel">
                    <div class="card-body">
                        <h5 class="card-title">Angkasa Pura Hotel (APH)</h5>
                        <p class="card-text">Managing hotels, lounges, restaurants, and other services in various
                            airports.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2: Angkasa Pura Properti (APP) -->
            <div class="col">
                <div class="card h-100 text-center p-3">
                    <img src="{{ asset('images/APR.png') }}" class="card-img-top mx-auto" style="margin-top: 10%;"
                        alt="Angkasa Pura Properti">
                    <div class="card-body">
                        <h5 class="card-title">Angkasa Pura Properti (APP)</h5>
                        <p class="card-text">Focuses on property development, management, utilities, and construction
                            services.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3: Angkasa Pura Retail (APR) -->
            <div class="col">
                <div class="card h-100 text-center p-3">
                    <img src="{{ asset('images/APR.jpg') }}" class="card-img-top mx-auto" alt="Angkasa Pura Retail">
                    <div class="card-body">
                        <h5 class="card-title">Angkasa Pura Retail (APR)</h5>
                        <p class="card-text">Specializes in duty-free, duty-paid sales, F&B, and marketing services.</p>
                    </div>
                </div>
            </div>

            <!-- Card 4: PT Gapura Angkasa -->
            <div class="col">
                <div class="card h-100 text-center p-3">
                    <img src="{{ asset('images/gapura.jpeg') }}" class="card-img-top mx-auto" alt="Gapura Angkasa">
                    <div class="card-body">
                        <h5 class="card-title">PT Gapura Angkasa</h5>
                        <p class="card-text">Provides ground handling services for airlines, a joint venture with Garuda
                            Indonesia and AP II.</p>
                    </div>
                </div>
            </div>

            <!-- Card 5: PT Jasa Marga Bali Tol -->
            <div class="col">
                <div class="card h-100 text-center p-3">
                    <img src="{{ asset('images/jasamarga.jpg') }}" class="card-img-top mx-auto"
                        alt="Jasa Marga Bali Tol">
                    <div class="card-body">
                        <h5 class="card-title">PT Jasa Marga Bali Tol</h5>
                        <p class="card-text">A subsidiary focused on toll road infrastructure and management in Bali.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 6: YAKKAP -->
            <div class="col">
                <div class="card h-100 text-center p-3">
                    <img src="yakkap.jpg" class="card-img-top mx-auto" alt="YAKKAP">
                    <div class="card-body">
                        <h5 class="card-title">YAKKAP</h5>
                        <p class="card-text">The health and welfare foundation for PT Angkasa Pura employees.</p>
                    </div>
                </div>
            </div>

            <!-- Card 7: DAPENRA -->
            <div class="col">
                <div class="card h-100 text-center p-3">
                    <img src="dapenra.jpg" class="card-img-top mx-auto" alt="DAPENRA">
                    <div class="card-body">
                        <h5 class="card-title">DAPENRA</h5>
                        <p class="card-text">The pension fund foundation for PT Angkasa Pura employees.</p>
                    </div>
                </div>
            </div>

            <!-- Card 8: PT BIB -->
            <div class="col">
                <div class="card h-100 text-center p-3">
                    <img src="bib.jpg" class="card-img-top mx-auto" alt="PT BIB">
                    <div class="card-body">
                        <h5 class="card-title">PT BIB</h5>
                        <p class="card-text">Focuses on business development, investment, and airport infrastructure.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
