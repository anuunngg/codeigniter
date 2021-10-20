<?php

class Berita_model extends CI_Model
{

    public $table = 'berita';
    public $id = 'id_berita';

    function data_berita()
    {
        return $this->db->get($this->table)->result();
        //return $this->db->query('SELECT * FROM berita')->result();
    }
}
