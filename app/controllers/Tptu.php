<?php

class Tptu extends Controller
{
    public function index()
    {
        $data['judul'] = "Teknik Pemanasan, Tata Udara dan
        Pendinginan ";
        // $data['name'] = $this->model('User_model')->getUser();

        $this->view('templates/header', $data);
        $this->view('Kompetensi/tptu', $data);
        $this->view('templates/footer');
    }
}