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
              <li><a href="/">Home</a></li>
              <li class="active"><a href="/events">Events</a></li>
              <li><a href="/ekskul">Extracuricular</a></li>
              <li><a href="/tentang">About</a></li>
              <li><a href="{{route('forums.index') }}">Forum</a></li>
              <li class="active"><a class= " navbar-btn" href="/login"style="width:10px;">Login &nbsp;<i class="fa fa-sign-in navbar-btn"  aria-hidden="true" style="width:1px;"></i></a></li>
            </ul>
          </div>						
        </div>
      </nav>
    </header>
    <div class="post-wrapper pt-100">
      <section class="post-area">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="single-page-post">
                <img class="img-fluid" src="/images/74.jpg" alt="" width="100%" height="100%">
                <div class="top-wrapper ">
                  <div class="row d-flex justify-content-between"><h2 class="col-lg-9 col-md-12 text-uppercase">Hut Republik Indonesia yang ke 74 </h2>
                  </div>
                </div>
                <div class="tags">
                  <ul>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Kemerdekaan</a></li>
                    <li><a href="#">Pahlawan</a></li>
                    <li><a href="#">Merdeka</a></li>
                  </ul>
                </div>
                <div class="single-post-content">
                  <p>
                    Dalam perayaan kemerdekaan Indonesia yang ke 74 SMK Prakarya Internasional ikut andil dalam rangka untuk merayakan kemerdekaan Indonesia, 
                    Kepala Sekolah, guru dan siswa mengikuti kegiatan upacara berserta lomba-lomba yang di adakan oleh SMK Prakarya Internsional
									</p>
								</div>
                <!-- End nav Area -->
                  
								<!-- Start comment-sec Area -->
								
								<!-- End comment-sec Area -->  
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- End Header Area -->
    <br>
    <br>
            


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
                <li><a href="{{route('eskul.create')}}">Marching Band</a></li>
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