@extends('user.master')

@section('content')
<section class="category-area section-gap" id="news">
<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="menu-content pb-70 col-lg-8">
			<div class="title text-center">
				<h1 class="mb-10">Developer</h1>
			</div>
		</div>
	</div>						
	<div class="active-cat-carusel">
		<div class="item single-cat">
			<a href="/images/dinar.jpeg" class="img-pop-up"><img src="/images/dinar.jpeg" class="img-po"alt="" height="210px"></a><br>
			<h4>Dinar Abdul Hollik Firdaus</h4>
		</div>
		<div class="item single-cat">
			<a href="/images/ferdi2.jpg" class="img-pop-up"><img src="/images/ferdi2.jpg" alt="" height="210px"></a><br>
			<h4>Ferdiansyah</h4>
		</div>
		<div class="item single-cat">
			<a href="/images/yogi.jpeg" class="img-pop-up"><img src="/images/yogi.jpeg" alt="" height="210px"></a><br>
			<h4 class="">Yogi Saputra</h4>
		</div>							
		<div class="item single-cat">
				<a href="/images/rio.jpeg" class="img-pop-up"><img src="/images/rio.jpeg" alt="" height="210px"></a><br>
				<h4 class="">Muhamad Rio Dhany Ramdani</h4>
			</div>
		<div class="item single-cat">
				<a href="/images/sanjaya.jpeg" class="img-pop-up"><img src="/images/sanjaya.jpeg" alt="" height="210px"></a><br>
				<h4 class="">Mochamad Rizky Sanjaya</h4>
		</div>
		<div class="item single-cat">
				<a href="/images/juan.jpeg" class="img-pop-up"><img src="/images/juan.jpeg" alt="" height="210px"></a><br>
				<h4 class="">Juan Rizal Alviano</h4>
		</div>
		<div class="item single-cat">
				<a href="/images/rezky.jpeg" class="img-pop-up"><img src="/images/rezky.jpeg" alt="" height="210px"></a><br>
				<h4 class="">Muhamad Rezky Rizaldi</h4>
		</div>
		<div class="item single-cat">
				<a href="/images/tile.jpeg" class="img-pop-up"><img src="/images/tile.jpeg" alt="" height="210px"></a><br>
				<h4 class="">Fajar Ramadhan</h4>
		</div>
		<div class="item single-cat">
				<a href="/images/emplad.jpeg" class="img-pop-up"><img src="/images/emplad.jpeg" alt="" height="210px"></a><br>
				<h4 class="">Muhamad Fajar</h4>
		</div>
		<div class="item single-cat">
				<a href="/images/akbar.jpeg" class="img-pop-up"><img src="/images/akbar.jpeg" alt="" height="210px"></a><br>
				<h4 class="">Akbar Mahmudin</h4>
		</div>
		<div class="item single-cat">
				<a href="/images/ime.jpeg" class="img-pop-up"><img src="/images/ime.jpeg" alt="" height="210px"></a><br>
				<h4 class="">Surya Ilham Maulana</h4>
		</div>
		<div class="item single-cat">
				<a href="/images/ikhlas.jpeg" class="img-pop-up"><img src="/images/ikhlas.jpeg" alt="" height="210px"></a><br>
				<h4 class="">Ikhlas Suherlan</h4>
				
		</div>
	</div>	
												
</div>	
<div class="container">
	<div class="col-md-12">
		<div class="justify-content-center">
			<h3 class="text-center">Kontak Kami</h3>
			<hr width="50%" style="border: 1px solid black"><br>
			<form class="form">
				<div class="form-group">
					<label style="color: rgb(0, 0, 0);"><b style="color: black">Nama Lengkap</b></label>
					<input type="text" class="form-control" autocomplete="off" placeholder="Masukkan Nama" ><br>
					<label style="color: rgb(0, 0, 0);">E-Mail</label>
					<input type="email" class="form-control"  autocomplete="off" placeholder="Masukkan Email" ><br>
					<label style="color: rgb(0, 0, 0);">Pesan</label>
					<textarea name="" id="" cols="10" rows="10" placeholder="Tuliskan Pesan..." class="form-control"></textarea> <br>
					<button type="submit" class="primary-btn">Kirim<span><i class="fa fa-paper-plane" style="color: white;"></i></span></button>                             
				</div> 
			
			</form>
		</div>
	</div>
</div>
</section>		
@endsection
				