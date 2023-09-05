<?php

class Tkp extends Controller
{
    public function index()
    {
        $data['judul'] = "Teknik Kontruksi dan Perumahan";
        // $data['name'] = $this->model('User_model')->getUser();

        $this->view('templates/header', $data);
        $this->view('Kompetensi/tkp', $data);
        $this->view('templates/footer');
    }
}