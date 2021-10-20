<?php
class Berita1_model extends CI_Model {
	public $table = 'berita';
	public $id = 'id_berita';

	function data_berita(){
		return $this ->db->get($this ->table)->result_array();

		//return $this->db->query('SELECT * FROM tb_berita')->result();
	}

	function tambah_berita($data){
		return $this ->db->insert($this ->table, $data);
	}

	function ambil_data_id($id){
		$this ->db->where($this ->id, $id);
		return $this->db->get($this->table)->row();
	}

	function edit_berita($data){
		return $this ->db->update($this ->table, $data, array('id_berita' => $this->input->post('id_berita')));
	}
	
	function delete($id){
		return $this ->db->delete($this ->table, array('id_berita' => $id));
	}
}