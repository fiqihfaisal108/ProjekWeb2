<html lang="en">

<?php $this->load->view('include/head'); ?>
<body>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row px-3 justify-content-center mt-5 mb-5 border-line"> <img src="https://i.imgur.com/uNGdWHi.png" class="image"> </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        <div class="row mb-4 px-3">
                            <h6 class="mb-0 mr-4 mt-2">Login Dengan</h6>
                            <div class="facebook text-center mr-3">
                            <div class="fa fa-facebook"></div>
                                
                            </div>
                            <div class="twitter text-center mr-3">
                                <div class="fa fa-twitter"></div>
                            </div>
                            <div class="linkedin text-center mr-3">
                                <div class="fa fa-linkedin"></div>
                            </div>
                        </div>
                        <div class="row px-3 mb-4">
                            <div class="line"></div> <small class="or text-center">Atau</small>
                            <div class="line"></div>
                        </div>

                        <form class="user" method="POST" action="<?=base_url()?>index.php/login/aksi_login">

                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                            id="exampleInputEmail" aria-describedby="emailHelp"
                            placeholder="Masukan Username Anda" name="username">
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user"
                            id="exampleInputPassword" placeholder="Masukan Password Anda" name="password">
                        </div>
                                        
                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">Ingat Saya</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
            
                        </form>

                        <div class="row mb-4 px-3"> <small class="font-weight-bold ml-4 mr-5">Tidak Memiliki Akun ? <a class="text-danger" href="<?=base_url()?>index.php/login/register">Register</a></small>
                        <small class="font-weight-bold"> Masuk Sebagai <a class="text-danger" href="<?php echo base_url()?>index.php/admin/login">Admin</a></small> </div>
                    </div>
                </div>
            </div>
            <div class="bg-primary text-light py-4">
                <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Develop By Mahasiswa STT-NF &copy; 2021</small>
                    <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
                </div>
            </div>
        </div>  
    </div>  
</body>
</html>
