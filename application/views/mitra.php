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

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/flaticon/font/flaticon.css ?>">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/colorbox.css ?>">

    <!-- Sektor-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/sektor.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <style type="text/css">
	.active, .accordion:hover {
	    background-color: #1e4c7c;
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

	/* Kartu Mitra Kerja: samakan tinggi kotak dan posisi teks agar rapi dalam satu baris, ukuran logo tetap seperti semula */
	.thumbnail {
	    height: 100%;
	    min-height: 220px;
	    display: flex;
	    flex-direction: column;
	    padding: 25px 15px;
	}
	.thumbnail a {
	    display: flex;
	    flex-direction: column;
	    align-items: center;
	    height: 100%;
	    width: 100%;
	    text-decoration: none;
	}
	.thumbnail img {
	    margin-top: auto;
	    margin-bottom: auto;
	}
	.thumbnail .caption {
	    width: 100%;
	}
    </style>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mobile.css">
  </head>
  <body>
	 <header role="banner">
		  <nav class="navbar navbar-expand-lg navbar-light">
		    <div class="container-fluid nav-container">
		      <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>assets/img/logo1.png" alt="Image" class="logo"></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		      </button>

		      <div class="collapse navbar-collapse" id="navbarsExample05">
		        <ul class="navbar-nav mr-auto">
	              <li class="">
	                <a class="nav-link nav-bar" href="<?php echo base_url();?>">Beranda</a>
	              </li>
	              <li class="">
	                <a class="nav-link nav-bar" href="<?php echo base_url()."about";?>">Tentang Kami</a>
	              </li>
	              <li class="">
	                <a class="nav-link nav-bar" href="<?php echo base_url()."produk";?>">Produk</a>
	              </li>
	              <li class="">
	                <a class="nav-link nav-bar" href="<?php echo base_url()."layanan";?>">Layanan</a>
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
	              <li class="active">
	                <a class="nav-link nav-bar" href="<?php echo base_url()."mitra";?>">Mitra Kerja</a>
	              </li>
	              <li class="">
	                <a class="nav-link nav-bar" href="<?php echo base_url()."berita";?>">Berita &amp; Informasi</a>
	              </li>
	              
	              <li class="">
	                <a class="nav-link nav-bar" href="<?php echo base_url()."contact";?>">Hubungi Kami</a>
	              </li>

              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="<?php echo base_url(); ?>assets/img/in.png" class="flag flag-id" alt="Indonesia" style="width: 25px;"><span> Indonesia</span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown04" style="width: 500;">
                  <a class="dropdown-item" href="#"><img src="<?php echo base_url(); ?>assets/img/uk.png" class="flag flag-gb" alt="English" style="width:25px;"> English</a>
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
	        <h2 class="text-uppercase heading border-bottom mb-4 nav-bar">Mitra Kerja</h2>
	      </div>
	    </div>
	    <div class="row mb-5 element-animate">
	      <div class="col-md-12 order-lg-3 mb-5">
	        <ul class="nav nav-tabs" id="myTab" role="tablist">
	          <li class="nav-item">
	            <a class="nav-link active nav-bar" id="home-tab" data-toggle="tab" href="#lidar" role="tab" aria-controls="home" aria-selected="true">Pemerintahan</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link nav-bar" id="profile-tab" data-toggle="tab" href="#survey" role="tab" aria-controls="profile" aria-selected="false">Non Pemerintahan</a>
	          </li>
	        </ul>
	        <div class="tab-content" id="myTabContent">
	          <div class="tab-pane fade show active" id="lidar" role="tabpanel" aria-labelledby="home-tab" style="background: #fff;">
	            <div class="list-group-item" style="margin-top: 10px;">
		            <div class="row mb-5">
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/atr.png" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black;text-align: center;">Kementerian ATR/BPN</p>
		                    </div>
		                  </a>
		                </div>
		              </div>
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/government/BIG.png" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black;text-align: center;">BIG</p>
		                    </div>
		                  </a>
		                </div>
		              </div>
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/government/BMKG.png" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black;text-align: center;">BMKG</p>
		                    </div>
		                  </a>
		                </div>
		              </div>
		              <!--div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/government/BIN.png" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black;text-align: center;">BIN</p>
		                    </div>
		                  </a>
		                </div>
		              </div--> 
		            </div> 
		            <div class="row mb-5">
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/government/klhk.png" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black;text-align: center;">KLHK</p>
		                    </div>
		                  </a>
		                </div>
		              </div>
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/government/kemenkes.png" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black;text-align: center;">Kementerian Kesehatan</p>
		                    </div>
		                  </a>
		                </div>
		              </div>
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/government/PU.png" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black;text-align: center;">PU</p>
		                    </div>
		                  </a>
		                </div>
		              </div>
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/government/Kementerian Pertanian.png" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black; text-align: center;">Kementerian Pertanian</p>
		                    </div>
		                  </a>
		                </div>
		              </div> 
		            </div> 
		            <div class="row mb-5">
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/government/kemenhub.png" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black; text-align: center;">Kementerian Perhubungan</p>
		                    </div>
		                  </a>
		                </div>
		              </div>
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/government/Depnakertrans.png" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black; text-align: center;">Dept. Tenaga Kerja dan Transmigrasi</p>
		                    </div>
		                  </a>
		                </div>
		              </div>
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/government/perhutani.png" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black;text-align: center;">Perhutani</p>
		                    </div>
		                  </a>
		                </div>
		              </div>
		              <!--div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/government/TNI_AU.png" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black;text-align: center;">TNI Angkatan Udara</p>
		                    </div>
		                  </a>
		                </div>
		              </div--> 
		            </div> 
		            <div class="row mb-5">
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/n_goverment/lapan.png" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black; text-align: center;">LAPAN</p>
		                    </div>
		                  </a>
		                </div>
		              </div>
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/government/brg.jpeg" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black; text-align: center;">Badan Restorasi Gambut</p>
		                    </div>
		                  </a>
		                </div>
		              </div>
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/government/bnpb.jpeg" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black; text-align: center;">BNPB</p>
		                    </div>
		                  </a>
		                </div>
		              </div>
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/government/arkeolog.jpeg" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black; text-align: center;">Arkeolog</p>
		                    </div>
		                  </a>
		                </div>
		              </div>
		            </div> 
		             
	            </div>  
	          </div>
	          <div class="tab-pane fade" id="survey" role="tabpanel" aria-labelledby="profile-tab" style="background: #fff;">
	            <div class="list-group-item" style="margin-top: 10px;">
		            <div class="row mb-5">
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/n_goverment/chevron.jpg" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black; text-align: center;">Chevron</p>
		                    </div>
		                  </a>
		                </div>
		              </div>
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/n_goverment/pgnsaka.png" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black; text-align: center;">PGN SAKA</p>
		                    </div>
		                  </a>
		                </div>
		              </div>
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/n_goverment/BNP2TKI.png" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black; text-align: center;">BNP2TKI</p>
		                    </div>
		                  </a>
		                </div>
		              </div>
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/n_goverment/PLN.jpg" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black; text-align: center;">PLN</p>
		                    </div>
		                  </a>
		                </div>
		              </div> 
		            </div> 

		            <div class="row mb-5">
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/n_goverment/PALYJA.png" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black; text-align: center;">PALYJA</p>
		                    </div>
		                  </a>
		                </div>
		              </div>
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/n_goverment/phm.png" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black; text-align: center;">Pertamina Hulu Mahakam</p>
		                    </div>
		                  </a>
		                </div>
		              </div>
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/n_goverment/sinarmas.jpg" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black; text-align: center;">Sinarmas</p>
		                    </div>
		                  </a>
		                </div>
		              </div>
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/n_goverment/arutmin.jpg" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black; text-align: center;">Arutmin</p>
		                    </div>
		                  </a>
		                </div>
		              </div> 
		            </div> 
		            <div class="row mb-5">
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/n_goverment/Green Eagle Group.png" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black; text-align: center;">Green Eagle Group</p>
		                    </div>
		                  </a>
		                </div>
		              </div>
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/n_goverment/bukitasam.png" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black; text-align: center;">Bukit Asam</p>
		                    </div>
		                  </a>
		                </div>
		              </div>
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/n_goverment/KPK.png" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black; text-align: center;">KPK</p>
		                    </div>
		                  </a>
		                </div>
		              </div>
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/n_goverment/indrakarya.jpeg" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black; text-align: center;">Indra Karya</p>
		                    </div>
		                  </a>
		                </div>
		              </div>
		               
		            </div>
		            <div class="row mb-5">
		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/n_goverment/giz.jpeg" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black; text-align: center;">GIZ</p>
		                    </div>
		                  </a>
		                </div>
		              </div>

		              <div class="col-md-3 order-lg-3 mb-5">
		                <div class="thumbnail">
		                  <a href="/w3images/lights.jpg">
		                    <img src="<?php echo base_url(); ?>assets/img/mitrakerja/gtrc/n_goverment/unesco.jpeg" alt="Lights" style="width:50%">
		                    <div class="caption">
		                      <p style="color: black; text-align: center;">UNESCO</p>
		                    </div>
		                  </a>
		                </div>
		              </div>

		               
		            </div>
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
    <script src="<?php echo base_url(); ?>assets/js/isotope.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/js/custom.js ?>"></script> -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    
    

  </body>
</html>