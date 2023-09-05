<?php
class Akl extends Controller{
    public function index() {
        $data['judul'] = "Akuntasi";
        $this->view('templates/header',$data);
        $this->view('akl/index');
        $this->view('templates/footer');
    }
}