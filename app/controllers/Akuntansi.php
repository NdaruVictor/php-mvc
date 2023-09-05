<?php

class Akuntansi extends Controller
{
    public function index()
    {
        $data['judul'] = "Akuntansi";
        // $data['name'] = $this->model('User_model')->getUser();

        $this->view('templates/header', $data);
        $this->view('Kompetensi/akuntansi', $data);
        $this->view('templates/footer');
    }
}