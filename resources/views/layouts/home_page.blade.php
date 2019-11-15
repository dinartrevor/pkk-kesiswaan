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
    @yield('header')
    </head>
    <body>
        <!-- Start Header Area -->
        <header class="default-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="/" style="font-weight: 500;">
                      <img src="{{ asset('images/pi.jpeg') }}" alt="" style="width: 50px;"> &nbsp;&nbsp;SMK Prakarya Internasional
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                      <ul class="navbar-nav">
                        <li class="active"><a href="#home">Beranda</a></li>
                        <li><a href="{{url('/articles')}}">Artikel</a></li>
                        <li><a href="/ekstrakulikuler">Ekstrakurikuler</a></li>
                        <li><a href="/forum">Forum</a></li>
                        <li><a href="/tentang">Tentang</a></li>
                        <li class="active">
                          <ul><a href="/login"style="width:10px;">Login</a></li>
                      </ul>
                    </div>						
                </div>
            </nav>
        </header>

    @yield('content')
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
                <h6 class="mb-20">Kategori Artikel</h6>
                <ul class="footer-nav">
                  @foreach ($kategori as $item)
                      
                  
                <li>{{$item->nama_kategori}}</a></li>

                  @endforeach
                </ul>
              </div>
            </div>						
          </div>
  
          <div class="row footer-bottom d-flex justify-content-between">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p class="col-lg-8 col-sm-12 footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by <a href="https://colorlib.com" target="_blank">Koala Development</a></p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </div>
        </div>
      </footer>
  
      <script src="/asset-user/js/vendor/jquery-2.2.4.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="/asset-user/js/vendor/bootstrap.min.js"></script>
      <script src="/asset-user/js/jquery.ajaxchimp.min.js"></script>
      <script src="/asset-user/js/parallax.min.js"></script>			
      <script src="/asset-user/js/owl.carousel.min.js"></script>		
      <script src="/asset-user/js/jquery.magnific-popup.min.js"></script>				
      <script src="/asset-user/js/jquery.sticky.js"></script>
      <script src="/asset-user/js/main.js"></script>
      @yield('footer')
  </body>
  </html>