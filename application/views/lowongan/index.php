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
                <div class="container-fluid">
					
                    
                    <div class="d-flex justify-content-end mt-2">
                        <nav style="--bs-breadcrumb-divider: '▸';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              
                              <li class="breadcrumb-item"><a href="#">Admin</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Data Lowongan</li>
                            </ol>
                          </nav>
                    </div>
                </div>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <a href="<?php echo base_url()?>index.php/lowongan/save" class="btn bg-gradient-dark text-light"><i class="far fa-plus-square"></i> Tambah</a>
                    

                    <table class="table table-striped mt-2">
                        <thead class="bg-gradient-dark text-light" style="text-align: center;">
                            <tr>
                                <th>Id</th>
                                <th>Nama Perusahaan</th>
                               
                                <th>Deskripsi</th>
                                <th>Deadline</th>
                               
                                <th>Email</th>
                                
                                <th>Action</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            <?php
                                foreach($lowongan->result() as $lowongan){
                                     echo'    
                                    <tr style="text-align: center;">
                                        <td>'.$lowongan->id.'</td>
                                        <td>'.$lowongan->nama_perusahaan.'</td>
                                       
                                        <td>'.$lowongan->deskripsi_pekerjaan.'</td>
                                        <td>'.$lowongan->tanggal_akhir.'</td>
                                        
                                        
                                        <td>'.$lowongan->email.'</td>
                                
                                        <td>
                                        <a class="btn btn-sm" href="'.base_url().'index.php/lowongan/profile/'.$lowongan->id.'"><i class="fas fa-eye"></i> Cek</a>
                                        <a class="btn btn-sm" href="'.base_url().'index.php/lowongan/edit/'.$lowongan->id.'"><i class="fas fa-pencil-alt"></i> Edit</a>
                                        <a class="btn btn-sm" href="'.base_url().'index.php/lowongan/delete/'.$lowongan->id.'"><i class="fas fa-trash"></i> Delete</a></td>
                                    </tr>       
                                     ';   
                                }

                            ?>
                        </tbody>
                    </table>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <div class="container-fluid " >
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view('include/script'); ?>

</body>

</html>