<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'];?></title>
</head>
<body>
   <div class="container text-center mt-4">
    <h1>About Me</h1>
    <img src="<?= BASE_URL; ?>/img/Profil.jpg" alt="Foto Ida Royani" width="200" class="rounded-circle shadow">
    <p>Halo,nama saya <?= $data['nama']; ?>, saya seorang <?= $data["pekerjaan"]; ?></br>
    Saya sekolah di SMKN 2 Trenggalek jurusan RPL</br>
    Saya tinggal di Desa Parakan Trenggalek Jatim</p>
    </div>
</body>
</html>