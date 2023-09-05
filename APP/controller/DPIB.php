<?php
class DPIB extends Controller{
    public function index() {
        $data['judul'] = "DPIB";
        $this->view('templates/header',$data);
        $this->view('dpib/index');
        $this->view('templates/footer');
    }
}