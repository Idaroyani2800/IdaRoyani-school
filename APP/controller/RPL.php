<?php
class RPL extends Controller{
    public function index() {
        $data['judul'] = "RPL";
        $this->view('templates/header',$data);
        $this->view('rpl/index');
        $this->view('templates/footer');
    }
}