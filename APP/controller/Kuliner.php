<?php
class Kuliner extends Controller{
    public function index() {
        $data['judul'] = "Kuliner";
        $this->view('templates/header',$data);
        $this->view('kuliner/index');
        $this->view('templates/footer');
    }
}