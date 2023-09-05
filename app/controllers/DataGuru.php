<?php

class DataGuru extends Controller
{
    public function index()
    {
        $data['judul'] = "Data Guru";
        $data['guru'] = $this->model('Guru_model')->getAllGuru();

        $this->view('templates/header', $data);
        $this->view('DataGuru/index', $data);
        $this->view('templates/footer');
    }

    public function show($id)
    {
        $data['judul'] = "Data Guru";
        $data['Guru'] = $this->model('Guru_model')->getGuruById($id);

        $this->view('templates/header', $data);
        $this->view('DataGuru/show', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Guru_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/dataguru');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/dataguru');
            exit;
        }
    }

    public function getedit()
    {
        echo json_encode($this->model('Guru_model')->getGuruById($_POST['id']));
    }
    public function edit()
    {
        if ($this->model('Guru_model')->editDataGuru($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASE_URL . '/dataguru');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASE_URL . '/dataguru');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Guru_model')->delete($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/dataguru');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/dataguru');
            exit;
        }
    }
}