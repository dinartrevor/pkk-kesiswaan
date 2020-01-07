<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>E-Mading</title>
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
  <header class="default-header">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<a class="navbar-brand" href="/" style="font-weight: 500;"><img src="{{ asset('images/pi.jpeg') }}" alt="" style="width: 50px;"> &nbsp;&nbsp;SMK Prakarya Internasional</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li class="active"><a href="/">Beranda</a></li>
						<li><a href="{{url('/articles')}}">Artikel</a></li>
						<li><a href="/members">Ekstrakurikuler</a></li>
						<li><a href="/forum">Forum</a></li>
						<li><a href="/tentang">Tentang</a></li>
						@if (auth()->user())
						<li class="dropdown">
							<a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
									{{ Auth::user()->name }}
							</a>
							<div class="dropdown-menu">
									<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">
											Sign out
										</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												@csrf
										</form>
							</div>
						</li> 
						@else     
						<li class="active">
							<ul><a href="/login"style="width:10px;">Login</a></li>
							</ul>
							@endif
				</div>						
			</div>
		</nav>
	</header>
	<!-- Start top-section Area -->
	<section class="top-section-area section-gap">
		<div class="container">
			<div class="row justify-content-between align-items-center d-flex">
				<div class="col-lg-8 top-left">
					<h1 class="text-white mb-20">Artikel</h1>
					<ul>
						<li><a href="/">Beranda</a><span class="lnr lnr-arrow-right"></span></li>
						<li><a href="/articles">Artikel</a></li>
					</ul>
				</div>
			</div>
		</div>  
	</section>
	<!-- End top-section Area -->

	<div class="post-wrapper pt-50">
		<!-- Start post Area -->
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<form title="Cari" action="{{url('cari_artikel')}}" method="GET">
						<!-- Filter Select -->
						<div class="row ">
							<div class="col-lg-4 offset-lg-4 ">
								<select class="form-control my-1 mr-sm-2" name="upload" id="" title="Pilih">
									<option value="" selected>Urutkan Berdasarkan</option>
									<option value="latest">Diupload Terbaru</option>
									<option value="old">Diupload Terakhir</option>
								</select>
							</div>
		
							<!-- Filter Search -->
							<div class="col-lg-4 mt-1">
								<div class="input-group">
									<input type="text" id="search" name="search" class="form-control half-round-input" placeholder="Cari" autocomplete="off" name="cari" autofocus>
									<div class="input-group-prepend">
										<button class="btn my-btn" type="submit">
											<i class="fa fa-search" style="color:#fff;"></i>
										</button>
										{{-- <span class="input-group-text text-light bg-success border-success half-round-button">
											<i class="fas fa-search"></i>
										</span> --}}
									</div>
								</div>
								<!-- End Filter Search -->
							</div>
						</form>
					</div>
					<!-- End Filter Select -->
					
				</div>
			</div>
		</div>
		<!-- End Filter -->
			<div class="container mt-5">
				<div class="row justify-content-center d-flex">
					<div class="col-lg-8">
						<div class="post-lists search-list">
							@if($artikel && count($artikel) >= 1) 
								@foreach ($artikel as $item)
								<div class="single_widget my-card recent_widget" style="padding: 0;">
									<div class="single-list flex-row d-flex" style="padding: 0;">
										<div class="thumb">
											<div class="date" style="background-color: #222222b8 !important; height: 85px; width: 75px; font-size:15px;">
												<p>{{ $item->created_at->format('d M Y ') }}</p>
												<br>
											</div>
											<a href="{{url('/artikel/show/'.$item->id)}}"><img class="img-responsive" src="{{ asset($item->thumbnail) }}" alt="" width="150px" height="150px"></a>
										</div>
										<div class="detail  ">
											<h4 class="pb-20 text-capitalize" style="margin-left: -1px;">{{ $item->judul }}</h4>
											<p>
												{!! str_limit($item ->konten, $limit = 50, $end = ' {.....}') !!}
											</p>
											<p class="mt-20 title text-lowercase" style="margin-left: -2px;">
												<i class="fa fa-users" aria-hidden="true"></i> {{$item->kategori->nama_kategori }}
												<i class="ml-20 fa fa-comment-o"></i> {{$item->coments_article()->count() > 0 ? $item->coments_article()->count() : 'Tidak Ada'}}
											</p>
										</div>
										<div class="footer pt-100 mr-50" style="margin-left: auto;">
											<a href="{{url('/artikel/show/'.$item->id)}}" class="text-uppercase primary-btn loadmore-btn" style="color:white;">Baca</a>
										</div>
									</div>
								</div>
								@endforeach 
								@else
								<div class="single_widget recent_widget" style="padding: 0;">
									<div class="single-list flex-row d-flex" style="padding: 0;">
										<div class="thumb">
											<div class="date" style="background-color: #222222b8 !important; height: 85px; width: 75px; font-size:15px;">
												<p>Kosong</p>
											</div>
											{{-- <a href="{{url('/artikel/show/'.$item->id)}}"><img class="img-responsive" src="{{ asset($item->thumbnail) }}" alt="" width="150px" height="150px"></a> --}}
										</div>
										<div class="detail mr-20">
											<h4 class="pb-20 text-capitalize">kosong</h4>
											<p>
												{{-- {!! str_limit($item ->konten, $limit = 50, $end = '...') !!} --}}
											</p>
											<p class="mt-20 title text-lowercase">
												{{-- <i class="fa fa-users" aria-hidden="true"></i> {{$item->kategori->nama_kategori }}
												<i class="ml-20 fa fa-comment-o"></i> {{$item->coments_article()->count() > 0 ? $item->coments_article()->count() : 'Tidak Ada'}} --}}
											</p>
										</div>
										<div class="footer pt-100 mr-50" style="margin-left: auto;">
											{{-- <a href="{{url('/artikel/show/'.$item->id)}}" class="text-uppercase primary-btn loadmore-btn" style="color:white;">Baca</a> --}}
										</div>
									</div>
								</div>
							@endif
							<div class="justify-content-center d-flex">
								{{$artikel->links()}}
							</div>
						</div>
					</div>
					<div class="col-lg-4 sidebar-area">
						<div class="single_widget recent_widget">
							<h4 class="text-uppercase pb-20">Artikel Terbaru	</h4>
							<div class="active-recent-carusel">
								@foreach ($artikel_terbaru as $terbaru)
								<div class="item">
									<img src="{{asset($terbaru->thumbnail) }}" alt="" width="200px" height="250px">
									<p class="mt-20 title text-uppercase">{{$terbaru->judul}}</p>
									<p>{{ $terbaru->created_at->diffForHumans() }}<span>
										{{$terbaru->kategori->nama_kategori}} <i class="fa fa-comment-o" aria-hidden="true"></i> {{$terbaru->coments_article()->count() > 0 ? $item->coments_article()->count() : 'Tidak Ada'}}</span>
									</p>
								</div>
								@endforeach
							</div>
						</div>
						<div class="single_widget cat_widget">
							<h4 class="text-uppercase pb-20">post categories</h4>
							<ul>
								@foreach ($kategori as $item)
								<li>
									<a href="/articles?category={{ $item->id }}">
									{{$item->nama_kategori}} <span>{{$item->artikel_count}}</span>
									</a>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End post Area -->
	</div>
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6  col-md-12">
					<div class="single-footer-widget">
							<a href="/"><h6>SMK PRAKARYA INTERNASIONAL</h6></a>
						<ul class="footer-nav">
							<li><a href="/events">Acara</a></li>
							<li><a href="/articles">Artikel</a></li>
							<li><a href="/ekskul">Ekstrakurikuler</a></li>
							<li><a href="/forum">Forum</a></li>
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
									@foreach ($kategori as $k)
										<li>
											<a href="/articles?category={{ $k->id }}">
												 {{$k->nama_kategori}}
											</a>
										</li>
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
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="/asset-user/js/vendor/bootstrap.min.js"></script>
	<script src="/asset-user/js/jquery.ajaxchimp.min.js"></script>
	<script src="/asset-user/js/parallax.min.js"></script>			
	<script src="/asset-user/js/owl.carousel.min.js"></script>		
	<script src="/asset-user/js/jquery.magnific-popup.min.js"></script>				
	<script src="/asset-user/js/jquery.sticky.js"></script>
	<script src="/asset-user/js/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	{{-- {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		$(document).ready(function() {
			$( "#search" ).autocomplete({
				source: function(request, response) {
					$.ajax({
						url: "{{url('cari')}}",
						data: { istilah: request.term },
						dataType: "json",
						success: function(data){
							var resp = $.map(data,function(obj){
							return obj.judul;
						}); 
						// console.log(resp);
						response(resp);
					}
				});
			},
			minLength: 1
		});
	});
	</script> 
	<script>
		@if (Session::has('sukses'))
			toastr.success("{{Session::get('sukses')}}", "Sukses")
		@endif
		@if (Session::has('error'))
			toastr.error("{{Session::get('error')}}", "Gagal")
		@endif
	</script>
</body>
</html>


