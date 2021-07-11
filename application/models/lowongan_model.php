<?php

class Lowongan_model extends CI_Model{

    public $id;
    public $nama_perusahaan;
    public $bidang_usaha;
    public $deskripsi_pekerjaan;
    public $keahlian_id;
    public $tanggal_akhir;
    public $mitra_id;
    public $email;

    public function getAllData(){

        //select * from pasien
        // $this->db->get('nama_tabel');
       $query = $this->db->get('lowongan');
       return $query;
    }

    public function findById($id){
        //select * from pasien where id = id;
        //$this->db->get_where('nama_tabel',array(id));
       $query = $this->db->get_where('lowongan',['id'=>$id]);
       return $query->row();
    }
 
    public function update($data,$id){
       
        //$this->db->update('nama_tabel',data,array_id)

        $this->db->update('lowongan',$data,array('id'=>$id));
    }

    public function delete($where,$table){
        // delete * from pasien where id = 1
        $this->db->where($where);
        $this->db->delete($table);
    }
    
    public function save($data){

        //this->db->insert('nama_tabel',data)

        return $this->db->insert('lowongan',$data);
    }


    // public function upload_foto(){
    //     //fungsi buat upload foto
	// 	$config['upload_path']         = 'backend/img';  // folder upload tujuan 
	// 	$config['allowed_types']        = 'gif|jpg|png|jpeg'; // jenis file
	// 	$config['max_size']             = 10000; //maksimal ukuran file
	// 	$config['max_width']            = 1024; //maksimal lebar gambar
	// 	$config['max_height']           = 768;// maksimal tinggi gambar

    //     $this->load->library('upload', $config);

    //     if ($this->upload->do_upload('foto')) { //parameter foto diambil dari nama column database
    //         return $this->upload->data("file_name");
    //     }
        
    //     return "backend/img/default.png";
    // }

    // public function lowonganData(){
    //     // menampilkan data wisata   
    
    //         $this->db->select('*');
    //         $this->db->from('lowongan');	
    //         $query = $this->db->get();
    //         return $query;
    //     }
    
    //     public function mitra(){
    
    //         //menampilkan data  kuliner
    //         //select * from jenis_kuliner
    //         $this->db->select('*');
    //         $this->db->from('mitra');
    //              $query = $this->db->get();
    //         return $query;
    //      }

    //      public function joinlowonganmitra(){
    //         //menampilkan join data wisata dan kuliner
    //        //select * from wisata join jenis_kuliner where wisata.jenis_kuliner_id = jenis_kuliner.id;
    //        $this->db->select('*');
    //        $this->db->from('wisata');
    //        $this->db->join('mitra','lowongan.id = mitra.mitra_id');		
    //        $query = $this->db->get();
    //        return $query;
    //     }

}

?>