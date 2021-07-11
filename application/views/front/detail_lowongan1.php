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
</div>
<!--breadcrumb-->
    <div class="container">
    <div class="card border-warning mb-3 mt-4" style="width: 100;">
         <div class="card-body ">
                        <div class="row">
                            <div class="col-md-9" style="color: #002147;">
                            </div>
                            <div class="col-md-3">
                              <ul class="nav mr-sm-3" style="font-size: 14px;">
                                <li class="nav-item navbar-nav mr-auto ">  
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url()?>index.php/welcome/index " style="color:#052473;">Home </a>
                                </li>
                                <i class="fa fa-angle-right" aria-hidden="true" style="padding-top: 12px;"></i>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url()?>index.php/welcome/lobar" style="color:#052473;">Detail</a>
                                </li>
                                <i class="fa fa-angle-right" aria-hidden="true" style="padding-top: 12px;"></i>
                                <li class="nav-item">
                                    <a class="nav-link disabled" style="color: grey">Berita</a>
                                </li>
                            </ul>
                            </div>
                        </div><br><br>
<!--konten-->
<div class="row">
        <div>
        	<div class="col-md-12">
            	<h3 style="color: #f38605;">
                	Lowongan PT. Nurul Fikri
            	</h3><br>
            		<p style="color: black;">PT. Nurul Fikri merupakan salah satu PT yang bergerak di bidang Teknologi dan Informasi.</p>
            		<p style="color: black;">
            			Kualifikasi yang dibutuhkan :
            			<ol>
            				<li>Sarjana Ilmu Komputer</li>
            				<li>Menguasai bahasa pemrograman Java</li>
            				<li>MySQL posterSQL</li>
                    <li>dll</li>
            			</ol>
            		<br>
            		<br>
            		Berminat, Silahkan email kami di hrdnufian@nufi.com
            		</p>
            		<br>
            		<br>
            		<p class="card-text"><small class="text-muted">20 Desember 2020</small>
            		</p>
            		<br>
            		<br>
        	</div>
		    </div>
		  </div>
        </div>
        </div>
		</div><br>
<!--about us-->
<div class="container-fluid mt-2 " style="background-color: #3F539D; color: white; font-size: 12px; padding-bottom: 8px;">
  <hr style="border-width: 3px; border-color: #ED840E;">
  <div class="row d-flex justify-content-center">
      <div class="col-md-5 ">
          <p class="mt-3" style="font-weight: bold; font-size: 14px;">About US</p>
          <hr style="border-color: #052473; border-width: 3px;">
          <p>
              Siloker NF - Sistem Lowongan Kerja Nurul Fikri </br>
              Kelompok Siloker NF : 
              Rama Bayu, 
              Djaya Pamungkas, 
              Eka Rahmawati </br>
              Faizah Sausan,
              Fiqih Faisal 
          </p>
      </div>
      <div class="col-md-5">
          <p class="mt-3"style="font-weight: bold; font-size: 14px;">Address</p>
          <hr style="border-color: #052473; border-width: 3px;">
          <p>
          <address>
               <strong>Indonesia, Jakarta Selatan</strong><br /> Jalan Lenteng Agung Raya No.20 RT.5/RW.1 Lenteng Agung,<br /> Kelurahan, RT.4/RW.1, Srengseng Sawah, Kec. Jagakarsa,<br /> Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12640
          </address>
        </div>
    </div>
    </div>
    </div>
</div>
</div>
<!-- footer -->
<div class="container-fluid " style="background-color:  #052473; color: white;">
  <div class="row">
      <div class="col-md-12 p-1">
          <h5 class="text-center" style="font-size: 12px; padding-top: 6px;">
              Develop By Mahasiswa STT-NF @2021
          </h5>
      </div>
  </div>
</div>
<!--javascript-->
<script>
    document.getElementById("home").addEventListener("mouseover", mouseOver);
    document.getElementById("home").addEventListener("mouseout", mouseOut);
    
    function mouseOver() {
      document.getElementById("home").style.color = "orange";
    }
    
    function mouseOut() {
      document.getElementById("home").style.color = "navy";
    }
    </script>
<script>
    document.getElementById("lowongan baru").addEventListener("mouseover", mouseOver);
    document.getElementById("lowongan baru").addEventListener("mouseout", mouseOut);
    
    function mouseOver() {
      document.getElementById("lowongan baru").style.color = "orange";
    }
    
    function mouseOut() {
      document.getElementById("lowongan baru").style.color = "navy";
    }
    </script>
<script>
    document.getElementById("isi loker").addEventListener("mouseover", mouseOver);
    document.getElementById("isi loker").addEventListener("mouseout", mouseOut);
    
    function mouseOver() {
      document.getElementById("isi loker").style.color = "orange";
    }
    
    function mouseOut() {
      document.getElementById("isi loker").style.color = "navy";
    }
    </script>
<script>
    document.getElementById("daftar mitra").addEventListener("mouseover", mouseOver);
    document.getElementById("daftar mitra").addEventListener("mouseout", mouseOut);
    
    function mouseOver() {
      document.getElementById("daftar mitra").style.color = "orange";
    }
    
    function mouseOut() {
      document.getElementById("daftar mitra").style.color = "navy";
    }
    </script>
<script>
    document.getElementById("berita").addEventListener("mouseover", mouseOver);
    document.getElementById("berita").addEventListener("mouseout", mouseOut);
    
    function mouseOver() {
      document.getElementById("berita").style.color = "orange";
    }
    
    function mouseOut() {
      document.getElementById("berita").style.color = "navy";
    }
    </script> 
<script>
    document.getElementById("login").addEventListener("mouseover", mouseOver);
    document.getElementById("login").addEventListener("mouseout", mouseOut);
    
    function mouseOver() {
      document.getElementById("login").style.color = "orange";
    }
    
    function mouseOut() {
      document.getElementById("login").style.color = "navy";
    }
    </script>      

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </body>
</html>