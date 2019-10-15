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
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-h2="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
						<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
							<ul class="navbar-nav">
								<li class="active"><a href="/">Home</a></li>
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

			<!-- Forum Area -->
			<div class="post-wrapper pt-100">

				<!-- Start post Area -->
				<!-- modal -->
				<section class="post-area">
						<div class="container">

					<div class="container">
							<div class="row justify-content-center d-flex">
									<div class="col-lg-8">
										<button type="button" class="text-uppercase primary-btn loadmore-btn mt-40 mb-60" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Ajukan pertanyaan</button>
										<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">New message</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
															</button>
													</div>
														<div class="modal-body">
														<form action="{{route('forums.store')}}"method="POST">
															@method('POST')
															@csrf
																<div class="form-group">
																	<label for="recipient-name" class="col-form-label">Title</label>
																		<input type="text" required="" class="form-control" name="title" id="recipient-name">
																</div>
																	<div class="form-group">
																		<label for="message-text" class="col-form-label">Fill:</label>
																		<textarea class="form-control" name="fill_title" required="" ></textarea>
																</div>
															
														</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																	<button type="submit" class="btn btn-primary">Send message</button>
															</div>
														</form>
													</div>
											</div>
									</div>
<!--modal beres -->	

												@foreach ($forums as $forum)
																			
			

												<div class="card pt-30 mb-50">
													<div class="post-lists search-list">
														<div class="single-list flex-row d-flex">
																<div class="thumb">
																</div>
																<div class="detail">
																	<a href=""><h4 class="pb-20">{{$forum->title}}
																		
																	</a> </h4><br>
																	<p>
																	{{$forum->fill_title}}
																	</p>
																	
																	<p class="footer pt-20">
																		<b><span>{{$forum->created_at->diffForHumans()}}</span></b> <i class="ml-50 fa fa-comment-o" aria-hidden="true"><a href="#"> 02 Comments</a></i>
																	</p>
																</div>
														</div>
													</div>                                                                    
												</div>  


												
																			
												@endforeach
				
												<div class="justify-content-center d-flex">
														<a class="text-uppercase primary-btn loadmore-btn mt-40 mb-60" href="#"> Load More Post</a>
												</div>    
										</div>
										<div class="col-lg-4 sidebar-area"><br><br>
												<div class="single_widget search_widget mt-80">
														<div id="imaginary_container">
																<div class="input-group stylish-input-group">
																		<input type="text" class="form-control"  placeholder="Search">
																		<span class="input-group-addon">
																				<button type="submit">
																						<span class="lnr lnr-magnifier"></span>
																				</button>  
																		</span>
																</div>
														</div> 
												</div><br><br><br>
												<div class="single_widget recent_widget mt-30">
														<h4 class="text-uppercase pb-20">Latest Events</h4>
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
			<!-- End Forum Area -->
			
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