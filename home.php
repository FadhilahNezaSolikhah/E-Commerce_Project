<?php require_once "dashboard/dbkoneksi.php" ?>
<?php
    $sql = "SELECT * FROM produk";
    $rs = $dbh->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Karya Pena Dela</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="images/LOGO.png" type="image/x-icon">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-black">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+62 81283178551</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">nurnaifah331@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <a href="./dashboard/login.html" class="text">Login</a>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="home.php">KARYA PENA DELA</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          	<li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
	          	<li class="nav-item active"><a href="form_pesanan.php" class="nav-link">Pesanan</a></li>
			
	        </ul>
	      </div>
	    </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section id="home-section" class="hero"  >
		  <div class="home-slider owl-carousel" >
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0" style="background-image: url('images/bg.jpg'); background-size:cover; width:100%; height:750px; background-repeat: no-repeat" >
	          <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<div class="horizontal">
				            <h1 class="mb-4 mt-3 text-light">Selamat Datang</h1>
				            <p class="mb-4 text-light">di Toko Karya Pena Dela </p>
				            
				            <p><a href="form_pesanan.php" class="btn-custom">Pesan Sekarang!</a></p>
				          </div>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-bag"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Bebas Biaya Kirim</h3>
                <p>"Belanja sepuasnya tanpa khawatir biaya kirim, karena kami memberikan gratis pengiriman!/p>
              </div>
            </div>      
          </div>
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Pelayanan Cepat</h3>
                <p>Kami selalu siap memberikan pelayanan cepat dan ramah untuk memenuhi kebutuhanmu!</p>
              </div>
            </div>    
          </div>
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-payment-security"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Pembayaran Aman</h3>
                <p>Jangan khawatir dengan pembayaranmu, karena kami menjaga privasi dan keamananmu dengan serius!</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

    <section class="ftco-section bg-light">
    	<div class="container">
			<div class="row">
          		<div class="col-md-12 heading-section text-center ftco-animate">
					<h2 class="mb-4">Produk Alat Tulis</h2>
					<p>Kami menjual berbagai macam produk alat tulis seperti pulpen, buku tulis dan sebagainya</p>
          		</div>
					<?php
				foreach ($rs as $row)
				{ ?>
    			<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
    				<div class="product d-flex flex-column">
    					<a href="#" class="img-prod"><img class="img-fluid" src="<?=$row['foto']?>" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3">
    						<h3><a href="detail_produk.php?id=<?=$row['id']?>"><?=$row['nama']?></a></h3>
    						<div class="pricing">
	    						<p class="price"><span><?="Rp " . number_format($row ['harga'], 2, ',', '.');?></span></p>
	    					</div>
	    					<p class="bottom-area d-flex px-3">
    							<a href="form_pesanan.php" class="add-to-cart text-center py-2 mr-1"><span>Tambah Ke Keranjang <i class="ion-ios-add ml-1"></i></span></a>
    							<a href="form_pesanan.php" class="buy-now text-center py-2">Beli Sekarang<span><i class="ion-ios-cart ml-1"></i></span></a>
    						</p>
    					</div>
						<a class="btn btn-primary" href="detail_produk.php?id=<?=$row['id']?>">Lihat Detail</a>
    				</div>
    			</div>
				<?php } ?>
    		</div>
			
    	</div>
    </section>
<br><br>


    <footer class="ftco-footer ftco-section">
		<div class="container">
			<div class="row">
				<div class="mouse">
						  <a href="#" class="mouse-icon">
							  <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						  </a>
					  </div>
			</div>
		  <div class="row mb-5">
			<div class="col-md">
			  <div class="ftco-footer-widget mb-4">
				<h2 class="ftco-heading-2">Karya Pena Dela</h2>
				<p>Membuat catatanmu lebih rapi dan mudah dibaca dengan alat tulis terbaik!</p>
				<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
				  <li class="ftco-animate"><a href="https://github.com/FadhilahNezaSolikhah"><span class="icon-github"></span></a></li>
				  <li class="ftco-animate"><a href="https://www.linkedin.com/in/fadhilah-neza-497800251/"><span class="icon-linkedin"></span></a></li>
				  <li class="ftco-animate"><a href="https://www.instagram.com/fadhilahane1/"><span class="icon-instagram"></span></a></li>
				</ul>
			  </div>
			</div>
			<div class="col-md">
			  <div class="ftco-footer-widget mb-4 ml-md-5">
				<h2 class="ftco-heading-2">Menu</h2>
				<ul class="list-unstyled">
				  <li><a href="#" class="py-2 d-block">Shop</a></li>
				  <li><a href="about.html" class="py-2 d-block">About</a></li>
				  <li><a href="#" class="py-2 d-block">Journal</a></li>
				  <li><a href="contact.html" class="py-2 d-block">Contact Us</a></li>
				</ul>
			  </div>
			</div>
			<div class="col-md-4">
			   <div class="ftco-footer-widget mb-4">
				<h2 class="ftco-heading-2">Help</h2>
				<div class="d-flex">
					<ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
					  <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
					  <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
					  <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
					  <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
					</ul>
					<ul class="list-unstyled">
					  <li><a href="#" class="py-2 d-block">FAQs</a></li>
					  <li><a href="#" class="py-2 d-block">Contact</a></li>
					</ul>
				  </div>
			  </div>
			</div>
			<div class="col-md">
			  <div class="ftco-footer-widget mb-4">
				  <h2 class="ftco-heading-2">Have a Questions?</h2>
				  <div class="block-23 mb-3">
					<ul>
					  <li><span class="icon icon-map-marker"></span><span class="text">Perum. Grand Kahuripan Cluster Semeru, Cileungsi Bogor</span></li>
					  <li><a href="https://wa.me/6281283178551"><span class="icon icon-phone"></span><span class="text">+62 81283178551</span></a></li>
					  <li><a href="mailto:nurnaifah331@gmail.com"><span class="icon icon-envelope"></span><span class="text">nurnaifah331@gmail.com</span></a></li>
					</ul>
				  </div>
			  </div>
			</div>
		  </div>
		  <div class="row">
			<div class="col-md-12 text-center">
  
			  <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script><i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://www.instagram.com/fadhilahane1/" target="_blank">Fadhilah Neza</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  </p>
			</div>
		  </div>
		</div>
	  </footer>
	  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>