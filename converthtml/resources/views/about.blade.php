<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Angkasa Pura Airports</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("{{ asset('images/about2.jpg') }}");
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: #333;
        }


        .content {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            margin-top: 30px;
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

        h1 {
            color: #004aad;
        }

        p {
            margin-bottom: 20px;
        }

        .airport-list li {
            list-style-type: none;
            margin-bottom: 10px;
        }

        .airport-list i {
            margin-right: 10px;
            color: #6acc60;
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

    <!-- About Section -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="content" style="text-align: justify; margin-bottom: 5%;">
                    <h1>About Angkasa Pura Airports</h1>
                    <p>Angkasa Pura Airports is committed to providing world-class airport services across Indonesia,
                        ensuring
                        seamless travel experiences and connecting Indonesia with the world.</p>

                    <h2>History</h2>
                    <p>Founded in 1962, Angkasa Pura has evolved to manage numerous airports throughout Indonesia,
                        playing a key
                        role in the country's air transportation infrastructure.
                    </p>

                    <h2>Airports</h2>
                    <div class="row">
                        <div class="col-sm-6 p-2">
                            <ul class="airport-list">
                                <li><i class="fas fa-check"></i>I Gusti Ngurah Rai Airport - Denpasar</li>
                                <li><i class="fas fa-check"></i>Juanda Airport - Surabaya</li>
                                <li><i class="fas fa-check"></i>Sultan Hasanuddin Airport - Makassar</li>
                                <li><i class="fas fa-check"></i>Sultan Aji Muhammad Sulaiman - Balikpapan</li>
                                <li><i class="fas fa-check"></i>Frans Kaisiepo Airport - Biak</li>
                                <li><i class="fas fa-check"></i>Sam Ratulangi Airport - Manado</li>
                                <li><i class="fas fa-check"></i>Syamsudin Noor Airport - Banjarmasin</li>
                                <li><i class="fas fa-check"></i>Jenderal Ahmad Yani Airport - Semarang</li>
                            </ul>
                        </div>
                        <div class="col-sm-6 p-2">
                            <ul class="airport-list">
                                <li><i class="fas fa-check"></i>Adisutjipto Airport - Yogyakarta</li>
                                <li><i class="fas fa-check"></i>Adi Soemarmo Airport - Surakarta</li>
                                <li><i class="fas fa-check"></i>Lombok International Airport - Central Lombok</li>
                                <li><i class="fas fa-check"></i>Pattimura Airport - Ambon</li>
                                <li><i class="fas fa-check"></i>El Tari Airport - Kupang</li>
                                <li><i class="fas fa-check"></i>Yogyakarta International Airport - Kulon Progo</li>
                                <li><i class="fas fa-check"></i>Sentani Airport - Jayapura</li>
                            </ul>
                        </div>
                    </div>
                    <h2>Vision</h2>
                    <p>Connecting the world beyond airport operator with Indonesian experience.
                    </p>
                    <h2>Mission</h2>
                    <p>1. Providing world class service in compliance with the best safety</p>
                    <P>2. Security and comfort standards;</P>
                    <p>3. Improve stakeholder value;</p>
                    <p>4. Being a partner of the government and driving economic growth;</p>
                    <p>5. Improving the company's competitiveness through creativity and innovation; </p>
                    <p>6. Providing excellent airport services in meeting stakeholders' expectations through an
                        outstanding human
                        resource management; </p>
                    <p>7. Make a positive contribution to the environmental sustainability.</p>
                    <h2>Values</h2>
                    <p>Trust, Competent, Harmonic, Loyal, Adaptive,Collaborative
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
