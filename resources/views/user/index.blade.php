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
@endsection