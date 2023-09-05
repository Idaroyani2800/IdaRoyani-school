
     <div class="container mt-3">
        <div class="row">
            <div class="col-lg-9">
              <?php Flasher::flash();?>
      </div>
</div>

    <div class="row mb-3">
        <div class="col-lg-9">   
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Tambah Data Guru
          </button>
    </div>
</div>     
          <div class="row mb-3">
              <div class="col-lg-6">
                <form action="<?= BASE_URL; ?>/guru/cari" method="POST">
                <div class="input-group ">
                <input type="text" class="form-control" placeholder="cari data guru.." name="keyword" id="keyword"
                <div class="input-group-append ">
                <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
        </div>
     </div>
  </form>
</div>
            <div class="row ">
              <div class="col-lg-8">

                <h3 class="mt-4"> Data Guru</h3>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no=1;
                    ?>
                    <?php foreach ($data['guru'] as $guru) : ?>
                      <tr>
                        <th scope="row"><?=$no++?></th>
                        <td><?= $guru['nama']; ?></td>
                  
                       
                         <td><a href="<?= BASE_URL; ?>/guru/hapus/<?= $guru['id']; ?>"
                         class="badge badge-danger " onclick="return confirm('yakin?');">hapus</a>

                         <a href="<?= BASE_URL; ?>/guru/ubah/<?= $guru['id']; ?>"
                         class="badge badge-success  tampilModalUbah" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="<?= $guru['id']; ?>">ubah</a>
                         <input type="hidden" name="id" id="id">

                         <a href="<?= BASE_URL; ?>/guru/detail/<?= $guru['id']; ?>"
                         class="badge badge-primary ">detail</a>
                    </li>  
                <?php endforeach; ?>
                </ul>
         </div>
        </div>
   </div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Guru</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?= BASE_URL; ?>/guru/tambah" method="post"> 
        <div class="form-group"> 
          <label for="nama">Nama</label> 
          <input type="text" class="form-control" id="nama" name="nama"> 
        </div> 
        <div class="form-group"> 
          <label for="kode_guru">Kode Guru</label> 
          <input type="text" class="form-control" id="kode_guru" name="kode_guru"> 
        </div> 
        <div class="form-group"> 
          <label for="guru_mapel">Mapel</label> 
          <select class="form-control" id="guru_mapel" name="guru_mapel"> 
            <option value="laki-laki">Pemrogaman Web dan Perangkat Bergerak</option> 
            <option value="perempuan">Pkwu</option> 
            <option value="perempuan">Basi Data</option>  
            <option value="perempuan">Pemrogaman Berotientasi Objek</option>
          </select>
        </div> 
    
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
   

  