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
  <div class="row">
    <div class="card border-warning border-1 mb-3 mt-4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="d-flex justify-content-end mt-4">
            <ul class="nav mr-sm-3" style="font-size: 14px;">
              <li class="nav-item navbar-nav mr-auto ">  
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url()?>index.php/welcome/index" style="color:#052473;">Home </a>
              </li>
              <i class="fa fa-angle-right" aria-hidden="true" style="padding-top: 12px;"></i>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()?>index.php/welcome/berita" style="color:#052473;">Berita</a>
            </li>
            <i class="fa fa-angle-right" aria-hidden="true" style="padding-top: 12px;"></i>
              <li class="nav-item">
                  <a class="nav-link disabled" style="color: grey">Detail Berita</a>
              </li>
          </ul>
          </div>
        </div>
      </div>
      </div>
      <br>

  <!-- isi konten berita 2 -->

<div class="row">
      <div class="col-md-12">
        <div class="container">
        <div class="text-center">
          <img src="<?php echo base_url()?>/img/berita2.png" class="card-img-top" alt="ini gambar berita">
        </div>
        <br><br>
      </div>
      <br>
      <div class="ml-3">
          <h3 style="color: #f38605;">
            Tips Bikin UI/UX Ramah Pengguna dari Engineer Tokopedia
          </h3><br>
            <p style="color: #002147;">
            <p class="card-text"><small class="text-muted">Jihaan Khoirunnisaa - detikInet</small>
            <p>
                Jakarta - UI dan UX merupakan bagian yang tak terpisahkan. Keduanya memiliki peranan vital terhadap pengalaman pengguna saat mengoperasikan produk-produk digital. Bahkan, kepuasan pengguna terhadap aplikasi sangat berkaitan dengan kualitas pengalaman dan tampilan antarmukanya. Sayangnya, untuk membuat interface yang ramah pengguna tidak semudah yang dibayangkan. Lead of Product Design Lead Tokopedia, Dicki Dahrurozak mengatakan desain produk yang baik tidak hanya sederhana, melainkan bisa memecahkan masalah yang dimiliki user atau pengguna secara optimal.
            </p>
            <br>
            <p>
                "Ini biasanya break it or make it sebuah produk bisa bagus di dunia nyata atau tidak. Karena inti dari produk yang bagus, desain yang bagus itu, pertama bagaimana desain ini bisa menyelesaikan masalah yang dimiliki user. Semua orang bisa ngedesain tapi apakah produk yang dia bikin ini sesuai apa yang diminati oleh user atau tidak," ujar Dicki dalam siaran Topcast Tokopedia bertajuk 'Rahasia UI/UX Ramah Pengguna' beberapa waktu lalu.
            </p> 
            <br>

            <p>
                Selanjutnya adalah bagaimana pendekatan yang dipilih dalam menciptakan produk sesuai, baik itu pendekatan bisnis maupun pendekatan pengguna. Bila memakai pendekatan pengguna atau user approach maka poin ini masih berkaitan dengan poin pertama, yaitu proses desain UI/UX berfokus untuk menyelesaikan masalah sehari-hari user. "Di Tokopedia focus on consumer. Gimana produk yang kita bikin fokusnya bakal tertuju ke konsumen. Di mana apa yang kita desain, ujung-ujungnya Toppers senang dan menyelesaikan masalah di kehidupan mereka," tuturnya.
            </p>
            <br>

            <p>
                Selain UI/UX designer, rupanya kesuksesan sebuah aplikasi di pasaran tidak terlepas dari peranan UI/UX researcher. Pasalnya, menurut Lead of Product and UX Research Tokopedia, Satkar Ulama proses riset hadir di sepanjang proses pembuatan produk, bahkan ada saat produk masih berbentuk ide melalui riset pasar. "Kemudian kita mendapatkan insight-nya. Lalu produk mulai dibangun. Kemudian kita melanjutkan dengan user research untuk memahami lebih dalam mengenai journey seseorang menggunakan suatu produk atau fitur. Di situ prototype-nya kita tes dulu. Atau produknya kita evaluasi juga," terang Satkar.
            </p>
            <br>

            <p>
                Tidak berhenti sampai di situ, Satkar menyebut proses riset terus berlanjut sampai dengan produk diluncurkan. Hal ini bertujuan untuk mencari insight-insight baru agar bisa semakin meningkatkan pengalaman user saat berjelajah di aplikasi tersebut. Dia pun memberikan gambaran riset yang dilakukannya untuk mendukung program Mitra Tokopedia. "Misalnya saat riset Mitra Tokopedia. Kita mulai dulu dengan market research. Kita keliling ke warung-warung di berbagai daerah untuk memahami perilaku warung owner itu seperti apa. Sampai akhirnya kita testing aplikasinya, dan seterusnya," paparnya.
            </p>
            <br>

            <p>
                Oleh karena itu, Satkar menilai seorang UI/UX research perlu memiliki visi yang akan diturunkan lewat inisiatif riset yang dibangun. Visi tersebut sebaiknya juga sejalan dengan kebutuhan organisasi. "Kalau terkait inspirasi riset datang dari mana. Kita bisa pakai 2 pendekatan, yaitu driven by tim kita sendiri. Kita akan bercermin pada ground strategy Tokopedia. Yang kita pakai biasanya (ide) dari tim-tim, misalnya tim produk. Kemudian kita akan lihat tren di masyarakat," katanya.Sementara itu, kondisi pandemi dinilai membawa sederet perubahan. Kondisi ini menuntut para praktisi UI/UX untuk memutar otak supaya platform yang ditampilkan bisa sesuai dengan kebutuhan pengguna selama pandemi COVID-19.
            </p>
            <br>

            <p>
                Dicki menyebut pandemi membuat dirinya harus mencari cara approaching ke desain produk yang tepat dan sesuai dengan perubahan perilaku user. Misalnya dengan membuat penyesuaian pada tampilan aplikasi untuk mempermudah berbelanja kebutuhan makanan, mengingat selama pandemi terdapat tren perubahan pembelian produk makanan dari offline ke online. "Makanya kita coba mikir gimana kita desain experience yang unik, yang bagus untuk orang belanja hal-hal tersebut di Tokopedia. Terus juga masalah terkait ongkir, jarak. Makanya kita bikin inisiatif fitur ongkir di Tokopedia bisa lebih intuitif dan ngasih stimulus untuk orang belanja di Tokopedia tanpa harus mengeluarkan banyak uang. Makanya kita bikin fitur bebas ongkir," pungkasnya. Hal senada juga disampaikan oleh Satkar. Dia mengatakan selama pandemi Corona dirinya bersama tim terus mengamati perubahan perilaku user, khususnya terkait food behavior. Tujuannya untuk menghindari bias saat meneruskan hasil riset kepada tim terkait.
            </p>
            <br>

            <p>
                "Sebisa mungkin kita mencari tahu lebih dalam apakah ada perubahan perilaku user selama pandemi. Karena ketika bertujuan untuk memberikan insight itu kepada tim terkait, kita sebisa mungkin menghindari bias dengan bilang ini konteksnya sebelum pandemi, ini setelah pandemi. Mana yang lebih relevan," katanya. Di samping itu, Satkar mengaku terdapat perubahan dari segi model bekerja di masa pandemi. Jika sebelumnya riset dilakukan secara langsung melalui face-to-face interview dan focus group discussion, maka sekarang proses tersebut sepenuhnya dialihkan ke online. Tentunya tanpa mengurangi kualitas hasil riset. "Sekarang kita melakukannya secara online. Nggak pernah ketemu user tatap muka untuk menjaga keamanan. Sebelumnya kita juga rutin mengunjungi buyer, seller, toko cabang, warung Mitra Tokopedia, sekarang kita melakukan jarak jauh, via WhatsApp, Zoom. Kita lebih banyak memanfaatkan teknologi dan tools-tools yang kita punya untuk menjalankan proses pencarian data itu," tandasnya.
            </p>
            <br><br>

            <p>
                Sumber : https://inet.detik.com
            </p>
      </div>
    </div>
    </div>
     </div>
     </div>
    <br>
</div>
</div>
</div>
</div>
</div>

<!--konten selesai-->

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