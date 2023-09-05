<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'];?></title>
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <img src="<?= BASE_URL;?>/img/logosmk.png" width="50" height="50" alt="">
            <a class="navbar-brand text-white" href="<?= BASE_URL; ?>">SMKN 2 Trenggalek</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggle-icon"></span>
</button>

<div class="collapse navbar-collapse  nav justify-content-end" id="navbarNavAltMarkup">
    <div class ="navbar-nav">
        <a class="nav-item nav-link active text-white" href="<?=BASE_URL; ?>">Home <span class="sr-only"></span></a>
        <!-- <a class="nav-item nav-link " href="<?=BASE_URL; ?>/blog">Blog</a> -->
        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Kompetensi Keahlian
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="kuliner">Tata Boga</a>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="dpib">Desain Pemodelan dan<br/> Informasi Bangunan</a>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="rpl">Rekayasa Perangkat<br/> Lunak</a>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="tptu">Teknik Pendingin,<br/>dan Tata Udara </a>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="akl">Akuntansi</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="tkp">Konstruksi Gedung Sanitasi <br/>dan Perawatan</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="tp">Teknik Pengelasan</a>
                    </li>
       
        <a class="nav-item nav-link " href="<?=BASE_URL; ?>/guru">Data Guru</a>
        <a class="nav-item nav-link " href="<?=BASE_URL; ?>/siswa">Data Siswa</a>
        <a class="nav-item nav-link " href="<?=BASE_URL; ?>/user/profile">About</a>
        </div>
      </div>
    </div>
</nav>
   
</body>
</html>