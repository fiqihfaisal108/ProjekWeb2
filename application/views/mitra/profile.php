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
                    
                    <div class="d-flex justify-content-end mt-4">
                    <nav style="--bs-breadcrumb-divider: '▸';" aria-label="breadcrumb">
					    <ol class="breadcrumb">
					        <li class="breadcrumb-item">
					            <a href="<?php echo base_url('/index.php/mitra/index') ?>">Data Mitra</a>
					        </li>
					        <li class="breadcrumb-item active">
					           Profile Mitra
					        </li>
					    </ol>
					</nav>
                </div>
                        <div >
                            
                            <div class="col-13 mt-2">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td style="width: 100px; text-align: center; padding-left: 20px;"><i class="fas fa-id-card-alt"></i></td>
                                            <td class="">ID :</td>
                                            <td class=""><?=$mitra->id?></td>
                                        </tr>
                                        <tr>
                                            <td style=" text-align: center; padding-left: 20px;"><i class="fas fa-building"></i></td>
                                            <td class="">Nama Perusahaan :</td>
                                            <td class=""><?=$mitra->nama_mitra?></td>
                                        </tr>

                                        <tr>
                                            <td style=" text-align: center; padding-left: 20px;"><i class="fas fa-map-marked-alt"></i></td>
                                            <td class="">Alamat :</td>
                                            <td class=""><?=$mitra->alamat?></td>
                                        </tr>

                                        <tr>
                                        <td style=" text-align: center; padding-left: 20px;"><i class="fas fa-mobile-alt"></i></td>

                                            <td class="">Kontak :</td>
                                            <td class=""><?=$mitra->kontak?></td>
                                        </tr>
                                        
                                        <tr >
                                        <td style=" text-align: center; padding-left: 20px;"><i class="fas fa-at"></i></td>

                                            <td class="">Email :</td>
                                            <td class=""><?=$mitra->email?></td>
                                        </tr>

                                        <tr>
                                        <td  style=" text-align: center; padding-left: 20px;"><i class="far fa-window-restore"></i></td>

                                            <td class="">Website :</td>
                                            <td class=""><?=$mitra->web?></td>
                                        </tr>

                                        
                                        

                                    </tbody>
                                </table>
                                <tr>
                                        
                                        <td><p class="card-text text-right"><small class="text-muted">20 Desember 2020</small></p></td>
                                        
                                        </tr>    
                            </div>
                        </div>
                    
                
                    
                    <br>
		            <br>
		           
            		</p>


                    </div>>
            <!-- End of Main Content -->

            <!-- Footer -->
            <div class="container-fluid mt-4" >
        <div class="row row">
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view('include/script'); ?>

</body>

</html>