<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="colorlib">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Marching Band - E - Mading</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
  <link rel="stylesheet" href="/asset-user/css/linearicons.css">
	<link rel="stylesheet" href="/asset-user/css/bootstrap.css">
	<link rel="stylesheet" href="/asset-user/css/font-awesome.min.css">
  <link rel="stylesheet" href="/asset-user/css/owl.carousel.css">
  <link rel="stylesheet" href="/asset-user/css/main.css">
  <link rel="stylesheet" href="/asset-user/css/style.css">
  <link rel="icon" href="images/pi.jpeg" type="image/icon"/>
</head>
  <body>

    <!-- Start Header Area -->
    <header class="default-header">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand" href="index.html" style="font-weight: 500;"><img src="img/pi.jpeg" alt="" style="width: 50px;"> &nbsp;&nbsp;SMK Prakarya Internasional</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li><a href="index.html">Beranda</a></li>
                <li><a href="acara.html">Acara</a></li>
                <li><a href="ekstrakulikuler.html">Ekstrakurikuler</a></li>
                <li><a href="tentang.html">Tentang</a></li>
                <li><a class= " navbar-btn" href="login.html" style="width:10px;">Login &nbsp;<i class="fa fa-sign-in navbar-btn"  aria-hidden="true" style="width:1px;"></i></a>
                </li>
              </ul>
            </div>                        
        </div>
      </nav>
    </header>
    <!-- End Header Area -->

    <!-- Start post Area -->
    <div class="post-wrapper pt-100">
      <section class="post-area">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="single-page-post">
                <img class="img-fluid" src="/images/marching.jpg" alt="" width="100%" height="100%">
                <div class="top-wrapper ">
                  <div class="row d-flex justify-content-between"><h2 class="col-lg-9 col-md-12 text-uppercase">Marching Band SMK Prakarya Internasional </h2>
                  </div>
                </div>
                <div class="tags">
                  <ul>
                    <li><a href="#">Ekstrakurikuler</a></li>
                    <li><a href="#">Seni</a></li>
                    <li><a href="#">Temporari</a></li>
                    <li><a href="#">Musik</a></li>
                  </ul>
                </div>
                <div class="single-post-content">
                  <p>Marching Band
										disebut juga orkes barisan (bahasa Inggris: drum band, marching band) adalah sekelompok barisan orang yang memainkan satu atau beberapa lagu dengan menggunakan sejumlah kombinasi alat musik (tiup, perkusi, dan sejumlah instrumen pit) secara bersama-sama. Penampilan drumben merupakan kombinasi dari permainan musik (tiup, dan perkusi) serta aksi baris-berbaris dari pemainnya. Umumnya, penampilan Drumben dipimpin oleh satu atau dua orang Komandan Lapangan dan dilakukan baik di lapangan terbuka maupun lapangan tertutup dalam barisan yang membentuk formasi dengan pola yang senantiasa berubah-ubah sesuai dengan alur koreografi terhadap lagu yang dimainkan, dan diiringi pula dengan aksi tarian yang dilakukan oleh sejumlah pemain bendera.
										Marching Band umumnya dikategorikan menurut fungsi, jumlah anggota, komposisi dan jenis peralatan yang digunakan, serta gaya atau corak penampilannya. Penampilan drumben pada mulanya adalah sebagai pengiring parade perayaan ataupun festival yang dilakukan di lapangan terbuka dalam bentuk barisan dengan pola yang tetap dan kaku, serta memainkan lagu-lagu mars. Dinamika keseimbangan penampilan diperoleh melalui atraksi individual yang dilakukan oleh mayoret, ataupun beberapa personel pemain instrumen. Namun saat ini permainan musik drumben dapat dilakukan baik di lapangan terbuka ataupun tertutup sebagai sebagai pengisi acara dalam suatu perayaan, ataupun kejuaraan.
										Komposisi musik yang dimainkan drumben umumnya bersifat lebih harmonis dan tidak semata-mata memainkan lagu dalam bentuk mars, ragam peralatan yang digunakan lebih kompleks, formasi barisan yang lebih dinamis, dan corak penampilannya membuat drumben merupakan kategori yang terpisah dan berbeda dengan marching band yang umumnya memiliki komposisi penggunaan instrumen perkusi yang lebih banyak dari instrumen musik tiup. Tipikal bentuk dan penampilan marching band yang paling dikenal adalah marching band yang dimiliki oleh institusi kemiliteran ataupun kepolisian. Adaptasi lebih lanjut dari penampilan drumben di atas panggung adalah dalam bentuk brass band.
									</p>
								</div>
                <!-- End nav Area -->
                  
								<!-- Start comment-sec Area -->
								
								<!-- End comment-sec Area -->  
              </div>
            </div>
						<div class="col-lg-4 sidebar-area ">
							<div class="single_widget search_widget">
								<h3 class="text-center">Form Pendaftaran Ekstakulikuler</h3><br>
								<form action="{{ route('eskul.store')}} "method="POST">
									@method('POST')
									@csrf
									<div class="form-group">
										<label style="color: rgb(0, 0, 0);">Nama Lengkap</label>
										<input type="text" name="nama" class="form-control" autocomplete="off" placeholder="Masukkan Nama" ><br>
										<label style="color: rgb(0, 0, 0);">Kelas</label>
										<input type="text" name="kelas" class="form-control"  autocomplete="off" placeholder="Masukkan Kelas" ><br>
										<label style="color: rgb(0, 0, 0);">Jurusan</label>
										<select id="jurusan" name="jurusan_id" class="form-control">
											<option>pilih</option>
											@foreach($jurusan as $d)
												<option value="{{ $d->id }}">{{ $d->nama_jurusan }}</option>
											@endforeach
										</select><br>
										<label style="color: rgb(0, 0, 0);">Nomor Telepon</label>
										<input type="text"name="nomer_telepone" class="form-control" autocomplete="off" id="nomer" placeholder="Masukkan Nomor Telepon"><br>
										<label style="color: rgb(0, 0, 0);">Alasan</label>
										<textarea name="alasan" id="" cols="10" rows="10" placeholder="Tulis Alasan" class="form-control"></textarea>                            
									</div> 
									<button type="submit" class="primary-btn">Kirim<span><i class="fa fa-paper-plane" style="color: white;"></i></span></button>  
								</form>
							</div>

							<div class="single_widget recent_widget">
								<h4 class="text-uppercase pb-20">Acara Terbaru</h4>
								<div class="active-recent-carusel">
									<div class="item">
										<img src="/images/74.jpg" alt="">
										<p class="mt-20 title text-uppercase">HUT RI Ke-74</p>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
										<p>2 jam yang lalu</p>    
									</div>  
									<div class="item">
										<img src="/images/demo-eskul.jpg" alt="">
										<p class="mt-20 title text-uppercase">Demonstrasi Ekstrakurikuler</p>
										<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
										<p>3 jam yang lalu</p>    
									</div>  
									<div class="item">
										<img src="/images/porak.jpg" alt="">
										<p class="mt-20 title text-uppercase">Pekan Olahraga Nasional</p>
										<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
										<p>4 jam yang lalu</p>    
									</div>                                                                                            
								</div>
							</div>  																							
						</div>
          </div>
        </div>    
      </section>
      <!-- End post Area -->  
    </div>
    <!-- End post Area -->

		<!-- start footer Area -->		
		<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-6  col-md-12">
							<div class="single-footer-widget">
								<h6>SMK PRAKARYA INTERNASIONAL</h6>
								<ul class="footer-nav">
									<li><a href="#">Acara</a></li>
									<li><a href="#">Ekstrakurikuler</a></li>
									<li><a href="#">Tentang</a></li>
									<li><a href="#">login</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">Ekstrakurikuler</h6>
								<ul class="footer-nav">
									<li><a href="#">Pramuka</a></li>
									<li><a href="#">Osis</a></li>
									<li><a href="#">Marching Band</a></li>
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

			<!-- Script -->
      <script src="/asset-user/js/vendor/jquery-2.2.4.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="/asset-user/js/vendor/bootstrap.min.js"></script>
      <script src="/asset-user/js/jquery.ajaxchimp.min.js"></script>
      <script src="/asset-user/js/parallax.min.js"></script>          
      <script src="/asset-user/js/owl.carousel.min.js"></script>      
      <script src="/asset-user/js/jquery.magnific-popup.min.js"></script>             
      <script src="/asset-user/js/jquery.sticky.js"></script>
      <script src="/asset-user/js/main.js"></script>  
      <script>
				$(document).ready(function() {
					$("#nomer").keydown(function(event) {
						// Allow only backspace and delete
						if ( event.keyCode == 46 || event.keyCode == 8 ) {
							// let it happen, don't do anything
						} else {
								// Ensure that it is a number and stop the keypress
								if (event.keyCode < 48 || event.keyCode > 57 ) {
										event.preventDefault(); 
								}   
							}
						});
					});
					function test() {
						var test = confirm('Apakah Anda sudah yakin untuk mengirim? ');
						if(test){
							alert('Pesan Anda telah terkirim');
						}else{
							alert('Aduh ke cancel ');
						}	
					}
					
      </script>
  </body>
</html>