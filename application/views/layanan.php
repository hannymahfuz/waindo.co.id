<!doctype html>
<html lang="en">
  <head>
    <title>PT Waindo SpecTerra</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">


    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/colorbox.css">

    <!-- Sektor-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/sektor.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <style type="text/css">
   	.navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show > .nav-link {
	    color: rgba(32, 197, 18, 0.9);
	    border-bottom: 5px solid #379e34;
	}

	#myTab.nav-tabs-sticky {
	    position: sticky;
	    z-index: 1010;
	    background-color: #fff;
	    box-shadow: 0 2px 6px rgba(0,0,0,0.08);
	    flex-wrap: nowrap;
	}
	#myTab.nav-tabs-sticky .nav-item {
	    flex: 0 0 auto;
	}
	#myTab.nav-tabs-sticky .nav-link {
	    padding: 0.6rem 0.85rem;
	    white-space: nowrap;
	}

	/* Kartu Komponen Utama Peta Topografi: gambar di tengah, teks tetap di tengah-bawah */
	.komponen-card {
	    height: 100%;
	    min-height: 220px;
	    display: flex;
	    flex-direction: column;
	    padding: 20px 15px;
	}
	.komponen-card-inner {
	    display: flex;
	    flex-direction: column;
	    align-items: center;
	    height: 100%;
	    width: 100%;
	}
	.komponen-card-inner img {
	    margin-top: auto;
	    margin-bottom: auto;
	    max-width: 100%;
	    max-height: 150px;
	    object-fit: contain;
	}
	.komponen-caption {
	    width: 100%;
	}

	.pl-lg-5, .px-lg-5 {
	    padding-left: 4rem !important;
	} 
	.active, .accordion:hover {
	    background-color: #1e4c7c;
	}
	.modal-content {
	    position: relative;
	    background-color: #fefefe;
	    margin: auto;
	    padding: 0;
	    border: 1px solid #888;
	    width: 120%;
	    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
	    -webkit-animation-name: animatetop;
	    -webkit-animation-duration: 0.4s;
	    animation-name: animatetop;
	    animation-duration: 0.4s;
	}
    .modal-backdrop {
        display: none;    
	}
	.modal-header {
		    padding: 2px 16px;
		    /*background-image: url('https://image.freepik.com/free-vector/vintage-ornamental-flowers-background_23-2148335456.jpg');*/
		    background-position: right bottom, left top;
		    background-repeat: no-repeat, repeat;
		    background-color: #8ead8e;
		    color: white;
	}
	.modal-footer {
	    padding: 2px 16px;
	    background-color: #8ead8e;
	    color: white;
	}
	header {
	    position: fixed;
	    top: 0;
	    left: 0;
	    width: 100%;
	    z-index: 997;
	    background: rgba(6,57,110,0.9) !important;
	    transition: all 0.5s;
	    height: 82px;
	}
	a {
	    color: #127a0f;
	    text-decoration: none;
	    background-color: transparent;
	    -webkit-text-decoration-skip: objects;
	}
	.carousel-item {
	  height: 48vh;
	  min-height: 350px;
	  background: no-repeat center center scroll;
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
	}
	
	select.form-control:not([size]):not([multiple]) {
	    height: calc\(2.25rem + 2p;
	    height: 38px;
	}

    </style>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mobile.css">
  </head>
  <body>
	 <header role="banner">
		  <nav class="navbar navbar-expand-lg navbar-light">
		    <div class="container">
		      <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>assets/img/logo1.png" alt="Image" class="logo" style="width: 30vh;"></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		      </button>

		      <div class="collapse navbar-collapse" id="navbarsExample05">
		        <ul class="navbar-nav mr-auto pl-lg-5 pl-0" style="height: 40px;">
	              <li class="">
	                <a class="nav-link " href="<?php echo base_url();?>">Beranda</a>
	              </li>
	              <li class="">
	                <a class="nav-link" href="<?php echo base_url()."about";?>">Tentang Kami</a>
	              </li>
	              <li class="">
	                <a class="nav-link" href="<?php echo base_url()."produk";?>">Produk</a>
	              </li>
	              <li class="active">
	                <a class="nav-link" href="<?php echo base_url()."layanan";?>">Layanan</a>
	              </li>
	              <!-- <li class="nav-item dropdown">
	                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
	                <div class="dropdown-menu" aria-labelledby="dropdown04" style="width: 500;">
	                  <a class="dropdown-item" href="/Aerial">Aerial Survey & LiDAR</a>
	                  <a class="dropdown-item" href="/3D_GIS">3D GIS & Visualization</a>
	                  <a class="dropdown-item" href="/Tematik">Thematic Mapping</a>
	                  <a class="dropdown-item" href="/Mapping">Web Mapping</a>
	                  <a class="dropdown-item" href="/Survey">Land Engineering and Construction Surveying</a>
	                  <a class="dropdown-item" href="/Satelit">Satellite Imagery</a>
	                </div>

	              </li> -->
	              <!-- <li class="nav-item dropdown">
	                <a class="nav-link dropdown-toggle" href="services.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mitra Kerja</a>
	                <div class="dropdown-menu" aria-labelledby="dropdown04" style="width: 500;">
	                  <a class="dropdown-item" href="/LocalGoverment">Pemerintahan</a>
	                  <a class="dropdown-item" href="/StateGoverment">BUMN</a>
	                  <a class="dropdown-item" href="/Plantation">Plantation</a>
	                  <a class="dropdown-item" href="/MiningOilGas">Mining, Oil & Gas</a>
	                  <a class="dropdown-item" href="/Partner">Partner</a>
	                  <a class="dropdown-item" href="/University">Universitas</a>
	                </div>
	              </li> -->
	              <li class="">
	                <a class="nav-link" href="<?php echo base_url()."mitra";?>">Mitra Kerja</a>
	              </li>
	              <li class="">
	                <a class="nav-link" href="<?php echo base_url()."berita";?>">Berita &amp; Informasi</a>
	              </li>
	              
	              <li class="">
	                <a class="nav-link" href="<?php echo base_url()."contact";?>">Hubungi Kami</a>
	              </li>
				  <li class="">
    				<a class="nav-link nav-bar" href="https://forms.gle/oeiJcw76F1M77fJA8" download>Download</a>
				  </li>

              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="assets/img/in.png" class="flag flag-id" alt="Indonesia" style="width: 25px;"><span> Indonesia</span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown04" style="width: 500;">
                  <a class="dropdown-item" href="#"><img src="assets/img/uk.png" class="flag flag-gb" alt="English" style="width:25px;"> English</a>
                </div>
                  </li> -->
                </ul>
	
		      </div>
		    </div>
		  </nav>
	</header>
	<section class="section" style="margin-top: 80px;">
	  <div class="container">
	    <div class="row justify-content-center mb-5 element-animate">
	      <div class="col-md-8 text-center">
	        <h2 class="text-uppercase heading border-bottom mb-4">Layanan</h2>
	      </div>
	    </div>
	    <div class="row mb-5 element-animate">
	      <div class="col-md-12 order-lg-3 mb-5">
	        <ul class="nav nav-tabs nav-tabs-sticky" id="myTab" role="tablist">
	          <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle active" id="home-tab" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Foto Udara dan Lidar</a>
	            <div class="dropdown-menu" aria-labelledby="home-tab">
	              <a class="dropdown-item foto-lidar-link" href="#fl-data-lidar">Data Lidar</a>
	              <a class="dropdown-item foto-lidar-link" href="#fl-wahana">Wahana</a>
	              <a class="dropdown-item foto-lidar-link" href="#fl-alat">Peralatan</a>
	              <a class="dropdown-item foto-lidar-link" href="#fl-software">Software</a>
	              <a class="dropdown-item foto-lidar-link" href="#fl-produk">Produk</a>
	              <a class="dropdown-item foto-lidar-link" href="#fl-analisis">Analisis</a>
	            </div>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#survey" role="tab" aria-controls="profile" aria-selected="false">Survey Lapangan</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tematik" role="tab" aria-controls="profile" aria-selected="false">Peta Tematik</a>
	          </li>
	          <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" id="peta-topografi-tab" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Peta Topografi</a>
	            <div class="dropdown-menu" aria-labelledby="peta-topografi-tab">
	              <a class="dropdown-item peta-topografi-link" href="#pt-definisi">Definisi</a>
	              <a class="dropdown-item peta-topografi-link" href="#pt-komponen">Komponen Utama</a>
	              <a class="dropdown-item peta-topografi-link" href="#pt-pembuatan">Pembuatan Peta Topografi</a>
	            </div>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#training" role="tab" aria-controls="profile" aria-selected="false">Training</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#software" role="tab" aria-controls="profile" aria-selected="false">Software Development</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#konsultasi" role="tab" aria-controls="profile" aria-selected="false">Konsultansi Online</a>
	          </li>

	        </ul>
	        <div class="tab-content" id="myTabContent">
	          <div class="tab-pane fade show active" id="lidar" role="tabpanel" aria-labelledby="home-tab" style="background: #fff;">
	            <div class="list-group-item" style="margin-top: 10px;">
	            <div class="row mb-5">
	            	<div class="col-md-12 order-lg-3 mb-5">
		            	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				          <ol class="carousel-indicators">
				            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
				            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
				            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
				            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
				            <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
				            <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
				            
				          </ol>
				          <div class="carousel-inner" role="listbox">
				            <!-- Slide One - Set the background image for this slide in the line below -->
				            <div class="carousel-item active" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/lidar/16.jpg')">
				              <div class="carousel-caption d-none d-md-block">
				                <!-- <h2 class="display-4">First Slide</h2> -->
				                <!-- <p class="lead">This is a description for the first slide.</p> -->
				              </div>
				            </div>
				            <!-- Slide Two - Set the background image for this slide in the line below -->
				            <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/lidar/17.jpg')">
				              <div class="carousel-caption d-none d-md-block">
				                <!-- <h2 class="display-4">Second Slide</h2>
				                <p class="lead">This is a description for the second slide.</p> -->
				              </div>
				            </div>
				            <!-- Slide Three - Set the background image for this slide in the line below -->
				            <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/lidar/18.jpg')">
				              <div class="carousel-caption d-none d-md-block">
				                <!-- <h2 class="display-4">Third Slide</h2>
				                <p class="lead">This is a description for the third slide.</p> -->
				              </div>
				            </div>
				            <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/lidar/19.jpg')">
				              <div class="carousel-caption d-none d-md-block">
				                <!-- <h2 class="display-4">Third Slide</h2>
				                <p class="lead">This is a description for the third slide.</p> -->
				              </div>
				            </div>
				            <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/lidar/20.jpg')">
				              <div class="carousel-caption d-none d-md-block">
				                <!-- <h2 class="display-4">Third Slide</h2>
				                <p class="lead">This is a description for the third slide.</p> -->
				              </div>
				            </div>
				            <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/lidar/21.jpg')">
				              <div class="carousel-caption d-none d-md-block">
				                <!-- <h2 class="display-4">Third Slide</h2>
				                <p class="lead">This is a description for the third slide.</p> -->
				              </div>
				            </div>
				            <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/lidar/22.jpg')">
				              <div class="carousel-caption d-none d-md-block">
				                <!-- <h2 class="display-4">Third Slide</h2>
				                <p class="lead">This is a description for the third slide.</p> -->
				              </div>
				            </div>
				            <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/lidar/23.jpg')">
				              <div class="carousel-caption d-none d-md-block">
				                <!-- <h2 class="display-4">Third Slide</h2>
				                <p class="lead">This is a description for the third slide.</p> -->
				              </div>
				            </div>
				            <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/lidar/24.jpg')">
				              <div class="carousel-caption d-none d-md-block">
				                <!-- <h2 class="display-4">Third Slide</h2>
				                <p class="lead">This is a description for the third slide.</p> -->
				              </div>
				            </div>
							<div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/lidar/25.jpg')">
				              <div class="carousel-caption d-none d-md-block">
				                <!-- <h2 class="display-4">Third Slide</h2>
				                <p class="lead">This is a description for the third slide.</p> -->
				              </div>
				            </div>
							<div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/lidar/26.jpg')">
				              <div class="carousel-caption d-none d-md-block">
				                <!-- <h2 class="display-4">Third Slide</h2>
				                <p class="lead">This is a description for the third slide.</p> -->
				              </div>
				            </div>
				          </div>
				          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				                <span class="sr-only">Previous</span>
				              </a>
				          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				                <span class="carousel-control-next-icon" aria-hidden="true"></span>
				                <span class="sr-only">Next</span>
				              </a>
				        </div>
				    </div>
	            </div>
	            <p id="fl-data-lidar"><b>Data Lidar</b></p>
	            <div class="row mb-5">
	              <div class="col-md-6 order-lg-3 mb-5">
	                <img src="<?php echo base_url(); ?>assets/img/Lidar.png" alt="Image placeholder" class="img-fluid" style="width: 450px;margin-top: -68px;">
	              </div>
	              <div class="col-md-1 order-lg-2"></div>
	              <div class="col-md-5 order-lg-1">
	                <h5 class="text-uppercase heading mb-4">Pengambilan & Pengolahan Data LIDAR</h5>
	                 <ul class="list-unstyled check">
	                  <li>Data Raw LIDAR </li>
	                  <li>Pengolahan dan Pengklasifikasian Point Clouds LIDAR </li>
	                  <li>Digital Surface Model (DSM) </li>
	                  <li>Digital Terrain Model (DTM) </li>
	                  <li>LIDAR Intensity Images </li>
	                </ul>
	              </div>
	              
	            </div>
	            <p><b>Foto Udara</b></p>
	            <div class="row" style="margin-top:-40px;">
	              <div class="col-md-6 order-lg-1 mb-5">
	                <img src="<?php echo base_url(); ?>assets/img/Data-Lidar.png" alt="Image placeholder" class="img-fluid" style="width: 600px;margin-top: 25px;">
	              </div>
	              <div class="col-md-1 order-lg-2"></div>
	              <div class="col-md-5 order-lg-3">
	                <h5 class="text-uppercase heading mb-4">Pengambilan & Pengolahan Foto Udara Digital</h5>
	                <ul class="list-unstyled check">
	                  <li>Triangulasi Udara</li>
	                  <li>Stereomodel</li>
	                  <li>Mosaik Orthophoto </li>
	                </ul>
	              </div>
	            </div>

	            <!-- WAHANA -->
	            <hr class="my-4">
	            <p id="fl-wahana"><b>Wahana Survei Udara</b></p>

	            <!-- MODEL 3D CESSNA 172 -->
	            <div class="row mb-4">
	              <div class="col-md-8 mx-auto mb-4">
	                <div class="p-3 border rounded">
	                  <h5 class="text-uppercase heading mb-3 text-center">Model 3D: Cessna 172</h5>
	                  <model-viewer
	                    src="<?php echo base_url(); ?>assets/models/cessna-172.glb"
	                    alt="Model 3D pesawat Cessna 172 untuk akuisisi foto udara"
	                    camera-controls
	                    auto-rotate
	                    auto-rotate-delay="1200"
	                    rotation-per-second="16deg"
	                    camera-orbit="20deg 78deg 60%"
	                    interaction-prompt="none"
	                    environment-image="neutral"
	                    tone-mapping="neutral"
	                    shadow-intensity="1.2"
	                    shadow-softness="1"
	                    exposure="1.1"
	                    style="width:100%; height:clamp(220px, 28vw, 320px); background-color:transparent;">
	                    <div slot="progress-bar"></div>
	                  </model-viewer>
	                  <p class="small text-muted mb-0 mt-3 text-center">
	                    Sumber model 3D: &ldquo;Cessna 172&rdquo; oleh Szil&aacute;rd K. via
	                    <a href="https://3dwarehouse.sketchup.com/model/bb0795effdb85b13e87d121b5fbf21f0/cessna-172" target="_blank" rel="noopener noreferrer">3D Warehouse (SketchUp)</a>.
	                  </p>
	                </div>
	              </div>
	            </div>
	            <!-- model-viewer web component (Google) untuk merender file .glb -->
	            <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>

	            <div class="row mb-5">
	              <div class="col-md-6 mb-4">
	                <div class="p-3 border rounded h-100">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image5.png" alt="Cessna 172P" class="img-fluid rounded mb-3" style="max-height:200px; object-fit:cover; width:100%;">
	                  <h5 class="text-uppercase heading mb-3">Wahana Berawak — Cessna 172P</h5>
	                  <ul class="list-unstyled check">
	                    <li>Stabilitas tinggi, menghasilkan data dan citra yang lebih akurat</li>
	                    <li>Endurance &amp; Jangkauan: flight time 4–5 jam, cakupan area 1.000 km²</li>
	                    <li>Mendukung berbagai sensor: LiDAR, aerial camera, dll</li>
	                    <li>Biaya operasional relatif rendah dibanding pesawat survei lebih besar</li>
	                    <li>Fleksibel: mampu beroperasi dari landasan pendek, cocok untuk hutan, tambang, pulau, atau pantai terpencil</li>
	                  </ul>
	                </div>
	              </div>
	              <div class="col-md-6 mb-4">
	                <div class="p-3 border rounded h-100">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image9.jpeg" alt="DJI Matrice 300 RTK" class="img-fluid rounded mb-3" style="max-height:200px; object-fit:cover; width:100%;">
	                  <h5 class="text-uppercase heading mb-3">Wahana Nirawak — DJI Matrice 300 RTK</h5>
	                  <ul class="list-unstyled check">
	                    <li>Presisi tinggi dengan teknologi RTK</li>
	                    <li>Fleksibilitas sensor dan payload sesuai kebutuhan proyek</li>
	                    <li>Mendukung fotogrametri, LiDAR, hingga inspeksi infrastruktur</li>
	                    <li>Menjangkau area yang sulit diakses</li>
	                    <li>Waktu terbang panjang, cakupan area 20–40 Ha per penerbangan</li>
	                  </ul>
	                </div>
	              </div>
	            </div>

	<!-- PERALATAN LIDAR -->
	            <hr class="my-4">
	            <p id="fl-alat"><b>Peralatan LiDAR</b></p>
	            <p class="text-muted small mb-3">Konfigurasi Airborne LiDAR pada berbagai wahana Cessna:</p>
	            <div class="row mb-4">
	              <div class="col-md-4 mb-4">
	                <div class="p-3 border rounded h-100 text-center">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image45.jpg" alt="Konfigurasi Airborne LiDAR Teledyne Optech H300 pada Cessna 206 Caravan" class="img-fluid rounded mb-2" style="height:260px; object-fit:contain; width:100%; background:#f8f9fa; padding:6px;">
	                  <p class="small text-muted mb-0">Teledyne Optech H300 pada Cessna 206 Caravan</p>
	                </div>
	              </div>
	              <div class="col-md-4 mb-4">
	                <div class="p-3 border rounded h-100 text-center">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image46.jpg" alt="Konfigurasi Airborne LiDAR Teledyne Optech Galaxy T1000 pada Cessna 172 Caravan" class="img-fluid rounded mb-2" style="height:260px; object-fit:contain; width:100%; background:#f8f9fa; padding:6px;">
	                  <p class="small text-muted mb-0">Teledyne Optech Galaxy T1000 pada Cessna 172 Caravan</p>
	                </div>
	              </div>
	              <div class="col-md-4 mb-4">
	                <div class="p-3 border rounded h-100 text-center">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image47.jpg" alt="Konfigurasi Airborne LiDAR Teledyne Optech Galaxy T1000 pada Cessna 208 Caravan" class="img-fluid rounded mb-2" style="height:260px; object-fit:contain; width:100%; background:#f8f9fa; padding:6px;">
	                  <p class="small text-muted mb-0">Teledyne Optech Galaxy T1000 pada Cessna 208 Caravan</p>
	                </div>
	              </div>
	            </div>
	            <div class="row mb-5">
	              <div class="col-md-6 mb-4">
	                <div class="p-3 border rounded h-100">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image39.png" alt="Optech Galaxy T1000" class="img-fluid rounded mb-3" style="max-height:200px; object-fit:contain; width:100%;">
	                  <h5 class="text-uppercase heading mb-3">Optech Galaxy T1000</h5>
	                  <p class="text-muted small">High-Efficiency Airborne LiDAR System</p>
	                  <p>Desain ringkas dan fleksibel, dapat dipasang pada berbagai jenis pesawat berawak termasuk Cessna 172P.</p>
	                  <p class="small text-muted mb-0">Sumber gambar: <a href="https://www.unmannedsystemstechnology.com/2023/01/teledyne-geospatial-to-present-lidar-survey-mapping-solutions-at-geo-week-2023/" target="_blank" rel="noopener noreferrer">unmannedsystemstechnology.com</a>.</p>
	                </div>
	              </div>
	              <div class="col-md-6 mb-4">
	                <div class="p-3 border rounded h-100">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image40.png" alt="Optech Orion H300" class="img-fluid rounded mb-3" style="max-height:200px; object-fit:contain; width:100%;">
	                  <h5 class="text-uppercase heading mb-3">Optech Orion H300</h5>
	                  <p class="text-muted small">High-Accuracy Airborne LiDAR System</p>
	                  <p>Kombinasi Cessna 172P + Optech Galaxy T1000 atau Orion H300 memungkinkan pemetaan dari skala luas hingga super detail dengan biaya lebih terjangkau.</p>
	                  <p class="small text-muted mb-0">Sumber gambar: <a href="https://geo-matching.com/products/altm-orion-h300" target="_blank" rel="noopener noreferrer">geo-matching.com</a>.</p>
	                </div>
	              </div>
	            </div>

	            <!-- KAMERA UDARA -->
	            <hr class="my-4">
	            <p><b>Kamera Udara</b></p>
	            <div class="row mb-5">
	              <div class="col-md-6 mb-4">
	                <div class="p-3 border rounded h-100">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image42.jpg" alt="Phase One iXU-RS1000" class="img-fluid rounded mb-3" style="max-height:200px; object-fit:contain; width:100%;">
	                  <h5 class="text-uppercase heading mb-3">Phase One iXU-RS1000</h5>
	                  <p class="text-muted small">Metric Aerial Kamera</p>
	                  <p>Kamera metrik profesional beresolusi 100 MP untuk citra udara dengan detail dan akurasi tinggi.</p>
	                  <p class="small text-muted mb-0">Sumber gambar: <a href="https://www.npk-photonica.ru/product/18325/" target="_blank" rel="noopener noreferrer">npk-photonica.ru</a>.</p>
	                </div>
	              </div>
	              <div class="col-md-6 mb-4">
	                <div class="p-3 border rounded h-100">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image41.jpg" alt="Hasselblad A6D 100C" class="img-fluid rounded mb-3" style="max-height:200px; object-fit:contain; width:100%;">
	                  <h5 class="text-uppercase heading mb-3">Hasselblad A6D 100C RGB/NIR</h5>
	                  <p>Sensor 100 MP RGB dan Near Infrared (NIR) untuk pemetaan dasar, infrastruktur, analisis vegetasi, dan pengelolaan sumber daya alam.</p>
	                  <p class="small text-muted mb-0">Sumber gambar: <a href="https://www.megapixel.cz/hasselblad-a6d-100c-near-infra-red-nir-bez-ir-filtru" target="_blank" rel="noopener noreferrer">megapixel.cz</a>.</p>
	                </div>
	              </div>
	            </div>

	            <!-- GNSS -->
	            <hr class="my-4">
	            <p id="fl-gnss"><b>GNSS</b></p>
	            <p class="text-muted">Global Navigation Satellite System (GNSS) digunakan untuk penentuan posisi presisi tinggi di lapangan, mendukung pengukuran titik kontrol (GCP/ICP) dan Base Station pada seluruh rangkaian survei udara.</p>
	            <div class="row mb-5">
	              <div class="col-md-6 mb-4">
	                <div class="p-3 border rounded h-100">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image44.png" alt="Trimble R12" class="img-fluid rounded mb-3" style="max-height:200px; object-fit:contain; width:100%;">
	                  <h5 class="text-uppercase heading mb-3">Trimble R12</h5>
	                  <p class="text-muted small">GNSS RTK Receiver</p>
	                  <p>GNSS receiver berperforma tinggi dengan akurasi tingkat sentimeter, didukung teknologi Trimble ProPoint dan lebih dari 672 channel untuk pelacakan multi-konstelasi GPS, GLONASS, Galileo, BeiDou, QZSS, dan SBAS. Cocok untuk survei topografi, konstruksi, dan pemetaan geospasial profesional.</p>
	                </div>
	              </div>
	              <div class="col-md-6 mb-4">
	                <div class="p-3 border rounded h-100">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image43.png" alt="South Galaxy 1 Plus" class="img-fluid rounded mb-3" style="max-height:200px; object-fit:contain; width:100%;">
	                  <h5 class="text-uppercase heading mb-3">South Galaxy 1 Plus</h5>
	                  <p class="text-muted small">GNSS RTK Receiver</p>
	                  <p>GNSS RTK receiver dengan 1.408-channel engine untuk pelacakan multi-konstelasi GPS, GLONASS, Galileo, BeiDou, QZSS, IRNSS, dan SBAS, dilengkapi IMU Tilt Compensation serta konektivitas Bluetooth, Wi-Fi, dan 4G LTE. Ideal untuk survei topografi, konstruksi, dan pemetaan GIS.</p>
	                </div>
	              </div>
	            </div>

	            <!-- SOFTWARE PENGOLAHAN -->
	            <hr class="my-4">
	            <p id="fl-software"><b>Software Pengolahan</b></p>
	            <p class="text-muted">Data mentah hasil akuisisi (LiDAR dan foto udara) diolah melalui dua jalur perangkat lunak yang berbeda sebelum digabungkan menjadi produk akhir.</p>
	            <div class="row mb-5">
	              <div class="col-md-6 mb-4">
	                <div class="p-3 border rounded h-100">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image37.png" alt="Terrasolid Suite" class="rounded mb-3" style="height:280px; object-fit:contain; width:100%; background:#f8f9fa; padding:8px;">
	                  <h5 class="text-uppercase heading mb-3">Terrasolid Suite</h5>
	                  <p class="text-muted small">Software Pengolahan LiDAR</p>
	                  <p>Pengolahan khusus data LiDAR dan <i>point cloud</i>: klasifikasi titik (tanah, vegetasi, bangunan), filter <i>ground</i>, hingga menghasilkan DSM, DTM, dan kontur. Alternatif: RiPROCESS, Leica HxMap.</p>
	                </div>
	              </div>
	              <div class="col-md-6 mb-4">
	                <div class="p-3 border rounded h-100">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image38.jpg" alt="Trimble Inpho" class="rounded mb-3" style="height:280px; object-fit:contain; width:100%; background:#f8f9fa; padding:8px;">
	                  <h5 class="text-uppercase heading mb-3">Trimble Inpho</h5>
	                  <p class="text-muted small">Software Pengolahan Foto Udara</p>
	                  <p>Pengolahan foto udara (<i>aero-triangulation</i>, orientasi, orthorektifikasi, dan mosaik) hingga menghasilkan ortofoto/peta foto mosaik yang presisi. Alternatif: Agisoft Metashape, Pix4D Mapper.</p>
	                </div>
	              </div>
	            </div>

	            <!-- PRODUK -->
	            <hr class="my-4">
	            <p id="fl-produk"><b>Produk yang dihasilkan oleh Sensor Lidar dan Kamera Udara</b></p>
	            <div class="row mb-5">
	              <div class="col-md-6 col-lg-3 mb-4">
	                <div class="p-3 border rounded h-100 text-center">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image23.png" alt="DSM" class="img-fluid rounded mb-2" style="max-height:140px; object-fit:cover; width:100%;">
	                  <h6 class="text-uppercase heading mb-1">DSM</h6>
	                  <p class="small text-muted mb-0">Digital Surface Model</p>
	                  <p class="small">Skala 1:1.000 &amp; 1:5.000</p>
	                </div>
	              </div>
	              <div class="col-md-6 col-lg-3 mb-4">
	                <div class="p-3 border rounded h-100 text-center">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image25.png" alt="DTM" class="img-fluid rounded mb-2" style="max-height:140px; object-fit:cover; width:100%;">
	                  <h6 class="text-uppercase heading mb-1">DTM</h6>
	                  <p class="small text-muted mb-0">Digital Terrain Model</p>
	                  <p class="small">Skala 1:1.000 &amp; 1:5.000</p>
	                </div>
	              </div>
	              <div class="col-md-6 col-lg-3 mb-4">
	                <div class="p-3 border rounded h-100 text-center">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image27.png" alt="Kontur" class="img-fluid rounded mb-2" style="max-height:140px; object-fit:cover; width:100%;">
	                  <h6 class="text-uppercase heading mb-1">Kontur</h6>
	                  <p class="small">Skala 1:1.000, interval 5 m &amp; Skala 1:5.000</p>
	                </div>
	              </div>
	              <div class="col-md-6 col-lg-3 mb-4">
	                <div class="p-3 border rounded h-100 text-center">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image29.png" alt="Mozaik Foto" class="img-fluid rounded mb-2" style="max-height:140px; object-fit:cover; width:100%;">
	                  <h6 class="text-uppercase heading mb-1">Mozaik Foto</h6>
	                  <p class="small">Skala 1:1.000 &amp; 1:5.000, GSD 10 cm</p>
	                </div>
	              </div>
	            </div>

	            <!-- ANALISIS -->
	            <hr class="my-4">
	            <p id="fl-analisis"><b>Analisis</b></p>
	            <div class="row mb-4">
	              <div class="col-md-12 mb-4">
	                <div class="p-3 border rounded">
	                  <h6 class="text-uppercase heading mb-3">Cut and Fill</h6>
	                  <p class="text-muted">Analisis Cut and Fill digunakan untuk menghitung volume galian (cut) dan timbunan (fill) pada suatu wilayah berdasarkan data elevasi dari LiDAR atau Foto Udara. Hasil analisis mencakup profil terrain, volume kubik, dan luas permukaan area yang terdampak &mdash; sangat berguna untuk perencanaan konstruksi, tambang, dan infrastruktur.</p>
	                  <div class="row">
	                    <div class="col-md-7 mb-3">
	                      <p class="small text-muted mb-1">Path Profile / Line of Sight</p>
	                      <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image32.png" alt="Terrain Profile" class="img-fluid rounded" style="width:100%;">
	                    </div>
	                    <div class="col-md-5 mb-3">
	                      <p class="small text-muted mb-1">Volumetric Calculations</p>
	                      <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image31.png" alt="Volumetric Calculation" class="img-fluid rounded" style="width:100%;">
	                    </div>
	                  </div>
	                </div>
	              </div>
	              <div class="col-md-6 col-lg-4 mb-4">
	                <div class="p-3 border rounded h-100 text-center">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image33.jpeg" alt="Analisis Daerah Irigasi" class="img-fluid rounded mb-2" style="max-height:160px; object-fit:cover; width:100%;">
	                  <h6 class="text-uppercase heading">Analisis Daerah Irigasi</h6>
	                  <p class="small text-muted mt-2 text-left">Menganalisis jaringan irigasi untuk mengetahui arah aliran, saluran primer dan sekunder, serta kondisi daerah irigasi berdasarkan data LiDAR dan DTM.</p>
	                </div>
	              </div>
	              <div class="col-md-6 col-lg-4 mb-4">
	                <div class="p-3 border rounded h-100 text-center">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image34.png" alt="Arah Aliran" class="img-fluid rounded mb-2" style="max-height:160px; object-fit:cover; width:100%;">
	                  <h6 class="text-uppercase heading">Arah Aliran</h6>
	                  <p class="small text-muted mt-2 text-left">Menentukan arah aliran air permukaan berdasarkan model elevasi digital, digunakan untuk perencanaan drainase, hidrologi, dan pengelolaan sumber daya air.</p>
	                </div>
	              </div>
	              <div class="col-md-6 col-lg-4 mb-4">
	                <div class="p-3 border rounded h-100 text-center">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image35.jpeg" alt="Tree Counting" class="img-fluid rounded mb-2" style="max-height:160px; object-fit:cover; width:100%;">
	                  <h6 class="text-uppercase heading">Tree Counting</h6>
	                  <p class="small text-muted mt-2 text-left">Menghitung jumlah pohon secara otomatis dari data point cloud LiDAR atau citra foto udara, berguna untuk inventarisasi hutan, perkebunan, dan penghijauan.</p>
	                </div>
	              </div>
	              <div class="col-md-6 col-lg-4 mb-4">
	                <div class="p-3 border rounded h-100 text-center">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image36.png" alt="Jalur Efektif" class="img-fluid rounded mb-2" style="max-height:160px; object-fit:cover; width:100%;">
	                  <h6 class="text-uppercase heading">Jalur Efektif</h6>
	                  <p class="small text-muted mt-2 text-left">Menentukan jalur optimal berdasarkan model elevasi, digunakan untuk perencanaan jalan, jalur pipa, atau akses ke lokasi yang sulit dijangkau.</p>
	                </div>
	              </div>
	            </div>

	            </div>
	          </div>
	          <div class="tab-pane fade" id="survey" role="tabpanel" aria-labelledby="profile-tab" style="background: #fff;">
	            <ul class="list-group">
	              <li class="list-group-item" style="margin-top: 10px;">
	                <b>Land Surveying</b>
	                <p>
	                  <div class="row mb-5">
	                	<div class="col-md-12 order-lg-3 mb-5">
	                		<img src="<?php echo base_url(); ?>assets/img/layanan/survei/1.png">
	                	</div>
	                  </div>
	                  <div class="row mb-5">
	                    <div class="col-md-6 order-lg-3 mb-5">
	                      <img src="<?php echo base_url(); ?>assets/img/LandSurvey.png" alt="Image placeholder" class="img-fluid" style="width: 400px;margin-left: 40px;">
	                    </div>
	                    <div class="col-md-1 order-lg-2"></div>
	                    <div class="col-md-5 order-lg-1">
	                      <h5 class="text-uppercase heading mb-4">Survey – Hydrografi dan Terestrial dengan GPS dan 3D Mobile System</h5>
	                       <ul class="list-unstyled check">
	                        <li>Survey karakteristik perairan, danau dan sungai </li>
	                        <li>Survey Topografi</li>
	                        <li>Survey Toponimi wilayah </li>
	                        <li>Road Survey </li>
	                      </ul>
	                    </div>
	                  </div>
	                </p>
	              </li>
	              
	            </ul>
	          </div>
	          <div class="tab-pane fade" id="tematik" role="tabpanel" aria-labelledby="profile-tab" style="background: #fff;">
	            <ul class="list-group">
	              <li class="list-group-item" style="margin-top: 10px;">
	                <b>Tematik</b>
	                <p>
	                  <div class="row mb-5">
	                    <div class="col-md-6 order-lg-3 mb-5">
	                      <!-- <img src="assets/img/training/dispotrut/6.jpeg" alt="Image placeholder" class="img-fluid" style="width: 400px;margin-left: 40px;"> -->
	                      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	                        <ol class="carousel-indicators">
	                          <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
	                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	                          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
	                          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
	                          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
	                          <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
	                          <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
	                          <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
	                          <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
	                        </ol>
	                        <div class="carousel-inner" role="listbox">
	                          <!-- Slide One - Set the background image for this slide in the line below -->
	                          <div class="carousel-item active" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/tematik/1.png')">
	                            <div class="carousel-caption d-none d-md-block">
	                              <!-- <h2 class="display-4">First Slide</h2> -->
	                              <!-- <p class="lead">This is a description for the first slide.</p> -->
	                            </div>
	                          </div>
	                          <!-- Slide Two - Set the background image for this slide in the line below -->
	                          <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/tematik/2.png')">
	                            <div class="carousel-caption d-none d-md-block">
	                              <!-- <h2 class="display-4">Second Slide</h2> -->
	                              <!-- <p class="lead">This is a description for the second slide.</p> -->
	                            </div>
	                          </div>
	                          <!-- Slide Three - Set the background image for this slide in the line below -->
	                          <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/tematik/3.png')">
	                            <div class="carousel-caption d-none d-md-block">
	                              <!-- <h2 class="display-4">Third Slide</h2> -->
	                              <!-- <p class="lead">This is a description for the third slide.</p> -->
	                            </div>
	                          </div>
	                          <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/tematik/4.png')">
	                            <div class="carousel-caption d-none d-md-block">
	                              <!-- <h2 class="display-4">Second Slide</h2> -->
	                              <!-- <p class="lead">This is a description for the second slide.</p> -->
	                            </div>
	                          </div>
	                          <!-- Slide Three - Set the background image for this slide in the line below -->
	                          <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/tematik/5.png')">
	                            <div class="carousel-caption d-none d-md-block">
	                              <!-- <h2 class="display-4">Third Slide</h2> -->
	                              <!-- <p class="lead">This is a description for the third slide.</p> -->
	                            </div>
	                          </div>
	                          <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/tematik/6.png')">
	                            <div class="carousel-caption d-none d-md-block">
	                              <!-- <h2 class="display-4">Second Slide</h2> -->
	                              <!-- <p class="lead">This is a description for the second slide.</p> -->
	                            </div>
	                          </div>
	                          <!-- Slide Three - Set the background image for this slide in the line below -->
	                          <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/tematik/7.png')">
	                            <div class="carousel-caption d-none d-md-block">
	                              <!-- <h2 class="display-4">Third Slide</h2> -->
	                              <!-- <p class="lead">This is a description for the third slide.</p> -->
	                            </div>
	                          </div>
	                          <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/tematik/8.png')">
	                            <div class="carousel-caption d-none d-md-block">
	                              <!-- <h2 class="display-4">Second Slide</h2> -->
	                              <!-- <p class="lead">This is a description for the second slide.</p> -->
	                            </div>
	                          </div>
	                          <!-- Slide Three - Set the background image for this slide in the line below -->
	                          <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/tematik/9.png')">
	                            <div class="carousel-caption d-none d-md-block">
	                              <!-- <h2 class="display-4">Third Slide</h2> -->
	                              <!-- <p class="lead">This is a description for the third slide.</p> -->
	                            </div>
	                          </div>
	                        </div>
	                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	                              <span class="sr-only">Previous</span>
	                            </a>
	                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
	                              <span class="sr-only">Next</span>
	                            </a>
	                      </div>
	                    </div>
	                    <div class="col-md-1 order-lg-2"></div>
	                    <div class="col-md-5 order-lg-1">
	                      <h5 class="text-uppercase heading mb-4">Sasaran dari kegiatan Pemetaan Penutup Lahan adalah :</h5>
	                       <ol>
	                        <li>lnformasi Geospasial Tematik Penutup Lahan skala 1 : 50.000 dalam format NLP dan seamless (Region, provinsi, kabupaten).</li>
	                        <li>Buku Deskripsi Analisis Pembaruan Peta Penutup Lahan</li>
	                        <!-- <li>Pemetaan digital dengan Arcgis Pro</li> -->
	                        <li>Metadata Pembaruan Peta Penutup Lahan</li>
	                      </ol>
	                    </div>
	                  </div>

	                  <div class="row mb-5">
	                  	<div class="col-md-6 order-lg-3 mb-5">
	                      <img src="<?php echo base_url(); ?>assets/img/layanan/tematik/10.png" alt="Image placeholder" class="img-fluid" style="width: 500px;">
	                      <p>
	                      <h5>Data penutup lahan hasil integrasi dan sinkronisasi dengan data K/L</h5>
	                    </div>
	                    <div class="col-md-6 order-lg-3 mb-5">
	                      <img src="<?php echo base_url(); ?>assets/img/layanan/tematik/11.png" alt="Image placeholder" class="img-fluid" style="width: 500px; height: 250px;">
	                      <p>
	                      <h5>Peta Penutup Lahan hasil integrasi dengan Kementerian/Lembaga</h5>
	                    </div>
	                  </div>

	                  <div class="row mb-5">
	                  	<div class="col-md-12 order-lg-3 mb-5">
	                      <img src="<?php echo base_url(); ?>assets/img/layanan/tematik/12.png" alt="Image placeholder" class="img-fluid" style="width: 500px; margin-left: 280px;">
	                      <p>
	                      <h5 style="margin-left: 310px;">Contoh hasil foto hemispherical kerapatan vegetasi</h5>
	                    </div>
	                    
	                  </div>

	                  <div class="row mb-5">
	                  	<div class="col-md-12 order-lg-3 mb-5">
	                      <img src="<?php echo base_url(); ?>assets/img/layanan/tematik/13.png" alt="Image placeholder" class="img-fluid" style="width: 500px; margin-left: 280px;">
	                      <p>
	                      <h5 style="margin-left: 110px;">Sebaran kerapatan vegetasi sebagian wilayah Sumatera Selatan. Tampak bahwa terdapat kerapatan rendah, sedang, dan tinggi
	                      </h5>
	                    </div>
	                  </div>

	                  <div class="row mb-5">
	                  	<div class="col-md-6 order-lg-3 mb-5">
	                      <img src="<?php echo base_url(); ?>assets/img/layanan/tematik/14.png" alt="Image placeholder" class="img-fluid" style="width: 500px;">
	                    </div>
	                    <div class="col-md-6 order-lg-3 mb-5">
	                      <h5>Layout peta penutup lahan provinsi</h5>
	                      <ol>
	                        <li>Hasil digitasi data penutup lahan dilakukan interpolasi 3D.</li>
	                        <li>Data yang digunakan untuk proses penutup lahan yaitu data DSM (Digital Surface Model) dan DTM (Digital Terrain Model)</li>
	                        <!-- <li>Pemetaan digital dengan Arcgis Pro</li> -->
	                        <li>Setelah dilakukan proses interpolasi akan menghasilkan data ketinggian sesuai vertek di data penutup lahan 2D</li>
	                        <li> Setelah data sudah terisi semua nilai x,y dan z maka melakukan analisis 3D menggunakan extension 3D analyst dengan metode Interpolate shape.</li>
	                        <li>Konversi  data vektor 2D ke data  3D dengan metode pengambilan ketinggian (Z) dari  data DEMNAS dan DTM.</li>
	                      </ol>
	                    </div>
	                  </div>

	                  <div class="row mb-5">
	                  	<div class="col-md-12 order-lg-3 mb-5">
	                      <img src="<?php echo base_url(); ?>assets/img/layanan/tematik/15.png" alt="Image placeholder" class="img-fluid" style="width: 500px; margin-left: 280px;">
	                      <p>
	                      <h5 style="margin-left: 265px;">Hasil citra Landsat 8 hasil proses pansharpening (kanan) dan multispektral (kiri)</h5>
	                    </div>
	                    
	                  </div>

	                  <div class="row mb-5">
	                  	<div class="col-md-4 order-lg-3 mb-5">
	                      <img src="<?php echo base_url(); ?>assets/img/layanan/tematik/16.png" alt="Image placeholder" class="img-fluid" style="width: 500px; height: 300px;">
	                    </div>
	                    <div class="col-md-4 order-lg-3 mb-5">
	                      <img src="<?php echo base_url(); ?>assets/img/layanan/tematik/17.png" alt="Image placeholder" class="img-fluid" style="width: 500px; height: 300px;">
	                    </div>
	                    <div class="col-md-4 order-lg-3 mb-5">
	                      <img src="<?php echo base_url(); ?>assets/img/layanan/tematik/18.png" alt="Image placeholder" class="img-fluid" style="width: 500px; height: 300px;">
	                    </div>
	                  </div>
	                  <p><h5 style="margin-top: -40px;margin-left: 330px;">contoh color composite yang digunakan dalam penutup lahan</h5></p>
	                </p>
	              </li>
	            </ul>
	          </div>
	          <div class="tab-pane fade" id="petatopografi" role="tabpanel" aria-labelledby="peta-topografi-tab" style="background: #fff;">
	            <div class="list-group-item" style="margin-top: 10px;">
	            <p id="pt-definisi"><b>Definisi</b></p>
	            <p class="text-muted">Peta topografi adalah peta yang menggambarkan bentuk permukaan bumi secara detail dan tiga dimensi, namun disajikan dalam bentuk dua dimensi pada bidang datar. Peta ini menunjukkan kondisi relief permukaan bumi seperti perbukitan, lembah, sungai, dan dataran, sehingga penggunanya dapat memahami karakteristik suatu wilayah dengan lebih baik.</p>

	            <hr class="my-4">
	            <p id="pt-komponen"><b>Komponen Utama</b></p>
	            <p class="text-muted">Peta topografi dibentuk dari tiga komponen utama, yaitu kontur, penutup lahan, dan toponimi. Ketiga komponen ini digabungkan untuk menghasilkan peta topografi yang lengkap dan informatif.</p>
	            <div class="row mb-3">
	              <div class="col-md-6 col-lg-3 mb-4">
	                <div class="komponen-card border rounded text-center">
	                  <div class="komponen-card-inner">
	                    <img src="<?php echo base_url(); ?>assets/img/layanan/peta-topografi/komponen-kontur.png" alt="Kontur" class="img-fluid rounded">
	                    <div class="komponen-caption">
	                      <h6 class="text-uppercase heading mb-0">Kontur</h6>
	                    </div>
	                  </div>
	                </div>
	              </div>
	              <div class="col-md-6 col-lg-3 mb-4">
	                <div class="komponen-card border rounded text-center">
	                  <div class="komponen-card-inner">
	                    <img src="<?php echo base_url(); ?>assets/img/layanan/peta-topografi/komponen-penutup-lahan.png" alt="Penutup Lahan" class="img-fluid rounded">
	                    <div class="komponen-caption">
	                      <h6 class="text-uppercase heading mb-0">Penutup Lahan</h6>
	                    </div>
	                  </div>
	                </div>
	              </div>
	              <div class="col-md-6 col-lg-3 mb-4">
	                <div class="komponen-card border rounded text-center">
	                  <div class="komponen-card-inner">
	                    <img src="<?php echo base_url(); ?>assets/img/layanan/peta-topografi/komponen-toponimi.png" alt="Toponimi" class="img-fluid rounded">
	                    <div class="komponen-caption">
	                      <h6 class="text-uppercase heading mb-0">Toponimi</h6>
	                    </div>
	                  </div>
	                </div>
	              </div>
	              <div class="col-md-6 col-lg-3 mb-4">
	                <div class="komponen-card border rounded text-center">
	                  <div class="komponen-card-inner">
	                    <img src="<?php echo base_url(); ?>assets/img/layanan/peta-topografi/komponen-hasil-peta-topografi.png" alt="Peta Topografi" class="img-fluid rounded">
	                    <div class="komponen-caption">
	                      <h6 class="text-uppercase heading mb-0">Peta Topografi</h6>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	            <p class="text-muted"><b>Kontur + Penutup Lahan + Toponimi = Peta Topografi.</b> Semakin lengkap ketiga lapisan ini, semakin informatif peta yang dihasilkan.</p>

	            <hr class="my-4">
	            <p id="pt-pembuatan"><b>Pembuatan Peta Topografi</b></p>
	            <p class="text-muted">Seluruh proses Foto Udara dan LiDAR, mulai dari wahana, alat, software, hingga produk, bermuara pada satu alur kerja terpadu untuk menghasilkan Peta Topografi.</p>
	            <div class="row mb-4">
	              <div class="col-md-12 mb-4 text-center">
	                <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/alur_petatopo.png" alt="Alur kerja terintegrasi pembuatan Peta Topografi" class="img-fluid rounded" style="max-width:640px; width:100%;">
	                <p class="small text-muted mb-0 mt-2">Alur kerja terintegrasi pembuatan Peta Topografi.</p>
	              </div>
	              <div class="col-md-12">
	                <ol class="text-muted" style="line-height:1.8;">
	                  <li class="mb-2"><b class="text-dark">Perencanaan Misi.</b> Menentukan wahana (berawak atau nirawak), sensor, dan jalur terbang sesuai dengan luas area serta tingkat akurasi yang dibutuhkan.</li>
	                  <li class="mb-2"><b class="text-dark">Survey GNSS Lapangan.</b> Base Station GNSS merekam data koreksi secara kontinu, sementara tim lapangan mengukur titik GCP/ICP menggunakan GPS/GNSS geodetik <i>dual frequency</i>.</li>
	                  <li class="mb-2"><b class="text-dark">Akuisisi Data Udara.</b> Wahana (Cessna 172P atau DJI Matrice 300 RTK) membawa sensor LiDAR, kamera udara, dan IMU/GNSS secara bersamaan untuk merekam data di lapangan.</li>
	                  <li class="mb-2"><b class="text-dark">Pengolahan Data LiDAR.</b> Data <i>raw</i> diolah menggunakan Terrasolid menjadi <i>point cloud</i> terklasifikasi, DSM, DTM, dan peta kontur.</li>
	                  <li class="mb-2"><b class="text-dark">Pengolahan Foto Udara.</b> Foto udara diolah menggunakan Trimble Inpho melalui triangulasi udara dan stereomodel untuk menghasilkan ortofoto dan peta foto mosaik.</li>
	                  <li class="mb-2"><b class="text-dark">Integrasi Produk.</b> Data kontur dari LiDAR dan peta foto dari fotogrametri digabungkan bersama data penutup lahan dan toponimi untuk membentuk Peta Topografi yang lengkap.</li>
	                  <li class="mb-2"><b class="text-dark">Publikasi.</b> Seluruh produk disimpan dan dipublikasikan melalui Server Data Center (ArcGIS Enterprise dan AFE) agar dapat diakses serta dimanfaatkan lintas sektor.</li>
	                </ol>
	              </div>
	            </div>

	            </div>
	          </div>
	          <div class="tab-pane fade" id="training" role="tabpanel" aria-labelledby="contact-tab" style="background: #fff;">
	            <ul class="list-group">
	              <li class="list-group-item" style="margin-top: 10px;">
	                <b>DISPOTRUD</b>
	                <p>
	                  <div class="row mb-5">
	                    <div class="col-md-6 order-lg-3 mb-5">
	                      <!-- <img src="assets/img/training/dispotrut/6.jpeg" alt="Image placeholder" class="img-fluid" style="width: 400px;margin-left: 40px;"> -->
	                      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	                        <ol class="carousel-indicators">
	                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	                          <!--<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
	                          <!--<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
	                        </ol>
	                        <div class="carousel-inner" role="listbox">
	                          <!-- Slide One - Set the background image for this slide in the line below -->
	                          <div class="carousel-item active" style="background-image: url('<?php echo base_url(); ?>assets/img/training/dispotrut/1.jpeg')">
	                            <div class="carousel-caption d-none d-md-block">
	                              <!-- <h2 class="display-4">First Slide</h2> -->
	                              <!-- <p class="lead">This is a description for the first slide.</p> -->
	                            </div>
	                          </div>
	                          <!-- Slide Two - Set the background image for this slide in the line below -->
	                          <!--<div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/training/dispotrut/2.jpeg')">-->
	                          <!--  <div class="carousel-caption d-none d-md-block">-->
	                              <!-- <h2 class="display-4">Second Slide</h2> -->
	                              <!-- <p class="lead">This is a description for the second slide.</p> -->
	                          <!--  </div>-->
	                          <!--</div>-->
	                          <!-- Slide Three - Set the background image for this slide in the line below -->
	                          <!--<div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/training/dispotrut/6.jpeg')">-->
	                          <!--  <div class="carousel-caption d-none d-md-block">-->
	                              <!-- <h2 class="display-4">Third Slide</h2> -->
	                              <!-- <p class="lead">This is a description for the third slide.</p> -->
	                          <!--  </div>-->
	                          <!--</div>-->
	                        </div>
	                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	                              <span class="sr-only">Previous</span>
	                            </a>
	                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
	                              <span class="sr-only">Next</span>
	                            </a>
	                      </div>


	                    </div>
	                    <div class="col-md-1 order-lg-2"></div>
	                    <div class="col-md-5 order-lg-1">
	                      <h5 class="text-uppercase heading mb-4">Training Dispotrud</h5>
	                       <ul class="list-unstyled check">
	                        <li>Menggunakan Mobile Application untuk collecting data lapangan</li>
	                        <li>Pembuatan Database Dengan Menggunakan Arcgis Pro(Proses Digitasi, Editing dan Attribut dan pembuatan Geodatabase)</li>
	                        <!-- <li>Pemetaan digital dengan Arcgis Pro</li> -->
	                        <li>Visualisasi 3D Menggunakan Arcgis Pro</li>
	                      </ul>
	                    </div>
	                  </div>
	                </p>
	              </li>
	            </ul>
	          </div>
	          <div class="tab-pane fade" id="software" role="tabpanel" aria-labelledby="contact-tab" style="background: #fff;">
	           <ul class="list-group">
	              	<li class="list-group-item" style="margin-top: 10px;">
	              		<div class="row">
        	                <div class="col-md-4">
        	                    <div class="card" style="width: 28rem;">
        						  <img height="300" class="card-img-top" src="<?php echo base_url(); ?>assets/img/layanan/software/1.jpeg" alt="Card image cap">
        						  <div class="card-body">
        						    <h5 class="card-title" style="text-align: center;">DDS APPLICATION</h5>
        						  </div>
        						</div>
        	                </div>
        	                <div class="col-md-4">
        	                    <div class="card" style="width: 28rem;">
        						  <img height="300" class="card-img-top" src="<?php echo base_url(); ?>assets/img/layanan/software/2.jpeg" alt="Card image cap">
        						  <div class="card-body">
        						    <h5 class="card-title" style="text-align: center;">SIPETA APPLICATION</h5>
        						  </div>
        						</div>
        	                </div>
                            <div class="col-md-4">
        	                    <div class="card" style="width: 28rem;">
        						  <img height="300" class="card-img-top" src="<?php echo base_url(); ?>assets/img/layanan/software/3.jpeg" alt="Card image cap">
        						  <div class="card-body">
        						    <h5 class="card-title" style="text-align: center;">WebGIS dan Mobile Apps</h5>
        						  </div>
        						</div>
        	                </div>
    	                </div>
	              	</li>
	            </ul>
            </div>
            <div class="tab-pane fade" id="konsultasi" role="tabpanel" aria-labelledby="contact-tab" style="background: #fff;">
	           <ul class="list-group">
	              <li class="list-group-item" style="margin-top: 10px;">
    	            <div class="row">     
    	                <div class="col-md-12">
    	                    <form method="post" action="<?php echo base_url('layanan/kirim_pesan') ?>">
    	                    
    	                    	<div class="form-group">
	    	                		<label>Kategori</label>
	    	                		<select class="form-control" name="kategori" required>
	    	                			<option value="1">Foto Udara dan Lidar</option>
	    	                			<option value="2">Tematik</option>
	    	                			<option value="3">Land Survei</option>
	    	                			<option value="4">IT</option>
	    	                			<option value="5">Training</option>
	    	                			<option value="6">Software dan Citra</option>
	    	                		</select>
    	                		</div>
    	                		<div class="form-group">
	    	                		<label>Nama</label>
	    	                		<input type="text" name="nama" class="form-control" required>
	    	                	</div>
	    	                	<div class="form-group">
	    	                		<label>Instansi</label>
	    	                		<input type="text" name="instansi" class="form-control" required>
	    	                	</div>
	    	                	<div class="form-group">
	    	                		<label>No Telepon</label>
	    	                		<input type="text" name="telp" class="form-control" required>
	    	                	</div>
	    	                	<div class="form-group">
	    	                		<label>Email</label>
	    	                		<input type="email" name="emails" class="form-control" required>
	    	                	</div>
	    	                	<div class="form-group">
	    	                		<label>Tuliskan Pesan</label>
	    	                		<textarea class="form-control" name="pesan"></textarea>
	    	                		<!-- <input type="text" name="pesan" class="form-control" required> -->
	    	                	</div>
	    	                	<div class="form-group">
	    	                		<!-- <label>Tuliskan Pesan</label> -->
	    	                		<button style="float: right;" type="submit" class="btn btn-primary">Kirim Pesan</button>
	    	                	</div>
    	                	</form>
    	                </div>
    	            </div>
	            </li>
	       	  </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



	<footer class="site-footer" role="contentinfo">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-4">
	        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	        <!-- <p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p> -->
	       <h4 style="color: #00ff03;"> <strong>PT Waindo SpecTerra</strong></h4>
	       <p style="color: #fff;margin-top: -11px;margin-bottom: 10px;"><strong>total solution for digital information</strong></p>
	       <img src="<?php echo base_url(); ?>assets/img/waindo.png" alt="Image Placeholder"  class="left" style="max-width: 25%;">
	        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	      </div>
	      <div class="col-md-4">
	        <ul class="list-unstyled footer-link">
	          <li class="d-flex"><span class="mr-3"><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="text-black">Kompleks Perkantoran Pejaten Raya #7-8 <br>
	            <p>Jl. Pejaten Raya No.2 Jakarta Selatan 12510</p></span></li>
	          <li class="d-flex"><span class="mr-3"><i class="fa fa-phone-square" aria-hidden="true"></i></span><span class="text-black">021 7986816; 7986405 </li>
	          <li class="d-flex"><span class="mr-3"><i class="fa fa-fax" aria-hidden="true"></i></span><span class="text-black">021 7995539 </span></li>
	          <li class="d-flex"><span class="mr-3"><i class="fa fa-envelope-o" aria-hidden="true"></i></span><span class="text-black"> marketing@waindo.co.id; dis001@cbn.net.id </span></li>
	        </ul>
	      </div>
	      <div class="col-md-4">
	       <h3 style="color:#fff;">Social</h3>
	        <ul class="list-unstyled footer-link d-flex">
	          <li><a href="https://twitter.com/WSpecterra?s=08" target="_blank" class="p-2"><span class="fa fa-twitter"> Twitter </span></a></li>
	          <li><a href="https://www.facebook.com/158439770889710/posts/3330464123687243/" target="_blank" class="p-2"><span class="fa fa-facebook"> Facebook </span></a></li>
	          <li><a href="https://instagram.com/waindo_specterra?igshid=fysfd3j6l41n" target="_blank" class="p-2"><span class="fa fa-instagram"> Instagram </span></a></li>
	        </ul>
	      </div>
	    </div>
	  </div>
	</footer>
<!-- END footer -->
<div class="modal fade" id="lissarr" tabindex="-1" role="dialog" aria-labelledby="lissa" aria-hidden="true" style="z-index: 100000000;">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">Form Pesan</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <p>
	        <div class="row">
	        	<div class="col-md-4"><label>Nama Lengkap</label></div>
	        	<div class="col-md-8"><input type="text" id="nama" class="form-control"></div>
	        </div>
	        <p>
	        <div class="row">
	        	<div class="col-md-4"><label>Alamat Email</label></div>
	        	<div class="col-md-8"><input type="text" name="sasa" id="email" class="form-control"></div>
	        </div>
	        <p>
	        <div class="row">
	        	<div class="col-md-4"><label>Nama Instansi</label></div>
	        	<div class="col-md-8"><input type="text" name="sasa" id="instansi" class="form-control"></div>
	        </div>
	        <p>
	        <div class="row">
	        	<div class="col-md-4"><label>Isi Pesan</label></div>
	        	<div class="col-md-8"><textarea class="form-control" id="keterangan"></textarea></div>
	        </div>
	        <p>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary">Kirim Pesan</button>
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
	        
	      </div>
	    </div>
	  </div>
	</div>
  <!--   @include('Depan.Header')
    @include('Depan.Service')
    @include('Depan.Sektor')
    @include('Depan.News')
    @include('Depan.Footer') -->


    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    
    <script type="text/javascript">
    	$("#btn_lissarr").click(function(){
    	    $("#lissarr").modal();
    	  });
	  $("#btn_gh").click(function(){
	    $("#lissarr").modal();
	  });
	  $("#btn_radji").click(function(){
	    $("#lissarr").modal();
	  });
	  $("#btn_hanny").click(function(){
	    $("#lissarr").modal();
	  });
	  $("#btn_faik").click(function(){
	    $("#lissarr").modal();
	  });
	  $("#btn_gunawan").click(function(){
	    $("#lissarr").modal();
	  });
	  $("#btn_yus").click(function(){
	    $("#lissarr").modal();
	  });
	  $("#btn_luwin").click(function(){
	    $("#lissarr").modal();
	  });
	  $("#btn_riyan").click(function(){
	    $("#lissarr").modal();
	  });
    </script>
    

    <!-- Dropdown menu "Foto Udara dan Lidar" & "Peta Topografi": aktifkan tab terkait lalu scroll ke section -->
    <script>
    $(function () {
      var $myTab = $('#myTab');
      var $lidarToggle = $('#home-tab');
      var $topografiToggle = $('#peta-topografi-tab');
      var $allDropdownToggles = $lidarToggle.add($topografiToggle);

      // header pakai logo ber-unit vh sehingga tingginya dinamis: tempelkan #myTab tepat di bawahnya
      function updateStickyTabOffset() {
        var headerOffset = $('header').outerHeight() || 90;
        $myTab.css('top', headerOffset + 'px');
      }
      updateStickyTabOffset();
      $(window).on('resize', updateStickyTabOffset);

      // aktifkan tab pane terkait secara manual, tanpa scroll
      function activateDropdownTab($toggle, tabPaneId) {
        // lepaskan status active dari SEMUA nav-link (dropdown maupun tab biasa) agar hanya satu yang aktif
        $('#myTab .nav-link').removeClass('active');
        $toggle.addClass('active');
        $('#myTabContent .tab-pane').removeClass('show active');
        $(tabPaneId).addClass('show active');
      }

      function gotoDropdownSection($toggle, tabPaneId, hash) {
        activateDropdownTab($toggle, tabPaneId);
        // scroll ke section tujuan, dikurangi tinggi header + tinggi #myTab yang sticky
        var $target = $(hash);
        if ($target.length) {
          var headerOffset = $('header').outerHeight() || 90;
          var tabOffset = $myTab.outerHeight() || 0;
          $('html, body').animate({ scrollTop: $target.offset().top - headerOffset - tabOffset - 20 }, 400);
        }
      }

      // klik langsung pada menu "Foto Udara dan Lidar": pindah tampilkan kontennya, tanpa scroll
      $lidarToggle.on('click', function (e) {
        e.preventDefault();
        activateDropdownTab($lidarToggle, '#lidar');
      });
      $('.foto-lidar-link').on('click', function (e) {
        e.preventDefault();
        gotoDropdownSection($lidarToggle, '#lidar', $(this).attr('href'));
      });

      // klik langsung pada menu "Peta Topografi": pindah tampilkan kontennya, tanpa scroll
      $topografiToggle.on('click', function (e) {
        e.preventDefault();
        activateDropdownTab($topografiToggle, '#petatopografi');
      });
      $('.peta-topografi-link').on('click', function (e) {
        e.preventDefault();
        gotoDropdownSection($topografiToggle, '#petatopografi', $(this).attr('href'));
      });

      // saat tab biasa dipilih, lepaskan status active dari kedua dropdown
      $('#myTab a[data-toggle="tab"]').on('click', function () {
        $allDropdownToggles.removeClass('active');
      });
    });
    </script>

  </body>
</html>