<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/bootstrap.css">
    <script src="<?= BASE_URL; ?>/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg " style="background-color: #FFD95A;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">SMKN 2 Trenggalek</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-4 d-flex" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" aria-current="page" href="<?= BASE_URL; ?>/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="<?= BASE_URL; ?>/dataguru">Data Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="<?= BASE_URL; ?>/datasiswa">Data Siswa</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle fw-bold" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="true">
                            Kompetensi Keahlian
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= BASE_URL; ?>/kuliner">Kuliner</a></li>
                            <li><a class="dropdown-item" href="<?= BASE_URL; ?>/rpl">Rekayasa Perangkat Lunak</a></li>
                            <li><a class="dropdown-item" href="<?= BASE_URL; ?>/dpib">Design Pemodelan dan Informasi
                                    Bangunan</a></li>
                            <li><a class="dropdown-item" href="<?= BASE_URL; ?>/tptu">Teknik Pemanasan, Tata Udara dan
                                    Pendinginan </a></li>
                            <li><a class="dropdown-item" href="<?= BASE_URL; ?>/akuntansi">Akuntansi</a></li>
                            <li><a class="dropdown-item" href="<?= BASE_URL; ?>/tkp">Teknik Kontruksi dan Perumahan</a>
                            </li>
                            <li><a class="dropdown-item" href="<?= BASE_URL; ?>/tp">Teknik Pengelasan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="<?= BASE_URL; ?>/user/profile">About Me</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div style="background-color: #272829;">
        .
    </div>