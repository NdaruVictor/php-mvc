<?php

class Rpl extends Controller
{
    public function index()
    {
        $data['judul'] = "Rekayasa Perangkat Lunak";
        // $data['name'] = $this->model('User_model')->getUser();

        $this->view('templates/header', $data);
        $this->view('Kompetensi/rpl', $data);
        $this->view('templates/footer');
    }
}