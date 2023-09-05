<?php
class TKP extends Controller{
    public function index() {
        $data['judul'] = "TKP";
        $this->view('templates/header',$data);
        $this->view('tkp/index');
        $this->view('templates/footer');
    }
}