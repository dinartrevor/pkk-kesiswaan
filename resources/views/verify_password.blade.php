<!DOCTYPE html>
<html>
    
<head>
	<title>Halaman Admin</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
	<script src="{{ asset('js/jquery.min.js') }}"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <link rel="icon" href="{{ asset('images/pi.jpeg') }}" type="image/icon"/>
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="{{ asset('images/pi.jpeg') }}" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form>
						
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="email" name="email" class="form-control input_user" required placeholder="E-Mail Address">
            </div>
            <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_user" required placeholder="Password">
            </div>
            <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_user" required placeholder="Confirm Password">
						</div>
					</form>
				</div>
				<div class="d-flex justify-content-center mt-3 login_container">
					<a href="/admin" class="btn login_btn">Reset Password</a>
        </div>
        <div class="d-flex justify-content-center mt-3 login_container">
					<a href="/lupa" class="btn login_btn">Kembali</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
