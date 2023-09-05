<body>
     <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <h3> Data Jurusan</h3>
                <?php foreach ($data['jurusan'] as $jurusan): ?>
                    <ul>
                        <li><?= $jurusan['nama']; ?></li>
                        <li><?= $jurusan['jumlah_siswa']; ?></li>
                       
                    </ul>
                <?php endforeach; ?>
         </div>
        </div>
   </div>
</body>