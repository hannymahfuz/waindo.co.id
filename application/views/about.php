<!doctype html>
<html lang="en">
  <head>
    <title>PT Waindo SpecTerra</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css ">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css ">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css ">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css ">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker.css ">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.timepicker.css ">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/ionicons/css/ionicons.min.css ">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/fontawesome/css/font-awesome.min.css ">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/flaticon/font/flaticon.css ">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css ">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css ">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css ">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/colorbox.css ">

    <!-- Sektor-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/sektor.css ">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <style type="text/css">
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
	.active, .accordion:hover {
	    background-color: #1e4c7c;
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
	              <li class="active">
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
	              <li class="">
	                <a class="nav-link nav-bar" href="<?php echo base_url()."mitra";?>">Mitra Kerja</a>
	              </li>
	              <li class="">
	                <a class="nav-link nav-bar" href="<?php echo base_url()."berita";?>">Berita &amp; Informasi</a>
	              </li>
	              
	              <li class="">
	                <a class="nav-link nav-bar" href="<?php echo base_url()."contact";?>">Hubungi Kami</a>
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
	<section class="section" style="margin-top: 40px;">
	  <div class="container">
	     <div class="row justify-content-center mb-5 element-animate">
	        <div class="col-md-12">
	       <!--  <h2 class="text-uppercase heading border-bottom mb-4" style="position: absolute;margin-top: -44px;">About Us</h2> -->
	        </div>
	      </div>
	      <div class="container">
	        <div class="row mb-5">
	          <div class="col-md-12 text-center">
	            <img src="<?php echo base_url(); ?>assets/img/logo1.png" alt="Image placeholder" style="width: 450px;margin-left: -20px;
	            margin-top: -40px;margin-bottom: 20px;">
	            <p class="mb-3 nav-bar" style="text-align: justify;"><h3 class="text-uppercase heading border-bottom mb-4 element-animate">Tentang Kami</h3></p>
	            <p class="mb-3 element-animate nav-bar" style="text-align: justify;">PT Waindo SpecTerra merupakan <b>perusahaan nasional</b> yang bergerak di bidang jasa konsultansi dan solusi pengelolaan sumber daya alam darat maupun laut dengan dukungan teknologi digital dan geospasial. Didirikan pada <b>tahun 1996</b>, PT Waindo SpecTerra <b>berkomitmen untuk memberikan layanan berkualitas tinggi</b>.</p>
	            <p class="mb-3 element-animate nav-bar" style="text-align: justify;" >Didukung oleh lebih dari 120? tenaga ahli dari berbagai disiplin ilmu, PT Waindo SpecTerra memiliki sumber daya manusia yang berpengalaman dan <b>didukung oleh berbagai sertifikasi profesional di bidang pemetaan dan geospasial</b>. Kompetensi tersebut menjadikan tim kami mampu melakukan analisis dan pengembangan solusi sesuai kebutuhan pengguna.</p>
	            <p class="mb-3 element-animate nav-bar" style="text-align: justify;">Dalam mendukung kualitas layanan, PT Waindo SpecTerra menjalin kerja sama strategis dengan <b>Asia Air Survey Co., Ltd. (Jepang)</b> dan <b>Mobiltech Co., Ltd. (Korea Selatan)</b>, serta merupakan <b>Authorized Partner Esri</b>, pengembang platform GIS terdepan di dunia. Melalui kolaborasi tersebut, PT Waindo SpecTerra senantiasa menghadirkan solusi geospasial yang inovatif serta menjamin kualitas, akurasi, dan keandalan hasil pada setiap proyek yang dikerjakan.</p>
	          </div>
	        </div>
	        <div class="row mb-5">
	          <div class="col-md-12 text-center">
	            <p class="mb-3" style="text-align: justify;"><h3 class="text-uppercase heading border-bottom mb-4 element-animate nav-bar">Struktur Organisasi</h3></p>
	            <!-- <p><iframe src="https://docs.google.com/gview?url=http://dipersip.riau.go.id/wp-content/uploads/2017/09/STRUKTUR-ORGANISASI-DINAS-PERPUSTAKAAN-DAN-KEARSIPAN.pdf&#038;embedded=true" frameborder="0" style="width: 100%; height: 500px;"></iframe></p> -->
	            <p>
	              <div class="element-animate" style="width:100%; height:700px;" id="orgchart"/>
	            </p>

	          </div>
	        </div>
	        <div class="row mb-5">
	          <div class="col-md-12 text-center">
	            <h2 class="text-uppercase heading border-bottom mb-4 element-animate">The Teams</h2>
	        </div>

	        <div class="row mb-5">

	          <div class="col-lg-4 col-md-6 col-12 mb-3 element-animate">
	            <div class="media d-block media-feature text-center">
	              <!-- <span class="icon"> --><img style="width: 100px;height: 100px;border-radius: 50%;" src="<?php echo base_url(); ?>assets/img/struktur/Gunawan Jaya.jpg"><!-- </span> -->
	             
	              <div class="media-body">
	                 <br>
	                <h5>Gunawan Jaya</h5>
	                <p><h6>Direktur Utama</h6></p>
	                    <button type="button" data-toggle="modal" data-target="#gunawan" class="btn btn-outline-primary btn-sm " style="color: black;">
						  Lihat Profil
						</button>
	                </p>
	              </div>
	            </div>
	          </div>

	          <!-- Andreas Surajdi disembunyikan dari tampilan atas permintaan; foto & deskripsi tetap ada di assets/modal, tidak dihapus.
	          <div class="col-lg-4 col-md-6 col-12 mb-3 element-animate">
	            <div class="media d-block media-feature text-center">
	              <img style="width: 100px;height: 100px;border-radius: 50%;" src="<?php echo base_url(); ?>assets/img/struktur/p_radji.jpeg">

	              <div class="media-body">
	                <br>
	                <h5>Andreas Surajdi</h5>
	                <p><h6>Fotogrametri Specialist</h6></p>

	                    <button type="button" data-toggle="modal" data-target="#radji" class="btn btn-outline-primary btn-sm " style="color: black;">
						  Lihat Profil
						</button>
	                </p>
	              </div>
	            </div>
	          </div>
	          -->

	          <div class="col-lg-4 col-md-6 col-12 mb-3 element-animate">
	            <div class="media d-block media-feature text-center">
	              <!-- <span class="icon"> --><img style="width: 100px;height: 100px;border-radius: 50%;" src="<?php echo base_url(); ?>assets/img/struktur/hanny.jpeg"><!-- </span> -->
	             
	              <div class="media-body">
	                 <br>
	                <h5>Mahfuz Djamaluddin</h5>
	                <p><h6>Software Development Specialist</h6></p>
	                    <button type="button" data-toggle="modal" data-target="#hanny" class="btn btn-outline-primary btn-sm " style="color: black;">
						  Lihat Profil
						</button>
	                </p>
	              </div>
	            </div>
	          </div>

	           <div class="col-lg-4 col-md-6 col-12 mb-3 element-animate">
	            <div class="media d-block media-feature text-center">
	              <!-- <span class="icon"> --><img style="width: 100px;height: 100px;border-radius: 50%;" src="<?php echo base_url(); ?>assets/img/struktur/faik.jpeg"><!-- </span> -->
	             
	              <div class="media-body">
	                 <br>
	                <h5>Faik Sofyan</h5>
	                <p><h6>GIS Product Specialist</h6></p>
	                    <button type="button" data-toggle="modal" data-target="#faik" class="btn btn-outline-primary btn-sm " style="color: black;">
						  Lihat Profil
						</button>
	                </p>
	              </div>
	            </div>
	          </div>

	         
	          
	          <div class="col-lg-4 col-md-6 col-12 mb-3 element-animate">
	            <div class="media d-block media-feature text-center">
	              <!-- <span class="icon"> --><img style="width: 100px;height: 100px;border-radius: 50%;" src="<?php echo base_url(); ?>assets/img/struktur/yus.jpg"><!-- </span> -->
	             
	              <div class="media-body">
	                 <br>
	                <h5>R Yustiono</h5>
	                <p><h6>GIS Specialist</h6></p>
	                    <button type="button" data-toggle="modal" data-target="#yust" class="btn btn-outline-primary btn-sm " style="color: black;">
						  Lihat Profil
						</button>
	                </p>
	              </div>
	            </div>
	          </div>
	          
	          <!-- Luwin Eska Darwini disembunyikan dari tampilan atas permintaan; foto & deskripsi tetap ada di assets/modal, tidak dihapus.
	          <div class="col-lg-4 col-md-6 col-12 mb-3 element-animate">
	            <div class="media d-block media-feature text-center">
	              <img style="width: 100px;height: 100px;border-radius: 50%;" src="<?php echo base_url(); ?>assets/img/struktur/luwin.jpeg">

	              <div class="media-body">
	                 <br>
	                <h5>Luwin Eska Darwini</h5>
	                <p><h6>Thematic Specialist</h6></p>
	                <button type="button" data-toggle="modal" data-target="#luwin" class="btn btn-outline-primary btn-sm " style="color: black;">
						  Lihat Profil
						</button></p>
	              </div>
	            </div>
	          </div>
	          -->
	          
	          <div class="col-lg-4 col-md-6 col-12 mb-3 element-animate">
	            <div class="media d-block media-feature text-center">
	              <!-- <span class="icon"> --><img style="width: 100px;height: 100px;border-radius: 50%;" src="<?php echo base_url(); ?>assets/img/struktur/rian.jpeg"><!-- </span> -->
	             
	              <div class="media-body">
	                 <br>
	                <h5>Perdana Rian Juniarta</h5>
	                <p><h6>Fotogrametri Specialist</h6></p>
	                    <button type="button" data-toggle="modal" data-target="#rian" class="btn btn-outline-primary btn-sm " style="color: black;">
						  Lihat Profil
						</button>
	                </p>
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

    <!-- modal -->
    <div class="modal fade" id="lissarr" tabindex="-1" role="dialog" aria-labelledby="lissa" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">PROFIL</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <!--<div style="margin-left: 230px;">-->
	        <!--	<img width="80" height="80" src="<?php echo base_url(); ?>assets/img/struktur/lissa.jpg">-->
	        <!--</div>-->
	        <div style="margin-top: 20px;">
	        	Lissa Rukmi Utari lahir di Banyuwangi pada tanggal 17 Oktober 1969. Lissa Rukmi Utari adalah Direktur Utama PT Waindo SpecTerra, merupakan lulusan dari S1 program studi perencanaan pengembangan wilayah, fakultas Geografi, Universitas Gadjah Mada pada tahun 1994 dan S2 di bidang Sistem Informasi Geografi, Universitas Caen Basse Normandie Perancis pada tahun 2001. Aktif diberbagai organisasi profesi seperti : Asosiasi Perusahaan Survei Pemetaan dan Informasi Geospasial (APSPIG), Ikatan Surveyor Indonesia (ISI), Masyarakat Penginderaan Jauh (MAPIN) dan Ikatan Geografi Indonesia (IGI), serta memiliki sertifikat keahlian bidang SIG dan penginderaan jauh dari Ikatan Surveyor Indonesia (ISI) dan berpengalaman pelatihan dan workshop baik di dalam maupun di luar negeri. Bergabung dengan perusahaan sejak Waindo SpecTerra berdiri dan telah memiliki pengalaman selama 23 tahun dalam pengolahan data & citra, analisis data dan sistem informasi geografis. Selain bidang SIG & Penginderaan Jauh, keahlian lain yang dimiliki adalah geodesi, tata ruang wilayah, dan lingkungan.
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        
	      </div>
	    </div>
	  </div>
	
	</div>
	<div class="modal fade" id="gh" tabindex="-1" role="dialog" aria-labelledby="lissa" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">PROFIL</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <!--<div style="margin-left: 230px;">-->
	        <!--	<img width="80" height="80" src="<?php echo base_url(); ?>assets/img/struktur/GH Anto.jpg">-->
	        <!--</div>-->
	        <div style="margin-top: 20px;">
	        	G.Haryuatmanto Lahir di Yogyakarta tanggal 9 Mei 1964 yang juga merupakan Lulusan Jurusan Teknik Geodesi Universitas Gadjah Mada, telah banyak pengalaman selama 23 tahun di bidang pemetaan Sejak Tahun 1992 dan memiliki sertifikat keahlian sebagai Ahli Geodesi-Utama dari Lembaga Pengembangan Jasa Konstruksi (LPJK). Juga aktif di berbagai organisasi profesi seperti: Ikatan Surveyor Indonesia (ISI), Asosiasi Kartografi Indonesia (AKI) dan KATDESI. Selain bidang pemetaan dan geodesi, keahlian lain yang dimiliki adalah fotogrammetry (Foto Udara, LIDAR dan UAV), Aplikasi Geospasial dan Geodatabase. Pengalaman dan keahlian profesionalnya menempatkan saat ini sebagai Direktur Teknik PT Waindo SpecTerra.
	        	
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        
	      </div>
	    </div>
	  </div>
	
	
	</div>
	<div class="modal fade" id="radji" tabindex="-1" role="dialog" aria-labelledby="lissa" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">PROFIL</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <!--<div style="margin-left: 230px;">-->
	        <!--	<img width="80" height="80" src="<?php echo base_url(); ?>assets/img/struktur/Andreas Suradji_merah.jpg">-->
	        <!--</div>-->
	        <div style="margin-top: 20px;">
	        	Andreas Suradji lahir Semarang, 3 Maret 1951 yang juga merupakan Direktur Research & Development PT Waindo SpecTerra, Lulus pada Tahun 1980 dari S1 Teknik Geodesi, Universitas Gadjah Mada, memiliki pengalaman dan keahlian selama 37 tahun dalam bidang Geodesi, Geografi dan Fotogrammetry. Memiliki sertifikat keahlian Sebagai Ahli Utama Geodesi dari Lembaga Pengembangan Jasa Konstruksi (LPJK) dan terlibat dalam organisasi Ikatan Surveyor Indonesia (ISI) dan berpengalman dalam mengikuti pelatihan dan workshop baik didalam maupun di luar negeri. Selain aktivitas sebagai Direktur Research & Development juga teribat sebagai team leader dalam beberapa proyek, dengan spesialisasi pekerjaan di bidang Fotogrammetry (Foto Udara, LIDAR
& UAV), dengan keahlian dan pengalaman yang dimiliki membantu PT Waindo SpecTerra dalam pengembangan & inovasi baik secara teknologi maupun pengolahan data.
	        	
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        
	      </div>
	    </div>
	  </div>
	
	</div>
	<div class="modal fade" id="hanny" tabindex="-1" role="dialog" aria-labelledby="lissa" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">PROFIL</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <!--<div style="margin-left: 230px;">-->
	        <!--	<img width="80" height="80" src="<?php echo base_url(); ?>assets/img/struktur/hanny.jpeg">-->
	        <!--</div>-->
	        <div style="margin-top: 20px;">
	        	Pria yang akrab disapa Hanny ini Lahir di Jeddah, pada tanggal 25 Mei 1980. Ia meraih gelar sarjana Fakultas Teknik Informatika di  Universitas Bina Nusantara tahun 2003.
	        	<p>Karena banyak mengikuti berbagai kegiatan dan keahliannya tentang IT dan pengetahuan tentang banyak software dan dipercaya menjadi Team Leader dan menjabat sebagai Manager menjadikan PT Waindo SpecTerra dapat di percaya membangun aplikasi di pemerintahan dan menjadikannya sebagai Software Development Spesialist.
	        	
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        
	      </div>
	    </div>
	  </div>
	
	</div>
	<div class="modal fade" id="faik" tabindex="-1" role="dialog" aria-labelledby="lissa" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">PROFIL</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <!--<div style="margin-left: 230px;">-->
	        <!--	<img width="80" height="80" src="<?php echo base_url(); ?>assets/img/struktur/faik.jpeg">-->
	        <!--</div>-->
	        <div style="margin-top: 20px;">
	        	Faik terlahir di Kebumen tanggal  6 Agustus 1973, Meraih gelar Sarjana di fakultas Geografi  Universitas Gadjah Mada tahun 1999.
	        	<p>Pengalamannya sebagai GIS Product Spesialist menjadikannya sangat mengenal kondisi perkembangan software dan mempertahankan waindo sebagai patner ESRI.
	        	
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        
	      </div>
	    </div>
	  </div>
	
	</div>
	<div class="modal fade" id="gunawan" tabindex="-1" role="dialog" aria-labelledby="lissa" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">PROFIL</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <!--<div style="margin-left: 230px;">-->
	        <!--	<img width="80" height="80" src="<?php echo base_url(); ?>assets/img/struktur/Gunawan Jaya.jpg">-->
	        <!--</div>-->
	        <div style="margin-top: 20px;">
	        	Pria kelahiran Padang Bindu tanggal 12 Juli 1975 ini menempuh pendidikan sarjana di Fakultas teknik jurusan geodesi UGM tahun 2002.
	        	<p>Dan mengikuti banyak kegiatan dan sertifikasi ujian kompetensi sehingga menjadikannya sebagai Terestris Survey Spesialist menjadi dipercaya di kegiatan Pemetaan Kadastral Tanah Sistematik Lengkap di berbagai lokasi.
	        	
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        
	      </div>
	    </div>
	  </div>
	
	</div>
	<div class="modal fade" id="yust" tabindex="-1" role="dialog" aria-labelledby="lissa" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">PROFIL</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <!--<div style="margin-left: 230px;">-->
	        <!--	<img width="80" height="80" src="<?php echo base_url(); ?>assets/img/struktur/yus.jpg">-->
	        <!--</div>-->
	        <div style="margin-top: 20px;">
	        	Yust biasa panggilan akrabnya, adalah pria kelahiran Kebumen tanggal  11 Juli 1974, 
                Gelar Sarjana Teknik diperoleh dari  Jurusan Teknik Geodesi Fakultas Teknik, UGM, Pada  tahun 1998.
                Selama karirnya banyak pekerjaan yang di tangani Beliau berkaitan dengan keilmuan dan kemampuan yang dimiliki. Jabatan Struktural yang pernah beliau pegang antara lain:  Chief Survey (BSG Group), IT&GIS Manager (Ictindo MS), Manager Pemetaan Tematik (Waindo Group) dan Sejak Tahun 2018 di  PT Waindo SpecTerra Indonesia  saat ini menduduki posisi sebagai salah satu manager/koordinator. Kemampuannya telah disertifikasi dalam kompetensi keahlian di Bidang Sistem Informasi Geografis (SIG). Beberapa posisi baik sebagai Team Leader maupun Project Manager dan GIS Specialist, dan Teknis lainnya di beberapa kegiatan proyek baik  sektor Pemerintah, BUMN maupun Swasta menjadikan Beliau semakin berpengalaman dalam Kegiatan Pekerjaan Jasa Konsultansi. 
                  
                Untuk Sertifikasi Keahlian Beliau antara lain:
                MPM Certified (My Learn IT Indonesia, Brainbench.com (PMBOK)), sejak Agustus 2001.
                Ahli Utama GIS (LSP ISI) -  sejak tahun 2014.
                Ahli Utama Geodesi (SKA ISI), sejak tahun 2017.
                SKB/Surveyor Kadastral Berlisensi sejak 2017.
                
                Pengalaman Organisasi antara lain:
                BEM FT-UGM, Yogyakarta 1994-1995;
                Perwakilan Dewan IMGI dari Teknik Geodesi UGM,1995;
                KaSie Kerohanian Islam KMTG FT-UGM,1994-1995;
                Ketua Alumni SMANGB di UGM, Yogyakarta, 1995-1996.
                Ketua DKM Nururrahman K-PAS 15-RJB PanMas, DePoK. 2012-2015.
                
                Sebagai Sarjana Teknik, Beliau memiliki pengalaman di beberapa
                kegiatan pekerjaan/proyek antara lain:  BKT di Kementerian PU, GIS IKM Kementerian Perindustrian dan Perdagangan, e-Procurement Kementerian Komunikasi dan Informasi,  GIS Untuk Infomedia Nusantara, GIS MapInfo Siemens Indonesia, Mike 21-Etabs-etc for ITS, MapInfoMapX BacHealtCare, MapInfo MapExtreme GSS PT Astra International, MapInfo MapExtreme GIM PT Federal International Finance, Pembangunan e-Government Kabupaten Paser Kalimantan Timur, Pembangunan Aplikasi Gratifikasi dan Pengaduan Masyarakat KPK, LMDP/Land Registration Kementerian Koordinator Perencanaaan Pembangunan Nasional/BAPPENAS, Seismic Survey EMEPIL Jombang,GIS Data Conversion Total EPI-Balikpapan, RBI-25K BIG, RBI-5K  BIG, SKB BPN Sanggau, Pembangunan Aplikasi webGIS SIG-RA Ditjen Penataan Agraria Kementerian ATRBPN, GISDUKCAPIL ArcGIS Kementerian Dalam Negeri, Pembangunan Aplikasi Pentabit Kementerian ATRBPN, Pembuatan Aplikasi RTR Builder Ditjen Tata Ruang Kementerian ATRBPN.
	        	
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        
	      </div>
	    </div>
	  </div>
	
	</div>
	<div class="modal fade" id="luwin" tabindex="-1" role="dialog" aria-labelledby="lissa" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">PROFIL</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <!--<div style="margin-left: 230px;">-->
	        <!--	<img width="80" height="80" src="<?php echo base_url(); ?>assets/img/struktur/luwin.jpeg">-->
	        <!--</div>-->
	        <div style="margin-top: 20px;">
	        	Luwin kelahiran Bekasi tanggal 5 April 1978, selama menempuh pendidikan sarjana Fakultas Kehutanan di IPB tahun 2003 dan keahliannya sebagai team leader di berbagai.
	        	<p>Pekerjaan tematik membuat sebutan thematic  spesialist cocok untuk gambaran karirnya dan pernah mempunyai karya buku yaitu Pemetaan Karakteristik Perairan Dangkal Teluk Tomini. Jakarta. 2013
 dan Evaluasi Jaringan Jalan di Hutan Pendidikan Gunung Walat. Bogor. 2003
.
	        	
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        
	      </div>
	    </div>
	  </div>
	
	</div>
	<div class="modal fade" id="rian" tabindex="-1" role="dialog" aria-labelledby="lissa" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">PROFIL</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <!--<div style="margin-left: 230px;">-->
	        <!--	<img width="80" height="80" src="<?php echo base_url(); ?>assets/img/struktur/Rian.jpg">-->
	        <!--</div>-->
	        <div style="margin-top: 20px;">
	        	Rian dilahirkan di Samarinda tanggal 15 Juni 1987 dan menempuh pendidikan Sarjana Teknik Geodesi di Universitas Gadjah Mada tahun 2009.
	        	<p>Keahliannya dalam bidang survey dan pekerjaan Lidar sudah banyak yang dapat selesaikan dengan baik dan membuat karirnya di posisikan sebagai manager fotogrametri di waindo dan banyak yang menyebutnya sebagaiu Fotogrametri Spesialist. 
.
	        	
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        
	      </div>
	    </div>
	  </div>
	
	</div>
	<!-- modal -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/popper.min.js "></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js "></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js "></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.waypoints.min.js "></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js "></script>
    <script src="<?php echo base_url(); ?>assets/js/orgchart.js "></script>
    <script>
	var chart = new OrgChart(document.getElementById("orgchart"), {
	            mouseScrool: OrgChart.action.none,
	            scaleInitial: 0.7,
	            'zoom': true,
	            layout: OrgChart.tree,
	            // enableSearch: false,
	            // template: "base", 
	            nodeBinding: {
	                field_0: "Nama",
	                field_1: "Jabatan",
	                img_0: "img"
	            },
	            nodes: [
	                { id: 1, Nama: "Gunawan Jaya", Jabatan: "Direktur Utama", img: "<?php echo base_url(); ?>assets/img/struktur/Gunawan Jaya.jpg" },
	                { id: 2, pid: 1, Nama: "Iwan Satriawan", Jabatan: "Direktur Marketing", img: "<?php echo base_url(); ?>assets/img/struktur/iwanst.jpg" },
	                // Ir. Andreas Suradji disembunyikan dari struktur organisasi atas permintaan; data foto tetap ada di assets.
	                // { id: 3, pid: 1, Nama: "Ir. Andreas Suradji", Jabatan: "Direktur Riset & Pengembangan", img: "<?php echo base_url(); ?>assets/img/struktur/p_radji.jpeg" },
	                { id: 4, pid: 2, Nama: "Bussiness Development Division" },
	                { id: 5, pid: 2, Nama: "Finance Departement" },
	                { id: 6, pid: 2, Nama: "HR Departement" },
	                { id: 7, pid: 2, Nama: "Data and Software Division" },
	                { id: 8, pid: 2, Nama: "Thematic Division" },
	                { id: 9, pid: 2, Nama: "FotoGrametri Division" },
	                { id: 10, pid: 2, Nama: "IT Division" },
	                { id: 11, pid: 2, Nama: "Land Surveying Division" },
	                { id: 12, pid: 2, Nama: "Training Division" },
	                { id: 13, pid: 7, Nama: "Marketing" },
	                { id: 14, pid: 7, Nama: "Marketing Support" },
	                { id: 15, pid: 8, Nama: "Staff" },
	                { id: 16, pid: 9, Nama: "Staff" },
	                { id: 17, pid: 10, Nama: "Staff" },
	                { id: 18, pid: 11, Nama: "Staff" }

	            ]
	        });

	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	  acc[i].addEventListener("click", function() {
	    this.classList.toggle("active2");
	    var panel = this.nextElementSibling;
	    if (panel.style.maxHeight) {
	      panel.style.maxHeight = null;
	    } else {
	      panel.style.maxHeight = panel.scrollHeight + "px";
	    } 
	  });
	}
	</script>
    

  </body>
</html>