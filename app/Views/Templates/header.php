<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <link rel="icon" href="<?= base_url('assets/images/favicon.png') ?>" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'MyCustomFont';
            src: url('<?= base_url('assets/fonts/Caveat-Bold.ttf') ?>') format('truetype');
            font-weight: normal; /* Atur sesuai kebutuhan */
            font-style: normal; /* Atur sesuai kebutuhan */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg pt-0 pb-0" style="background-color: white;">
    <div class="container">
        <a class="navbar-brand p-0" href="#">
            <img src="<?= base_url('assets/images/logorsmakassar.jpg') ?>" alt="" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profil
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Tugas dan Fungsi</a></li>
                        <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item" href="#">Profil Pejabat</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Kontak</a>
                </li>
            </ul>
        </div>
        
    </div>
    </nav>
