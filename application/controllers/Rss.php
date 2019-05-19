<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rss extends CI_Controller {
	public function index()
	{
		$this->tampil_rss();
	}

	public function tampil_rss(){
		$waktu = gmdate("Y", time());
		$data = $this->db->get_where('postingan', array(
			'publish' => 'on'
		), 10)->result();
		$header = '<?xml version="1.0" encoding="utf-8"?>';
		header("Content-Type: application/rss+xml");
		return view('rss', array(
			'waktu' => $waktu,
			'data' => $data,
			'header' => $header
		));
	}
}
