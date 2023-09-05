<?php

class Kuliner extends Controller
{
    public function index()
    {
        $data['judul'] = "Kuliner";
        // $data['name'] = $this->model('User_model')->getUser();

        $this->view('templates/header', $data);
        $this->view('Kompetensi/kuliner', $data);
        $this->view('templates/footer');
    }
}