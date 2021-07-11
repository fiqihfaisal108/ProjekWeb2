<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra extends CI_Controller {

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
		$this->load->model('mitra_model');
		$data['mitra'] = $this->mitra_model->getAllData();
		$this->load->view('mitra/index',$data);
	}

	public function delete($id){
		//delete * from pasien where id = id
		$this->load->model('mitra_model');//load model
		$where = array('id' => $id);
		$this->mitra_model->delete(array('id'=>$id),'mitra');// query delete(delete from pasien where id = $id)
		redirect('mitra/index');


	}

	public function save(){
		
		$this->load->view('mitra/tambah_mitra');
	}
	
	public function tambah(){
		
		//panggil model
		$this->load->model('mitra_model');
		
		//tambah data
		$data['nama_mitra'] = $this->input->post('nama_mitra');
		$data['alamat'] = $this->input->post('alamat');
		$data['kontak'] = $this->input->post('kontak');
		
        $data['email'] = $this->input->post('email');
        $data['web'] = $this->input->post('web');
        $data['bidang_usaha_id'] = $this->input->post('bidang_usaha_id');
		$data['sektor_usaha_id'] = $this->input->post('sektor_usaha_id');
		// $data['foto'] = $this->pasien_model->upload_foto();

		//method save data
		$this->mitra_model->save($data);

		//redirect	
		return redirect('mitra/index');


	}
	public function profile($id){
		$this->load->model('mitra_model');
		$data['mitra'] = $this->mitra_model->findById($id);
		$this->load->view('mitra/profile',$data);
	}

	public function edit($id){
		$this->load->model('mitra_model');
		$data['mitra'] = $this->mitra_model->findById($id);
		$this->load->view('mitra/edit',$data);
	}

	public function update(){
		//panggil model
		$this->load->model('mitra_model');
		

		//inputan id
		$id = $this->input->post('id');
		
		//tambah data
		$data['nama_mitra'] = $this->input->post('nama_mitra');
		$data['alamat'] = $this->input->post('alamat');
		$data['kontak'] = $this->input->post('kontak');
		
        $data['email'] = $this->input->post('email');
        $data['web'] = $this->input->post('web');
        $data['bidang_usaha_id'] = $this->input->post('bidang_usaha_id');
		$data['sektor_usaha_id'] = $this->input->post('sektor_usaha_id');
		//method update data
		$this->mitra_model->update($data,$id);

		//redirect	
		return redirect('mitra/index');


	}

	public function tambah_user(){
		
		//panggil model
		$this->load->model('mitra_model');
		
		//tambah data
		$data['nama_mitra'] = $this->input->post('nama_mitra');
		$data['alamat'] = $this->input->post('alamat');
		$data['kontak'] = $this->input->post('kontak');
		
        $data['email'] = $this->input->post('email');
        $data['web'] = $this->input->post('web');
        $data['bidang_usaha_id'] = $this->input->post('bidang_usaha_id');
		$data['sektor_usaha_id'] = $this->input->post('sektor_usaha_id');
		// $data['foto'] = $this->pasien_model->upload_foto();

		//method save data
		$this->mitra_model->save($data);

		//redirect	
		return redirect('welcome/form_mitra');


	}
	

}
