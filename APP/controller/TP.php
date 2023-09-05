<?php
class TP extends Controller{
    public function index() {
        $data['judul'] = "TP";
        $this->view('templates/header',$data);
        $this->view('tp/index');
        $this->view('templates/footer');
    }
}