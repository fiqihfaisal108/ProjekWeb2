<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('include/head'); ?>

    <body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

  <?php $this->load->view('include/sidebar');?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            
          <?php $this->load->view('include/navbar');?>

            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                
                <div class="container-fluid">
                    
                    <div class="d-flex justify-content-end mt-4">
                    <nav style="--bs-breadcrumb-divider: '▸';" aria-label="breadcrumb">
					    <ol class="breadcrumb">
					        <li class="breadcrumb-item">
					            <a href="<?php echo base_url('/index.php/mitra/index') ?>">Data Mitra</a>
					        </li>
					        <li class="breadcrumb-item active">
					           Edit Mitra
					        </li>
					    </ol>
					</nav>
                </div>
                <?php echo form_open_multipart('mitra/update'); ?>

                <input type="hidden" name="id" class="form-control" value="<?= $mitra->id?>">

                <div class="form-group row mb-3 mt-2">
												<label for="inputEmail3" class="col-sm-2 col-form-label">Nama Perusahaan :</label>
												<div class="col-sm-10">
												  <input type="text" class="form-control" id="inputEmail3" placeholder="Masukan Nama Perusahaan" name="nama_mitra" value="<?= $mitra->nama_mitra?>" >
												</div>
											  </div>
											  <div class="form-group row mb-3">
												  <label for="" class="col-sm-2 col-form-label">Bidang Usaha :</label>
												  <div class="col-sm-10">
													<select class="form-control"   name="bidang_usaha_id" value="<?= $mitra->bidang_usaha_id?>">
														<option  value="" selected>Pilih</option>
														<option  value="1">Teknologi Informasi</option>
														<option  value="2">Perbankan</option>
														<option  value="3">Pendidikan</option>
														<option  value="4">Transportasi</option>
														<option  value="5">Industri</option>
													  </select>
												  </div>
                                              </div>
                                              <div class="form-group">
                                                <label for="example-text-input" style="padding-right: 85px;">Sektor Usaha:</label>
                                                <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="sektor_usaha_id" value="1" value="<?= $mitra->sektor_usaha_id?>">
                                                <label class="form-check-label" for="inlineCheckbox1">Pemerintah</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="sektor_usaha_id" value="2" value="<?= $mitra->sektor_usaha_id?>">
                                        <label class="form-check-label" for="inlineCheckbox2">BUMN</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="sektor_usaha_id" value="3" value="<?= $mitra->sektor_usaha_id?>">
                                        <label class="form-check-label" for="inlineCheckbox1">Swasta</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="sektor_usaha_id" value="4" value="<?= $mitra->sektor_usaha_id?>">
                                        <label class="form-check-label" for="inlineCheckbox2">Startup</label>
                                    </div>
                                
                            </div>

											  <div class="form-group row mb-3">
												<label for="inputEmail3" class="col-sm-2 col-form-label">Alamat Perusahaan :</label>
												<div class="col-sm-10">
													<textarea name="alamat" value="<?= $mitra->alamat?>" cols="163px" rows="5" class="form-control"  id="exampleInputEmail1" placeholder="Masukan Alamat Kantor"></textarea>
												</div>
											  </div>
											  <div class="form-group row mb-3">
												<label for="inputEmail3" class="col-sm-2 col-form-label">Kontak Person :</label>
												<div class="col-sm-10">
												  <input type="text" class="form-control" id="inputEmail3"  placeholder="Masukan Kontak Person" name="kontak" value="<?= $mitra->kontak?>">
												</div>
											  </div>
											  
											<div class="form-group row mb-3">
											  <label for="inputEmail3" class="col-sm-2 col-form-label">Email :</label>
											  <div class="col-sm-10">
												<input type="email" class="form-control" id="inputEmail3"  placeholder="user@gmail.com" name="email"value="<?= $mitra->email?>">
											  </div>
											</div>
											<div class="form-group row mb-3">
												<label for="inputEmail3" class="col-sm-2 col-form-label">Alamat Web :</label>
												<div class="col-sm-10">
												  <input name="web" value="<?= $mitra->web?>" type="text" class="form-control" id="inputEmail3"  placeholder="http://">
												</div>
											  </div>
                        <div class="text-right">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success mr-sm-2" data-toggle="modal" data-target="#exampleModalCenter" style="font-size: 14px; height: 36px;">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            Submit
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Siloker NF</h5>
                                    <i class="fa fa-info-circle fa-fw fa-lg " aria-hidden="true" style="padding-top: 9px; padding-left: 5px;"></i>
                                    <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <p style="font-size: 14px;">Apakah anda yakin ingin menyimpan data formulir?</p> 
                                </div>
                                <div class="modal-footer">
                                <button type="submit" class="btn btn-danger " data-dismiss="modal"><i class="fa fa-undo" aria-hidden="true" style="padding-right: 5px;" ></i>Kembali</button>
                                <button type="submit" onclick="return login()" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true" style="padding-right: 5px;"></i>Simpan</button>
                                </div>
                            </div>
                            </div>
                            </div>
                            <button type="reset" class="btn btn-danger" style="width: 80px; font-size: 14px;"><i class="fa fa-times" aria-hidden="true"></i>
                                Reset
                            </button>
                            
  
                            </div >

                <?php echo form_close(); ?>
                     

                     </div>
                     <!-- /.container-fluid -->
     
                 </div>
                 <!-- End of Main Content -->
     
                 <!-- Footer -->
                 <div class="container-fluid mt-5 " >
        <div class="row">
            <div class="col-md-12 p-1">
                <h5 class="text-center" style="font-size: 11px; padding-top: 6px;">
                    Develop By Mahasiswa STT-NF @2021
                </h5>
            </div>
        </div>
    </div>
                 <!-- End of Footer -->
     
             </div>
             <!-- End of Content Wrapper -->
     
         </div>
         <!-- End of Page Wrapper -->
     
         <!-- Scroll to Top Button-->
         <a class="scroll-to-top rounded" href="#page-top">
             <i class="fas fa-angle-up"></i>
         </a>
     
         <!-- Logout Modal-->
         <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                         <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">×</span>
                         </button>
                     </div>
                     <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                     <div class="modal-footer">
                         <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                         <a class="btn btn-primary" href="<?php echo base_url()?>index.php/login/logout">Logout</a>
                     </div>
                 </div>
             </div>
         </div>
     
         <!-- Bootstrap core JavaScript-->
         <?php $this->load->view('include/script'); ?>
     
     </body>
     
     </html>



</html>