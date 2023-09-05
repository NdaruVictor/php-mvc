<?php

class Dpib extends Controller
{
    public function index()
    {
        $data['judul'] = "Design Pemodelan dan Informasi
        Bangunan";
        // $data['name'] = $this->model('User_model')->getUser();

        $this->view('templates/header', $data);
        $this->view('Kompetensi/dpib', $data);
        $this->view('templates/footer');
    }
}