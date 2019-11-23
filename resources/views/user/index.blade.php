@extends('layouts.home_page')

@section('content')
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
			@foreach ($artikel_random as $item)
			<div class="card mr-4">
				<div class="item single-cat">
					<a href="{{url('/artikel/show/'.$item->id)}}"><img src="{{asset($item->thumbnail) }}" alt="" height="210px"></a>
					<p class="date">{{ $item->created_at->diffForHumans()}}</p>
					<h4><a href="{{url('/artikel/show/'.$item->id)}}">{{$item->judul}}</a></h4>
					<div class="mt-5">
						<i class="fa fa-tag" aria-hidden="true"></i>
						{{$item->kategori->nama_kategori }}
						<i class="ml-20 fa fa-user" ></i>
						{{$item->user->name}}
					</div>
				</div>
			</div>		
			@endforeach				
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
					<h1 class="mb-10">Acara</h1>
				</div>
			</div>
		</div>						
		<div class="row">
			@foreach ($artikel as $art)
				<div class="col-md-6">
					<div class="single-travel media pb-70">
						<img class="img-fluid d-flex  mr-3" src="{{asset($art->thumbnail) }}" width="200px" height="500px"alt="">
						<div class="media-body align-self-center">
						<h4 class="mt-0"><a href="{{url('/artikel/show/'.$item->id)}}">{{$art->judul}}</a></h4>
						<p>{!! str_limit($item ->konten, $limit = 50, $end = '  ...........') !!}</p>							 
						</div>
					</div>								
				</div>
			@endforeach
			<div class="clearfix"></div>
			<a href="/articles" class="primary-btn load-more pbtn-2 text-uppercase mx-auto mt-60">Tampilkan Lebih Banyak <i class="fa fa-chevron-circle-down" style="color: white; transform: translate(5px, 0)"></i></a>		
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
			@foreach ($extracurricular as $ex)
				

			<div class="col-lg-3 col-md-6 single-fashion">
				<a href="{{ url('/members/'.$ex->id) }}"><img class="img-fluid" src="/images/dummy-eskul.jpeg" alt=""></a>
			<h4 style="margin-top: 15px;"><a href="{{ url('/members/'.$ex->id) }}">{{$ex->name}}</a></h4>
			</div>
			@endforeach
			<a href="/members" class="primary-btn load-more pbtn-2 text-uppercase mx-auto mt-60">Tamplikan Lebih Banyak <i class="fa fa-chevron-circle-down" style="color: white; transform: translate(5px, 0)"></i></a>						
		</div>
	</div>	
</section>
<!-- End fashion Area -->
@endsection