	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="colorlib">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta charset="UTF-8">
		<title>E - Mading</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('asset-user/css/linearicons.css') }}">
		<link rel="stylesheet" href="{{ asset('asset-user/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('asset-user/css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('asset-user/css/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ asset('asset-user/css/main.css') }}">
		<link rel="stylesheet" href="{{ asset('asset-user/css/style.css') }}">
		<link rel="icon" href="{{ asset('images/pi.jpeg') }}" type="image/icon"/>
		</head>
		<body>
			<!-- Start Header Area -->
			<header class="default-header">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<a class="navbar-brand" href="/" style="font-weight: 500;"><img src="{{ asset('images/pi.jpeg') }}" alt="" style="width: 50px;"> &nbsp;&nbsp;SMK Prakarya Internasional</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
						<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
							<ul class="navbar-nav">
								<li class="active"><a href="#home">Home</a></li>
								<li><a href="/events">Events</a></li>
								<li><a href="/ekskul">Extracuricular</a></li>
								<li><a href="/tentang">About</a></li>
								<li><a href="#">Forum</a></li>
								<li class="active"><a class= " navbar-btn" href="/login"style="width:10px;">Login &nbsp;<i class="fa fa-sign-in navbar-btn"  aria-hidden="true" style="width:1px;"></i></a></li>
							</ul>
						</div>						
					</div>
				</nav>
			</header>
			<!-- End Header Area -->

			<!-- start banner Area -->
			<section style="box-shadow: 0 -10px 30px inset #000;" class="banner-area relative" id="home" data-parallax="scroll" data-image-src="/images/smk-pi.jpg">
				<div class="overlay-bg overlay"></div>
				<div class="container">
					<div class="row fullscreen">
						<div class="banner-content d-flex align-items-center col-lg-12 col-md-12">
							<div>
								<h1 style="text-shadow: 2px 2px #000;">SELAMAT DATANG DI<br><span style="font-weight: 300; text-shadow: 2px 2px 2px #000;">SMK PRAKARYA INTERNASIONAL</span></h1>
								<p style="color:white; font-size: 25px; font-weight: 200; text-shadow: 2px 2px #000;">Gerbang Belajar Menjadi Teknisi Profesional yang Handal</p>
							</div>	
						</div>												
					</div>
				</div>
			</section>
			<!-- End banner Area -->	


			<!-- Start category Area -->
			<section class="category-area section-gap" id="news">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Berita Acara Terkini</h1><hr>
								<p>Setiap tahun nya, Kami akan mempersiapkan suatu kegiatan/atraksi/pertunjukan baik secara individu maupun berkelompok untuk dipertunjukan sehingga akan ditemukan siswa-siswi yang memiliki bakat tertentu dan akan dikembangkan dan diberikan ruang untuk mempertajam bakat-bakat tersebut.</p>
							</div>
						</div>
					</div>						
					<div class="active-cat-carusel">
						<div class="card mr-4">
							<div class="item single-cat">
								<a href="/detail-events"><img src="{{ asset('images/74.jpg') }}" alt="" height="210px"></a>
								<p class="date">10 Jan 2018</p>
								<h4><a href="/detail-events">HUT RI Ke-74</a></h4>
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor ratione architecto quo quas</p>
							</div>
						</div>
						<div class="card mr-4">
							<div class="item single-cat">
								<a href=""><img src="{{ asset('images/demo-eskul.jpg') }}" alt="" height="210px"></a>
								<p class="date">10 Jan 2018</p>
								<h4><a href="#">Demonstrasi Ekstrakurikuler</a></h4>
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor ratione architecto quo quas</p>
							</div>
						</div>
						<div class="card mr-4">
							<div class="item single-cat">
								<a href=""><img src="{{ asset('images/porak.jpg') }}" alt="" height="210px"></a>
								<p class="date">10 Jan 2018</p>
								<h4><a href="#">Pekan Olahraga Nasional </a></h4>
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor ratione architecto quo quas</p>
							</div>
						</div>							
					</div>												
				</div>	
			</section>
			<!-- End category Area -->
			
			<!-- Start travel Area -->
			<section class="travel-area section-gap" id="travel">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Events News</h1>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-6 travel-left">
							<div class="single-travel media pb-70">
							  <img class="img-fluid d-flex  mr-3" src="{{ asset('images/porak.jpg') }}" width="200px" height="200px"alt="">
							  <div class="dates">
							  	<span>01</span>
							  	<p>Dec</p>
							  </div>
							  <div class="media-body align-self-center">
							    <h4 class="mt-0"><a href="#">Pekan Olahraga Nasional</a></h4>
							    <p>inappropriate behavior Lorem ipsum dolor sit amet, consectetur.</p>							 
							  </div>
							</div>
							<div class="single-travel media">
							  <img class="img-fluid d-flex  mr-3" src="{{ asset('images/pentas-seni.jpg') }}" width="200px" height="200px" alt="">
							  <div class="dates">
							  	<span>01</span>
							  	<p>Nov</p>
							  </div>							  
							  <div class="media-body align-self-center">
							    <h4 class="mt-0"><a href="#">Pentas Seni SMK PI</a></h4>
							    <p>inappropriate behavior Lorem ipsum dolor sit amet, consectetur.</p>							
								</div>
							</div>														
						</div>
						<div class="col-lg-6 travel-right">
							<div class="single-travel media pb-70">
							  <img class="img-fluid d-flex  mr-3" src="/images/74.jpg" alt="" width="250px" height="500px">
							  <div class="dates">
							  	<span>17</span>
							  	<p>Agu</p>
							  </div>							  
							  <div class="media-body align-self-center">
							    <h4 class="mt-0"><a href="/detail-events">Hut Republik Indonesia Ke 74</a></h4>
							    <p>inappropriate behavior Lorem ipsum dolor sit amet, consectetur.</p>
							  </div>
							</div>
							<div class="single-travel media">
							  <img class="img-fluid d-flex  mr-3" src="/images/74.jpg" alt="" width="250px" height="500px">
							  <div class="dates">
							  	<span>20</span>
							  	<p>Dec</p>
							  </div>							  
							  <div class="media-body align-self-center">
							    <h4 class="mt-0"><a href="#">Addiction When Gambling
							    Becomes A Problem</a></h4>
							    <p>inappropriate behavior Lorem ipsum dolor sit amet, consectetur.</p>
							  </div>
							</div>								
						</div>
						<a href="acara.html" class="primary-btn load-more pbtn-2 text-uppercase mx-auto mt-60">Tampilkan Lebih Banyak <i class="fa fa-chevron-circle-down" style="color: white; transform: translate(5px, 0)"></i></a>		
					</div>
				</div>					
			</section>
			<!-- End travel Area -->
			
			<!-- Start fashion Area -->
			<section class="fashion-area section-gap" id="fashion">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Ekstrakurikuler</h1><hr>
								<p>Adalah kegiatan non-pelajaran formal yang dilakukan peserta didik sekolah atau universitas, umumnya di luar jam belajar kurikulum standar. Kegiatan-kegiatan ini ada pada setiap jenjang pendidikan dari sekolah dasar sampai universitas. </p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6 single-fashion">
							<a href="paskibra.html"><img class="img-fluid" src="/images/paskib.jpg" alt=""></a>
							<h4 style="margin-top: 15px;"><a href="paskibra.html">PASKIBRA</a></h4>
							<p>
								Pasukan Kibaran Bendera 
							</p>
						</div>
						<div class="col-lg-3 col-md-6 single-fashion">
							<a href="marching-band.html"><img class="img-fluid" src="/images/marching.jpg" alt=""></a>
						<h4 style="margin-top: 15px;"><a href="">MARCHING BAND</a></h4>
							<p>
								Tukang Tatalu
							</p>
						</div>
						<div class="col-lg-3 col-md-6 single-fashion">
							<a href="pramuka.html"><img class="img-fluid" src="/images/pramuka.jpg" alt=""></a>
							<h4 style="margin-top: 15px;"><a href="pramuka.html">PRAMUKA</a></h4>
							<p>
								Praja Muda Karana
							</p>
						</div>
						<div class="col-lg-3 col-md-6 single-fashion">
							<a href="osis.html"><img class="img-fluid" src="/images/osis.jpg" alt=""></a>
							<h4 style="margin-top: 15px;"><a href="osis.html">OSIS</a></h4>
							<p>
								Oraganisai Siswa Intra Sekolah
							</p>
						</div>	
						<a href="ekstrakulikuler.html" class="primary-btn load-more pbtn-2 text-uppercase mx-auto mt-60">Tamplikan Lebih Banyak <i class="fa fa-chevron-circle-down" style="color: white; transform: translate(5px, 0)"></i></a>						
					</div>
				</div>	
			</section>
			<!-- End fashion Area -->
			
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
					<div class="container">
						<div class="row">
							<div class="col-lg-6  col-md-12">
								<div class="single-footer-widget">
								 	<a href="/"><h6>SMK PRAKARYA INTERNASIONAL</h6></a>
									<ul class="footer-nav">
										<li><a href="/events">Acara</a></li>
										<li><a href="/ekskul">Ekstrakurikuler</a></li>
										<li><a href="/tentang">Tentang</a></li>
										<li><a href="/login">login</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3  col-md-12">
								<div class="single-footer-widget mail-chimp">
									<h6 class="mb-20">Ekstrakurikuler</h6>
									<ul class="footer-nav">
										<li><a href="#">Pramuka</a></li>
										<li><a href="#">Osis</a></li>
									<li><a href="">Marching Band</a></li>
										<li><a href="#">Paskibra</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3  col-md-12">
									<div class="single-footer-widget mail-chimp">
										<h6 class="mb-20">Acara</h6>
										<ul class="footer-nav">
											<li><a href="#">HUT-RI</a></li>
											<li><a href="#">Pentas Seni</a></li>
											<li><a href="#">Pekan Olahraga</a></li>
											<li><a href="#">Donor Darah</a></li>
										</ul>
									</div>
								</div>						
						</div>
	
						<div class="row footer-bottom d-flex justify-content-between">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							<p class="col-lg-8 col-sm-12 footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by <a href="https://colorlib.com" target="_blank">Koala Development</a></p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							<div class="col-lg-4 col-sm-12 footer-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>
						</div>
					</div>
				</footer>
			<!-- End footer Area -->		

			<script src="/asset-user/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="/asset-user/js/vendor/bootstrap.min.js"></script>
			<script src="/asset-user/js/jquery.ajaxchimp.min.js"></script>
			<script src="/asset-user/js/parallax.min.js"></script>			
			<script src="/asset-user/js/owl.carousel.min.js"></script>		
			<script src="/asset-user/js/jquery.magnific-popup.min.js"></script>				
			<script src="/asset-user/js/jquery.sticky.js"></script>
			<script src="/asset-user/js/main.js"></script>	
		</body>
	</html>