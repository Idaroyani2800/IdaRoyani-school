<?php
class TPTU extends Controller{
    public function index() {
        $data['judul'] = "TPTU";
        $this->view('templates/header',$data);
        $this->view('tptu/index');
        $this->view('templates/footer');
    }
}