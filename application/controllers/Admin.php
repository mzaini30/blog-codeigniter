<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Brunei');
		if ($this->session->userdata('status') != 'login'){
			redirect(base_url());
		}
	}

	public function ganti_username_dan_password(){
		$data = $this->db->get('login')->result();
		return view('admin.ganti', array(
			'data' => $data[0]
		));
	}

	public function ganti_do(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->db->update('login', array(
			'username' => $username,
			'password' => $password
		), array(
			'id' => '1'
		));
		redirect(base_url());
	}

	public function hapus_tulisan($slug){
		$this->db->delete('postingan', array(
			'slug' => $slug
		));
		redirect(base_url());
	}

	public function postingan_baru(){
		view('admin.postingan_baru');
	}

	public function postingan_baru_do(){
		$judul = $this->input->post('judul');
		$gambar = $this->input->post('gambar');
		$slug = slug($this->input->post('judul'));
		$isi = $this->input->post('isi');
		$publish = $this->input->post('publish');
		$created_at = date("Y-m-d H:i:s");
		$updated_at = date("Y-m-d H:i:s");
		$this->db->insert('postingan', array(
			'judul' => $judul,
			'gambar' => $gambar,
			'slug' => $slug,
			'isi' => $isi,
			'publish' => $publish,
			'created_at' => $created_at,
			'updated_at' => $updated_at
		));
		redirect(base_url());
	}

	public function edit_tulisan($slug){
		$data = $this->db->get_where('postingan', array(
			'slug' => $slug
		))->result();
		return view('admin.ubah', array(
			'data' => $data[0]
		));
	}

	public function ubah_do($slug){
		$judul = $this->input->post('judul');
		$gambar = $this->input->post('gambar');
		$isi = $this->input->post('isi');
		$publish = $this->input->post('publish');
		$updated_at = date("Y-m-d H:i:s");
		$this->db->update('postingan', array(
			'judul' => $judul,
			'gambar' => $gambar,
			'slug' => $slug,
			'isi' => $isi,
			'publish' => $publish,
			'updated_at' => $updated_at
		), array(
			'slug' => $slug
		));
		redirect(base_url() . 'index.php/blog/detail/' . $slug);
	}

	public function hapus_komentar($id, $slug){
		$this->db->delete('komentar', array(
			'id' => $id
		));
		redirect(base_url() . 'index.php/blog/detail/' . $slug);
	}
}