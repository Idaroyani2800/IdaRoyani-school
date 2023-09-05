<?php
class Jurusan extends Controller{

    public function index(){
        $data['judul'] = "Data Jurusan";      
        $data['jurusan'] = $this->model("Jurusan_model")->getAllJurusan();
        $this->view('templates/header',$data);
        $this->view('jurusan/index',$data);
        $this->view('templates/footer');
    }
}