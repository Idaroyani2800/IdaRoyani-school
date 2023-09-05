<?php
class Guru extends Controller{

    public function detail($id)
    {
        $data['judul'] = "Detail Siswa";      
        $data['guru'] = $this->model("Guru_model")->getGurubyId($id);
        $this->view('templates/header',$data);
        $this->view('guru/detail',$data);
        $this->view('templates/footer');
    }

    public function index()
    {
        $data['judul'] = "Data Guru";      
        $data['guru'] = $this->model("Guru_model")->getAllGuru();
        $this->view('templates/header',$data);
        $this->view('guru/index',$data);
        $this->view('templates/footer');
    }

    public function tambah(){
        if ($this->model('Guru_model')->tambahDataGuru($_POST) > 0){
            Flasher::setFlash('berhasil', 'ditambahkan','success');
            header('Location: '. BASE_URL . '/guru');
            exit;
        }
        else{
            Flasher::setFlash('gagal', 'ditambahkan','danger');
            header('Location: '. BASE_URL . '/guru');
            exit;
        }
    }

    public function hapus($id){
        if ($this->model('Guru_model')->hapusDataGuru($_POST) > 0){
            Flasher::setFlash('berhasil', 'dihapus','success');
            header('Location: '. BASE_URL . '/guru');
            exit;
        }
        else{
            Flasher::setFlash('gagal', 'dihapus','danger');
            header('Location: '. BASE_URL . '/guru');
            exit;
        }
}

public function getubah() 
{
     echo json_encode($this->model('Guru_model')->getGuruById($_POST['id'])); } 
public function ubah() { 
    if( $this->model('Guru_model')->getubah($_POST) > 0 ) { 
        Flasher::setFlash('berhasil', 'diubah', 'success'); 
        header('Location: ' . BASE_URL . '/guru');
         exit; 
      

    } else { Flasher::setFlash('gagal', 'diubah', 'danger'); 
        header('Location: ' . BASE_URL . '/guru'); 
        exit; 
    } 
}

public function cari()
    {
        $data['judul'] = "Data Guru";      
        $data['siswa'] = $this->model("Guru_model")->cariDataGuru();
        $this->view('templates/header',$data);
        $this->view('siswa/index',$data);
        $this->view('templates/footer');
    }
}
