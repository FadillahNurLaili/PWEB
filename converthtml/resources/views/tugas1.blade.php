<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Linktree-Like Layout</title>
    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .linktree-container {
            max-width: 700px;
            margin: 0 auto;
            padding: 50px;
        }

        .linktree-content {
            border-radius: 10px;
            padding: 14.5px;
        }

        .bg-custom {
            background-color: #568bb8;
        }

        .profile-img {
            width: 95px;
            height: 95px;
            object-fit: cover;
        }

        body {
            background-color: #568bb8;
        }

        .image-container {
            position: relative;
            width: 600px;
            height: 400px;
            overflow: hidden;
            border-radius: 10px;
        }

        .image-container img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .custom-toggle-wrapper {
            position: relative;
            width: 36rem;
            height: 20rem;
        }

        .custom-toggle-normal {
            position: relative;
            width: 36rem;
            height: 4.2rem;
        }

        .custom-toggle-kecil {
            width: 100%;
            height: 100%;
            background-color: white;
            display: grid;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: gray;
            border-radius: 8px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: transform 0.03s ease;
            z-index: 2;
            border: 2px solid black;
            /* Menambahkan border hitam */

        }

        .custom-toggle-normal:hover .custom-toggle-kecil {
            transform: translate(0.3rem, 0.3rem);
            /* Menggerakkan elemen saat di-hover */
        }

        .custom-toggle {
            width: 100%;
            height: 100%;
            background-image: url('{{ asset('images/bgtl.webp') }}');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            text-align: center;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: transform 0.03s ease;
            z-index: 2;
            background: linear-gradient(to top, rgba(14, 8, 8, 0.6), rgba(0, 0, 0, 0) 50%), url('{{ asset('images/bgtl.webp') }}');
            background-size: cover;
            background-position: center;
        }

        .custom-toggle:hover {
            transform: translate(0.25rem, 0.25rem);
        }

        .custom-toggle .text-overlay {
            position: relative;
            padding: 1.1rem;
        }

        .shadow-element {
            position: absolute;
            top: 0.01rem;
            left: 0.01rem;
            width: 100%;
            height: 100%;
            box-shadow: 0.5rem 0.5rem 0rem rgba(0, 0, 0, 0.9);
            border-radius: 8px;
            z-index: 1;
            transition: transform 0.01s ease;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container linktree-container">
        <div class="linktree-content text-center bg-custom text-white rounded">
            <img src="{{ asset('images/profil.webp') }}" alt="Profile Image" class="profile-img"
                style="margin-bottom: 0.4cm;">
            <h5 style="font-weight: bold; margin-bottom: 0.5%;">KESATRIA SEPULUH NOPEMBER</h5>
            <p1>⚠️DIMOHON TIDAK MENYEBARKAN SEGALA</p1>
            <p>INFORMASI PKM ITS KE PIHAK LUAR ITS‼⚠️</p>
        </div>

        <div class="container mt-0">
            <div class="d-flex justify-content-center">
                <a href="https://drive.google.com/file/d/1XT6-CZ3uIXQ4UM1YrK3x3sqT511CRq7R/view" target="_blank">
                    <div class="custom-toggle-wrapper">
                        <div class="custom-toggle">
                            <div class="text-overlay" style="font-weight:500;">
                                Timeline PKM Januari (Click The Picture)
                            </div>
                        </div>
                        <div class="shadow-element"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="container mt-3">
            <div class="d-flex justify-content-center">
                <a href="https://drive.google.com/file/d/1XT6-CZ3uIXQ4UM1YrK3x3sqT511CRq7R/view" target="_blank">
                    <div class="custom-toggle-normal">
                        <div class="custom-toggle-kecil">
                            <div class="text-overlay" style="font-weight:500;">
                                ⚠️PKM ITS REPORT⚠️
                            </div>
                        </div>
                        <div class="shadow-element"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="container mt-4">
            <div class="d-flex justify-content-center">
                <p style="margin: 2; color: white; font-weight: bold; margin-top: 2%;">🔊Pusat Informasi PKM ITS 24🔊
                </p>
            </div>
        </div>

        <div class="container mt-0">
            <div class="d-flex justify-content-center">
                <a href="https://drive.google.com/file/d/1XT6-CZ3uIXQ4UM1YrK3x3sqT511CRq7R/view" target="_blank">
                    <div class="custom-toggle-normal">
                        <div class="custom-toggle-kecil d-flex align-items-center justify-content-between">
                            <img src="{{ asset('images/image.png') }}" alt="Panduan Liga PKM 2024"
                                style="border-radius: 10%;height: 3rem; margin-left: 0.5rem;">
                            <div class="text-overlay"
                                style="font-weight: 500; text-align: center; flex-grow: 1; padding-right: 4rem;">
                                PANDUAN LIGA PKM 2024
                            </div>
                        </div>
                        <div class="shadow-element"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="container mt-4">
            <div class="d-flex justify-content-center">
                <a href="https://drive.google.com/file/d/1XT6-CZ3uIXQ4UM1YrK3x3sqT511CRq7R/view" target="_blank">
                    <div class="custom-toggle-normal">
                        <div class="custom-toggle-kecil d-flex align-items-center justify-content-between">
                            <img src="{{ asset('images/image2.png') }}" alt="Panduan Liga PKM 2024"
                                style="border-radius: 10%;height: 1.5rem; margin-left: 0.8rem;">
                            <div class="text-overlay"
                                style="font-weight: 500; text-align: center; flex-grow: 1; padding-right: 4rem;">
                                DATABASE PROPOSAL PIMNAS ITS
                            </div>
                        </div>
                        <div class="shadow-element"></div>
                    </div>
                </a>
            </div>

            <div class="container mt-4">
                <div class="d-flex justify-content-center">
                    <a href="https://drive.google.com/file/d/1XT6-CZ3uIXQ4UM1YrK3x3sqT511CRq7R/view" target="_blank">
                        <div class="custom-toggle-normal">
                            <div class="custom-toggle-kecil d-flex align-items-center justify-content-between">
                                <img src="{{ asset('images/image3.png') }}" alt="Panduan Liga PKM 2024"
                                    style="border-radius: 10%;height: 2rem; margin-left: 0.8rem;">
                                <div class="text-overlay"
                                    style="font-weight: 500; text-align: center; flex-grow: 1; padding-right: 4rem;">
                                    <p style="margin: 0;">REKAP JUDUL PROPOSAL LOLOS PENDANAAN 2022 - <br>2023</br></p>
                                </div>
                            </div>
                            <div class="shadow-element"></div>
                        </div>
                    </a>
                </div>
            </div>

        </div>


</body>

</html>
