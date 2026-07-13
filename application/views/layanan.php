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
	        <ul class="nav nav-tabs" id="myTab" role="tablist">
	          <li class="nav-item">
	            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#lidar" role="tab" aria-controls="home" aria-selected="true">Foto Udara dan Lidar</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#survey" role="tab" aria-controls="profile" aria-selected="false">Survey</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tematik" role="tab" aria-controls="profile" aria-selected="false">Tematik</a>
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
	            <p><b>Data Lidar</b></p>
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
				            
				          </ol>
				          <div class="carousel-inner" role="listbox">
				            <!-- Slide One - Set the background image for this slide in the line below -->
				            <div class="carousel-item active" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/lidar/7.jpeg')">
				              <div class="carousel-caption d-none d-md-block">
				                <!-- <h2 class="display-4">First Slide</h2> -->
				                <!-- <p class="lead">This is a description for the first slide.</p> -->
				              </div>
				            </div>
				            <!-- Slide Two - Set the background image for this slide in the line below -->
				            <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/lidar/8.jpeg')">
				              <div class="carousel-caption d-none d-md-block">
				                <!-- <h2 class="display-4">Second Slide</h2>
				                <p class="lead">This is a description for the second slide.</p> -->
				              </div>
				            </div>
				            <!-- Slide Three - Set the background image for this slide in the line below -->
				            <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/lidar/9.jpeg')">
				              <div class="carousel-caption d-none d-md-block">
				                <!-- <h2 class="display-4">Third Slide</h2>
				                <p class="lead">This is a description for the third slide.</p> -->
				              </div>
				            </div>
				            <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/lidar/10.jpeg')">
				              <div class="carousel-caption d-none d-md-block">
				                <!-- <h2 class="display-4">Third Slide</h2>
				                <p class="lead">This is a description for the third slide.</p> -->
				              </div>
				            </div>
				            <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/lidar/11.jpeg')">
				              <div class="carousel-caption d-none d-md-block">
				                <!-- <h2 class="display-4">Third Slide</h2>
				                <p class="lead">This is a description for the third slide.</p> -->
				              </div>
				            </div>
				            <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/lidar/12.jpeg')">
				              <div class="carousel-caption d-none d-md-block">
				                <!-- <h2 class="display-4">Third Slide</h2>
				                <p class="lead">This is a description for the third slide.</p> -->
				              </div>
				            </div>
				            <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/lidar/13.jpeg')">
				              <div class="carousel-caption d-none d-md-block">
				                <!-- <h2 class="display-4">Third Slide</h2>
				                <p class="lead">This is a description for the third slide.</p> -->
				              </div>
				            </div>
				            <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/lidar/14.jpeg')">
				              <div class="carousel-caption d-none d-md-block">
				                <!-- <h2 class="display-4">Third Slide</h2>
				                <p class="lead">This is a description for the third slide.</p> -->
				              </div>
				            </div>
				            <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/img/layanan/lidar/15.jpeg')">
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
	            <p><b>Wahana Survei Udara</b></p>
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
	            <p><b>Peralatan LiDAR</b></p>
	            <div class="row mb-5">
	              <div class="col-md-6 mb-4">
	                <div class="p-3 border rounded h-100">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image10.png" alt="Optech Galaxy T1000" class="img-fluid rounded mb-3" style="max-height:200px; object-fit:contain; width:100%;">
	                  <h5 class="text-uppercase heading mb-3">Optech Galaxy T1000</h5>
	                  <p class="text-muted small">High-Efficiency Airborne LiDAR System</p>
	                  <p>Desain ringkas dan fleksibel, dapat dipasang pada berbagai jenis pesawat berawak termasuk Cessna 172P.</p>
	                </div>
	              </div>
	              <div class="col-md-6 mb-4">
	                <div class="p-3 border rounded h-100">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image11.png" alt="Optech Orion H300" class="img-fluid rounded mb-3" style="max-height:200px; object-fit:contain; width:100%;">
	                  <h5 class="text-uppercase heading mb-3">Optech Orion H300</h5>
	                  <p class="text-muted small">High-Accuracy Airborne LiDAR System</p>
	                  <p>Kombinasi Cessna 172P + Optech Galaxy T1000 atau Orion H300 memungkinkan pemetaan dari skala luas hingga super detail dengan biaya lebih terjangkau.</p>
	                </div>
	              </div>
	            </div>

	            <!-- KAMERA UDARA -->
	            <hr class="my-4">
	            <p><b>Kamera Udara</b></p>
	            <div class="row mb-5">
	              <div class="col-md-6 mb-4">
	                <div class="p-3 border rounded h-100">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image19.png" alt="Phase One iXU-RS1000" class="img-fluid rounded mb-3" style="max-height:200px; object-fit:contain; width:100%;">
	                  <h5 class="text-uppercase heading mb-3">Phase One iXU-RS1000</h5>
	                  <p class="text-muted small">Metric Aerial Kamera</p>
	                  <p>Kamera metrik profesional beresolusi 100 MP untuk citra udara dengan detail dan akurasi tinggi.</p>
	                </div>
	              </div>
	              <div class="col-md-6 mb-4">
	                <div class="p-3 border rounded h-100">
	                  <img src="<?php echo base_url(); ?>assets/img/layanan/foto-udara/image18.png" alt="Hasselblad A6D 100C" class="img-fluid rounded mb-3" style="max-height:200px; object-fit:contain; width:100%;">
	                  <h5 class="text-uppercase heading mb-3">Hasselblad A6D 100C RGB/NIR</h5>
	                  <p>Sensor 100 MP RGB dan Near Infrared (NIR) untuk pemetaan dasar, infrastruktur, analisis vegetasi, dan pengelolaan sumber daya alam.</p>
	                </div>
	              </div>
	            </div>

	            <!-- PRODUK -->
	            <hr class="my-4">
	            <p><b>Produk</b></p>
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
	            <p><b>Analisis</b></p>
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
	          <li class="d-flex"><span class="mr-3"><i class="fa fa-envelope-o" aria-hidden="true"></i></span><span class="text-black"> marketing@waindo.co.id </span></li>
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
    

  </body>
</html>