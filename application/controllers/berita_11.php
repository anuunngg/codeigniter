<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class berita_11 extends CI_Controller {

	public function __construct(){
		parent ::__construct();
		$this->load->model('Berita1_model');
	}
	
	public function index()
	{
		$berita = $this->Berita1_model->data_berita();
		$data = array(
			'isi_berita'=>$berita,
		);

		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('sidebar');
		$this->load->view('index3', $data);
		$this->load->view('footer');
	}

	// public function tambah_berita()
	// {
	// 	$this->load->view('berita_4/tambah_berita');
	// }

	// public function proses_tambah()
	// {
	// 	$judul_berita = $this->input->post('judul_berita');
	// 	$isi_berita = $this->input->post('isi_berita');

	// 	if (($judul_berita !='') and ($isi_berita!='')) {
	// 		$data = [
	// 			'judul_berita'=>$judul_berita,
	// 			'isi_berita'=>$isi_berita,
	// 		];

	// 		$this->Berita1_model->tambah_berita($data);
	// 		redirect('berita_4/tambah_berita');
	// 	}else{
	// 		redirect('berita_4/tambah_berita');
	// 	}
	// }

	// public function edit_berita($id)
	// {
	// 	$row = $this->Berita1_model->ambil_data_id($id);

	// 	if ($row) {
	// 		$data = array(
	// 			'id_berita'=>$row->id_berita,
	// 			'judul_berita'=>$row->judul_berita,
	// 			'isi_berita'=>$row->isi_berita,
	// 		);
	// 	}
	// 	$this->load->view('berita_4/edit_berita', $data);
	// }

	// public function proses_edit()
	// {
	// 	$judul_berita = $this->input->post('judul_berita');
	// 	$isi_berita = $this->input->post('isi_berita');

	// 	if (($judul_berita !='') and ($isi_berita!='')) {
	// 		$data = [
	// 			'judul_berita'=>$judul_berita,
	// 			'isi_berita'=>$isi_berita,
	// 		];

	// 		$this->Berita1_model->edit_berita($data);
	// 		redirect('berita_4');
	// 	}else{
	// 		redirect('berita_4');
	// 	}
	// }

	// public function hapus_berita($id)
	// {
	// 	$this->Berita1_model->ambil_data_id($id);
	// 	$this->Berita1_model->delete($id);

	// 	redirect('berita_4');
	// }
}