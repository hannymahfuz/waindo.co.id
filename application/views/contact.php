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
	    color: #00ff03;
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
	              <li class="">
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
	              
	              <li class="active">
	                <a class="nav-link" href="<?php echo base_url()."contact";?>">Hubungi Kami</a>
	              </li>
				  <li class="">
    				<a class="nav-link nav-bar" href="https://forms.gle/oeiJcw76F1M77fJA8" download>Download</a>
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
	    <div class="row mb-5">
	      <div class="col-md-6 order-lg-3 mb-5">
	        <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.883109557217!2d106.82791254902115!3d-6.279094963186734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f2159d15deb5%3A0x9f93bdef44698226!2sWaindo+Specterra+Indonesia.+PT!5e0!3m2!1sen!2sid!4v1497328108388" allowfullscreen="allowfullscreen" width="550" height="300" frameborder="0"></iframe>
	      </div>


	        <div class="col-md-6 order-lg-3 mb-5">
	            <strong>Contact Us</strong>
	            <table class="table">
	                 <tbody>
	                <tr class="alamat">
	                  <td>
	                  	<i class="fa fa-home"></i>
	                  </td>
	                  <td> 
	                  		Kompleks Perkantoran Pejaten Raya #7-8
	                      <br>
	                       Jl. Pejaten Raya No.2 Jakarta Selatan 12510

	                  </td>
	                </tr>
	                <tr class="contact">
	                  <td><i class="fa fa-phone"></i></td>
	                      <td>+62 21 7986405
	                      </td>
	                </tr>
	                <tr class="contact">
	                  <td><i class="fa fa-fax"></i></td>
	                      <td>021 7995539
	                     </td>
	                </tr>
	                <tr class="contact">
	                  <td><i class="fa fa-envelope"></i></td>
	                  <td>marketing@waindo.co.id</td>
	                  </tr>
	                </tbody>
	            </table>
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
	          <!--<li class="d-flex"><span class="mr-3"><i class="fa fa-whatsapp" aria-hidden="true"></i></span><span class="text-black">+62 21 7986405</span></li>-->
	          <li class="d-flex"><span class="mr-3"><i class="fa fa-envelope-o" aria-hidden="true"></i></span><span class="text-black"> marketing@waindo.co.id </span></li>
	        </ul>
	      </div>
	      <div class="col-md-4">
	          <a href="https://wa.wizard.id/c79710" target="_blank"><img src="https://wa.widget.web.id/assets/img/tombol-wa.png"></a>
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
    
//     <script type="text/javascript">
// 		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
// 		(function(){
// 		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
// 		s1.async=true;
// 		s1.src='https://embed.tawk.to/5f1a59dda45e787d128c06f2/default';
// 		s1.charset='UTF-8';
// 		s1.setAttribute('crossorigin','*');
// 		s0.parentNode.insertBefore(s1,s0);
// 		})();
// 	</script>

  </body>
</html>