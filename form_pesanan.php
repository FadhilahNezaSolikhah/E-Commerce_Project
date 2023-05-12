<?php require_once "dashboard/dbkoneksi.php" ?>

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
								<a href="./template_dashboard_admin/login.html" class="text">Login</a>
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
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="home.php">Home</a></span> <span>Pesanan</span></p>
            <h1 class="mb-0 bread">Form Pemesanan</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10 ftco-animate">
						<form action="proses_pesanan.php" method="POST" class="billing-form">
							
	          	<div class="row align-items-end">
	          		<div class="col-md-12">
	                <div class="form-group">
	                	<label for="namapelanggan">Nama Lengkap</label>
	                  <input id="namapelanggan" name="namapelanggan" type="text" class="form-control" placeholder="masukan nama kamu">
	                </div>
	              </div>
	             
                
		            <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
	                	<label for="tanggal">Tanggal Pemesanan</label>
	                  <input id="tanggal" name="tanggal" type="date" class="form-control" placeholder="">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
	                	<label for="produk_id">Produk</label>
                        <div class="input-group">
                                <?php 
                                $sqljenis = "SELECT * FROM produk";
                                $rsjenis = $dbh->query($sqljenis);
                                ?>
                                <select id="produk_id" name="produk_id" class="col-12">
                                <?php 
                                    if (isset($_GET["idedit"])) {
                                    $id_jenis = $row["produk_id"];
                                    $query2 = "SELECT * FROM produk WHERE id = '$id_jenis'";
                                    $sql2 = $dbh->query($query2);
                                    $row2 = $sql2->fetch();
                                    echo '<option value="'.$row2['id'].'">'.$row2['nama'].'</option>';
                                    }
                                        foreach($rsjenis as $rowjenis){
                                ?>
                                    <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama']?></option>
                                <?php
                                    }
                                ?>
                                </select>
                            </div>
	                </div>
		            </div>
		           
                <div class="w-100"></div>
	              <div class="col-md-12">
	                <div class="form-group">
	                	<label for="quantity">Jumlah</label>
	                  <input id="quantity" name="quantity" type="number" class="form-control" placeholder="mau beli berapa?">
	                </div>
                </div>
                <div class="container">
                        <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan"/>

                </div>
	          </form><br><br><!-- END -->
    </section> <!-- .section -->
		

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

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>