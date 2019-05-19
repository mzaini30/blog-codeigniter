<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	private $acak = null;
	private $minat = null;
	private $data_komentar = null;
	private $status = null;

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Brunei');
		$this->acak = $this->db->order_by('id', 'RANDOM')->limit(5)->get_where('postingan', array(
			'publish' => 'on'
		))->result();
		$this->minat = $this->db->order_by('id', 'RANDOM')->limit(5)->get('cari')->result();
		$this->data_komentar = $this->db->order_by('id', 'DESC')->limit(5)->get('komentar')->result();
		$this->status = $this->session->userdata('status');
	}

	public function index()
	{
		$this->beranda();
	}

	public function beranda(){
		//konfigurasi pagination
        $config['base_url'] = base_url() . 'index.php/blog/beranda';
        if ($this->status == 'login'){
        	$config['total_rows'] = $this->db->count_all('postingan'); //total row
        } else {
        	$config['total_rows'] = $this->db->where('publish', 'on')->from('postingan')->count_all_results();
        }
        $config['per_page'] = 10;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'Pertama';
        $config['last_link']        = 'Terakhir';
        $config['next_link']        = 'Selanjutnya';
        $config['prev_link']        = 'Sebelumnya';
        $config['full_tag_open']    = '<div class="text-center"><ul class="pagination">';
        $config['full_tag_close']   = '</ul></div>';
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li class="active"><a href="#!">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></a></li>';
        $config['next_tag_open']    = '<li>';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></li>';
        $config['prev_tag_open']    = '<li>';
        $config['prev_tagl_close']  = 'Next</li>';
        $config['first_tag_open']   = '<li>';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open']    = '<li>';
        $config['last_tagl_close']  = '</li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        // $data['data'] = $this->mahasiswa_model->get_mahasiswa_list($config["per_page"], $data['page']);         
        if ($this->status == 'login'){
        	$data = $this->db->order_by('updated_at', 'DESC')->get('postingan', $config["per_page"], $data['page'])->result();
        } else {
        	$data = $this->db->order_by('updated_at', 'DESC')->get_where('postingan', array(
        		'publish' => 'on'
        	), $config["per_page"], $data['page'])->result();
        }
 
        // $data['pagination'] = $this->pagination->create_links();
        $halaman = $this->pagination->create_links();
		// $data = $this->db->order_by('id', 'DESC')->get('postingan')->result();
		// return view('blog.halaman_awal', array(
		// 	'data' => $data,
  //           'halaman' => $halaman
		// ));

		// $data = $this->db->order_by('id', 'DESC')->get('postingan')->result();
		return view('blog.beranda', array(
			'data' => $data, 
			'halaman' => $halaman,
			'acak' => $this->acak,
			'status' => $this->status,
			'data_komentar' => $this->data_komentar,
			'minat' => $this->minat
		));
	}

	public function detail($slug){
		$data = $this->db->get_where('postingan', array(
			'slug' => $slug
		))->result();
		$komentar = $this->db->get_where('komentar', array(
			'slug' => $slug
		))->result();
		if(($this->status == 'login' && $data[0]->publish != 'on') || ($data[0]->publish == 'on')){
			return view('blog.detail', array(
				'data' => $data[0],
				'isi' => $this->markdown->parse($data[0]->isi),
				'acak' => $this->acak,
				'status' => $this->status,
				'minat' => $this->minat,
				'data_komentar' => $this->data_komentar,
				'komentar' => $komentar
			));
		} else {
			redirect(base_url());
		}
	}

	public function cari(){
		$cari = $this->input->get('cari');
		$data = $this->db->select('*')->from('postingan')->like('judul', $cari)->or_like('isi', $cari)->get()->result();
		$lihat_cari = $this->db->get_where('cari', array(
			'cari' => $cari
		))->num_rows();
		if ($lihat_cari == 0){
			$this->db->insert('cari', array(
				'cari' => $cari
			));
		}
		return view('blog.cari', array(
			'data' => $data,
			'cari' => $cari, 
			'acak' => $this->acak,
			'status' => $this->status,
			'data_komentar' => $this->data_komentar,
			'minat' => $this->minat
		));
	}

	public function login($pesan = ''){
		return view('blog.login', array(
			'pesan' => $pesan
		));
	}

	public function login_do(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->db->get_where('login', array(
			'username' => $username,
			'password' => $password
		))->num_rows();
		if ($cek > 0){
			$this->session->set_userdata(array(
				'status' => 'login'
			));
			redirect(base_url());
		} else {
			redirect(base_url() . 'index.php/blog/login/error');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function komentar($slug){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$komentar = $this->input->post('komentar');
		$waktu = date("Y-m-d H:i:s");
		$slug_komentar = slug('komentar');
		$this->db->insert('komentar', array(
			'nama' => $nama,
			'email' => $email,
			'komentar' => $this->markdown->parse($komentar),
			'komentar_plain' => $komentar,
			'waktu' => $waktu,
			'slug' => $slug,
			'slug_komentar' => $slug_komentar
		));
		redirect(base_url() . 'index.php/blog/detail/' . $slug . '#' . $slug_komentar);
	}
}
