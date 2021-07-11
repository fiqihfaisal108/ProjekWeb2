<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	 public function index()
	{
		$this->load->view('front/home');
	}
	public function form()
	{
		$this->load->view('front/isi_loker');
	}

	public function form_mitra()
	{
		$this->load->view('front/daftar_mitra');
	}

	public function daftar_mitra()
	{
		$this->load->view('front/list_mitra');
	}

	public function berita()
	{
		$this->load->view('front/list_berita');

	}

	public function detail()
	{
		$this->load->view('front/detail_berita');

	}

	public function detail2()
	{
		$this->load->view('front/detail_berita2');

	}

	public function detail3()
	{
		$this->load->view('front/detail_berita3');

	}

	public function detail4()
	{
		$this->load->view('front/detail_berita4');

	}

	public function detail5()
	{
		$this->load->view('front/detail_berita5');

	}

	public function lobar()
	{
		$this->load->view('front/lowongan_baru');
	}

	public function kategori()
	{
		$this->load->view('front/kategori');
	}

	public function detlow()
	{
		$this->load->view('front/detail_lowongan1');
	}

	public function detlow2()
	{
		$this->load->view('front/detail_lowongan2');
	}




}
