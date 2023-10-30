<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= BASEURL ?>/css/styles.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<nav class="navbar navbar-expand-lg bg-body-tertiary ">
    <div class="container">
        <a class="navbar-brand" href="<?= BASEURLJOBS; ?>">
            <div class="" href="">
                <h4 class="lh-1">Magang</h4>
                <h4 class="lh-1">Hunters</h4>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto  mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page"  href="<?= BASEURLJOBS; ?>/#card">Cari Lowongan Kerja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ulasan Perusahaan</a>
                </li>
            </ul>
            <span class="navbar-text">
                <ul class="navbar-nav me-auto  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURLJOBS; ?>/auth/logout" onclick="return confirm('yakin logout?')">logout</a>
                    </li>
                </ul>
            </span>
        </div>
    </div>
</nav>

<body>