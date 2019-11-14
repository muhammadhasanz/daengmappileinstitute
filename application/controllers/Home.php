<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


	public function index()
	{
		$data['contents'] = 'home/index';
		$data['pesan'] = $this->db->get('post_pesan')->result_array();
		$this->load->view('templates/index', $data);
	}
	public function identitas()
	{
		$data['contents'] = 'profile/identitas';
		$data['pesan'] = $this->db->get('buku_tamu')->result_array();
		$this->load->view('templates/index', $data);
	}
	public function visiMisi()
	{
		$data['contents'] = 'profile/visimisi';
		$data['pesan'] = $this->db->get('buku_tamu')->result_array();
		$this->load->view('templates/index', $data);
	}
	public function kegiatan()
	{
		$data['contents'] = 'kegiatan/index';
		$data['pesan'] = $this->db->get('buku_tamu')->result_array();
		$this->load->view('templates/index', $data);
	}
	public function seminar()
	{
		$data['contents'] = 'pembicara/index';
		$data['pesan'] = $this->db->get('buku_tamu')->result_array();
		$this->load->view('templates/index', $data);
	}
	public function workshop()
	{
		$data['contents'] = 'pembicara/workshop';
		$data['pesan'] = $this->db->get('buku_tamu')->result_array();
		$this->load->view('templates/index', $data);
	}
	public function galeri()
	{
		$data['contents'] = 'galeri/index';
		$data['pesan'] = $this->db->get('buku_tamu')->result_array();
		$this->load->view('templates/index', $data);
	}
	public function bukutamu()
	{
		$data['contents'] = 'bukutamu/index';
		$data['pesan'] = $this->db->get('buku_tamu')->result_array();
		$this->load->view('templates/index', $data);
	}
	public function pesantamu()
	{
		$data = [
			'nama_tamu' => $this->input->post('nama'),
			'email_tamu' => $this->input->post('email'),
			'pesan_tamu' => $this->input->post('pesan')
		];
		$this->db->insert('buku_tamu', $data);
		redirect('home/bukutamu');
	}
}
