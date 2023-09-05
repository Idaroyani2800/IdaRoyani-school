<div class="container mt-5">
        <div class="card" style="width: 18 rem;">
        <div class="card-body">
        <h5 class="card-title"><?= $data['guru']['nama']; ?></h5>
        <h6 class=" card-subtitle mb-2 text-muted"><?= $data['guru']['kode_guru']; ?></h6>
        <p class="card-text"><?= $data['siswa']['guru_mapel']; ?></p>
        <a href=" <?= BASE_URL; ?>/guru" class="card-link">Kembali</a>
   </div>
  </div>
 </div>
</div>
