<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siloker NF - Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
</head>
<body style="font-family: poppins; color: #1B1B1B;">
    <!-- navbar -->
        <div class="container-fluid" style="background-color: #052473; color: white; " >
            <div class="row" >
                <div class="col-md-12 p-2">
                    <h3 class="text-center" style="font-size: 16px; padding-top: 5px;">
                    Sistem Informasi Lowongan Kerja NF
                    </h3>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light mt-1" style="font-size: 14px;" >
            <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url()?>index.php/welcome/index" style="color: #ED840E;"><i class="fa fa-home mr-sm-2" aria-hidden="true"></i>Siloker NF</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url()?>index.php/welcome/lobar" style="color:#052473;">Lowongan Baru</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url()?>index.php/welcome/form" style="color:#052473;">Isi Loker</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url()?>index.php/welcome/daftar_mitra" style="color:#052473;">Daftar Mitra</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>index.php/welcome/berita" style="color:#052473;">Berita</a>
                  </li>
              </ul>
    
              <form class="form-inline my-2 my-lg-0" >
                <input class="form-control mr-sm-2" style="font-size: 15px;" type="search" placeholder="Ketikan sesuatu..." aria-label="Search">
                <button class="btn my-1 my-sm-0" style="font-size: 13px; background-color: #ED840E; color: white;" type="submit"> <i class="fa fa-search mr-sm-2 aria-hidden="true"></i>Search</button>
              </form>
              <li class="nav">
                <a class="nav-link disabled" href="<?php echo base_url()?>index.php/login/login" style="color:#052473;">Login</a>
              </li>
            </div>
            </div>
        </nav>
        <hr class="mt-1">

    <!-- content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav mr-sm-3" style="font-size: 14px;">
                    <li class="nav-item navbar-nav mr-auto ">  
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" style="color:#052473;">Home </a>
                        
                    </li>
                    <i class="fa fa-angle-right" aria-hidden="true" style="padding-top: 12px;"></i>
                    <li class="nav-item">
                        <a class="nav-link disabled" style="color: grey">Isi Loker</a>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-md-12">
                        <fieldset class="border p-4" style="border: solid 1px #DDD !important;
                        padding: 0 10px 10px 10px;
                        border-bottom: none;">
                            <legend  class="w-auto" style="padding-left: 8px; padding-right: 8px;  width: auto !important;
                            border: none; 
                            font-size: 14px; color:#052473;">Isi penawaran lowongan kerja anda</legend>
                         
                        
                        <?php echo form_open_multipart('lowongan/tambah_lowongan') ?>
                        
                            <div class="form-group">
                                <label for="exampleInputtext1">Nama Perusahaan</label>
                                <input type="text" class="form-control" id="" name="nama_perusahaan" maxlength="30">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Bidang Usaha</label>
                                <select name="bidang_usaha" class="form-control">
                                      <option value="" selected>Select one:</option>
                                      <option value="1">Teknologi Informasi</option>
                                      <option value="2">Perbankan</option>
                                      <option value="3">Pendidikan</option>
                                      <option value="4">Transportasi</option>
                                      <option value="5">Industri Nasional</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="example-text-input">Deskripsi Lowongan</label>
                                <textarea name="deskripsi_pekerjaan" id="" class="form-control" ></textarea>
                            </div>
                        
                            <div class="form-group">
                                <label for="example-text-input" style="padding-right: 30px;">Keahlian :</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="keahlian_id" value="1">
                                        <label class="form-check-label" for="inlineCheckbox1">Programmer</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="keahlian_id" value="2">
                                        <label class="form-check-label" for="inlineCheckbox2">Network & Infrastucture</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="keahlian_id" value="3">
                                        <label class="form-check-label" for="inlineCheckbox1">Acounting</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="keahlian_id" value="4">
                                        <label class="form-check-label" for="inlineCheckbox2">Bahasa Inggris</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="keahlian_id" value="5">
                                        <label class="form-check-label" for="inlineCheckbox2">Database</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="keahlian_id" value="6">
                                        <label class="form-check-label" for="inlineCheckbox2">Web Design</label>
                                    </div>
                                
                            </div>

                            <div class="form-group">
                                <label for="exampleInputtext1">Tanggal Dateline</label>
                                <input type="date" name="tanggal_akhir"class="form-control" id="exampleInputtext1" >
                            </div>

                            <div class="form-group">
                                <label for="exampleInputtext1">MitraID</label>
                                <input type="text" name="mitra_id" class="form-control" id="email" >
                            </div>


                            <div class="form-group">
                                <label for="exampleInputtext1">Email</label>
                                <input type="email" name="email" class="form-control" id="email" >
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
                            
  
                            </div>
                        
                        <?php echo form_close(); ?>
                        
                    </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <div class="container-fluid mt-4 " style="background-color: #3F539D; color: white; font-size: 12px; padding-bottom: 13px;">
        <hr style="border-width: 3px; border-color: #ED840E;">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5 ">
                <p class="mt-4" style="font-weight: bold;">About US</p>
                <hr style="border-color: #052473; border-width: 2px;">
                <p>
                    Siloker NF - Sistem Lowongan Kerja Nurul Fikri </br>
                    Kelompok Siloker NF : 
                    Bayu, 
                    Djaya Pamungkas, 
                    Eka </br>
                    Faizah,
                    Fiqih 
                </p>
            </div>
            <div class="col-md-5">
                <p class="mt-4"style="font-weight: bold;">Address</p>
                <hr style="border-color: #052473; border-width: 2px;">
                <p>
                <address>
                     <strong>Indonesia, Jakarta Selatan</strong><br /> Jalan Lenteng Agung Raya No.20 RT.5/RW.1 Lenteng Agung,<br /> Kelurahan, RT.4/RW.1, Srengseng Sawah, Kec. Jagakarsa,<br /> Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12640
                </address>
            </div>
        </div>
    </div>
  
    <!-- footer -->
 
    <div class="container-fluid " style="background-color:  #052473; color: white;">
        <div class="row">
            <div class="col-md-12 p-1">
                <h5 class="text-center" style="font-size: 11px; padding-top: 6px;">
                    Develop By Mahasiswa STT-NF @2021
                </h5>
            </div>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
    <script type="text/javascript">
        function login(){
            nama = document.getElementById("nama").value;
            kontak = document.getElementById("kontak").value;
            email = document.getElementById("email").value;
            if (nama == "" || kontak == ""){
                alert("Formulir harap di cek kembali ada beberapa yang belum terisi !!!");
                return false;
            
            }else{
                window.location="";
            }
        }
    </script>
</html>