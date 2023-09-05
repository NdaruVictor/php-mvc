<?php

class Tp extends Controller
{
    public function index()
    {
        $data['judul'] = "Teknik Pengelasan";
        // $data['name'] = $this->model('User_model')->getUser();

        $this->view('templates/header', $data);
        $this->view('Kompetensi/tp', $data);
        $this->view('templates/footer');
    }
}