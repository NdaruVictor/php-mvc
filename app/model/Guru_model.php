<?php

class Guru_model
{
    private $table = 'data_guru';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllGuru()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
    }

    public function getGuruById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id =:id");
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    
    public function tambahData($data)
    {
        $query = " INSERT INTO data_guru VALUES
        (NULL, :nama, :kode_guru, :mapel ) ";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kode_guru', $data['kode_guru']);
        $this->db->bind('mapel', $data['mapel']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    
    public function editDataGuru($data)
    {
        $query = "UPDATE data_guru SET
        nama = :nama,
        kode_guru = :kode_guru,
        alamat = :alamat WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kode_guru', $data['kode_guru']);
        $this->db->bind('mapel', $data['mapel']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function delete($id)
    {
        $query = "DELETE FROM data_guru WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}