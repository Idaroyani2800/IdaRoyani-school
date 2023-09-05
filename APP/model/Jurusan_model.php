<?php
 class Jurusan_model{
    private $jurusan =[
    [
        "nama" => "Rekayasa Perangkat Lunak",
        "jumlah_siswa" => "315",
        
    ],
    [
        "nama" => "Akuntasi dan Keuangan Lembaga",
        "jumlah_siswa" => "315",
    ],
    [
        "nama" => "Desain Pemodelan dan Informasi Bangunan ",
        "jumlah_siswa" => "315",
    ],
    [
        "nama" => "Teknik Pengelasan",
        "jumlah_siswa" => "280",
    ],
    [
        "nama" => "Teknik Pendingin dan Tata Udara",
        "jumlah_siswa" => "300",
    ],
    [
        "nama" => "Tata Boga",
        "jumlah_siswa" => "315",
    ],
    [
        "nama" => "Konstruksi Gedung Sanitasi dan Perawatan",
        "jumlah_siswa" => "112",
    ]
    ];
    public function getAllJurusan() {
        return $this->jurusan;
    }

 }