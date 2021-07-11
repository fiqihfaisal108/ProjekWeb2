<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lowongan extends CI_Controller {

	//check user sudah login atau belum
	// public function __construct(){
	// 	parent::__construct();
	
	// 	if($this->session->userdata('status') != "login"){
	// 		redirect('login/login');
	// 	}
    // }
    // public function lowonganData(){
    //     //ambil data join
    //     $this->load->model('lowongan_model');
    //     $data['join_lowongan_mitra'] = $this->lowongan_model->joinlowonganmitra(); 
    //     $this->load->view('lowongan/index',$data);
    //  } 
	
	//  public function mitra(){
    //     //ambil data joinya terlebih dahulu 
    //     $this->load->model('lowongan_model');
    //     $data['join_lowongan_mitra'] = $this->lowongan_model->mitra();
    //     $this->load->view('lowongan/mitra',$data);
	//  } 
	 
	 public function index()
	{	
		$this->load->model('lowongan_model');
		$data['lowongan'] = $this->lowongan_model->getAllData();
		$this->load->view('lowongan/index',$data);
	}

	public function delete($id){
		//delete * from pasien where id = id
		$this->load->model('lowongan_model');//load model
		$where = array('id' => $id);
		$this->lowongan_model->delete(array('id'=>$id),'lowongan');// query delete(delete from pasien where id = $id)
		redirect('lowongan/index');


	}

	public function save(){
		
		$this->load->view('lowongan/tambah_lowongan');
	}
	
	public function tambah(){
		
		//panggil model
		$this->load->model('lowongan_model');
		
		//tambah data
		$data['nama_perusahaan'] = $this->input->post('nama_perusahaan');
		$data['bidang_usaha'] = $this->input->post('bidang_usaha');
		$data['deskripsi_pekerjaan'] = $this->input->post('deskripsi_pekerjaan');
		$data['keahlian_id'] = $this->input->post('keahlian_id');
        $data['tanggal_akhir'] = $this->input->post('tanggal_akhir');
        $data['mitra_id'] = $this->input->post('mitra_id');
		$data['email'] = $this->input->post('email');
		// $data['foto'] = $this->pasien_model->upload_foto();

		//method save data
		$this->lowongan_model->save($data);

		//redirect	
		return redirect('lowongan/index');


	}
	public function profile($id){
		$this->load->model('lowongan_model');
		$data['lowongan'] = $this->lowongan_model->findById($id);
		$this->load->view('lowongan/profile',$data);
	}

	public function edit($id){
		$this->load->model('lowongan_model');
		$data['lowongan'] = $this->lowongan_model->findById($id);
		$this->load->view('lowongan/edit',$data);
	}

	public function update(){
		//panggil model
		$this->load->model('lowongan_model');
		

		//inputan id
		$id = $this->input->post('id');
		
		//tambah data
		$data['nama_perusahaan'] = $this->input->post('nama_perusahaan');
		$data['bidang_usaha'] = $this->input->post('bidang_usaha');
		$data['deskripsi_pekerjaan'] = $this->input->post('deskripsi_pekerjaan');
		$data['keahlian_id'] = $this->input->post('keahlian_id');
        $data['tanggal_akhir'] = $this->input->post('tanggal_akhir');
        $data['mitra_id'] = $this->input->post('mitra_id');
		$data['email'] = $this->input->post('email');
		//method update data
		$this->lowongan_model->update($data,$id);

		//redirect	
		return redirect('lowongan/index');


	}
	public function tambah_lowongan(){
		
		//panggil model
		$this->load->model('lowongan_model');
		
		//tambah data
		$data['nama_perusahaan'] = $this->input->post('nama_perusahaan');
		$data['bidang_usaha'] = $this->input->post('bidang_usaha');
		$data['deskripsi_pekerjaan'] = $this->input->post('deskripsi_pekerjaan');
		$data['keahlian_id'] = $this->input->post('keahlian_id');
        $data['tanggal_akhir'] = $this->input->post('tanggal_akhir');
        $data['mitra_id'] = $this->input->post('mitra_id');
		$data['email'] = $this->input->post('email');
		// $data['foto'] = $this->pasien_model->upload_foto();

		//method save data
		$this->lowongan_model->save($data);

		//redirect	
		return redirect('welcome/form');
	}

}
