<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Arsip Surat SMK AL-MUNIR </title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?= base_url('public/assets/bootstrap.min.css') ?>">
	<!-- owl carousel -->
	<link rel="stylesheet" href="<?= base_url('public/assets/owl.carousel.min.css') ?>">
	<!-- style css custom kita -->
	<link rel="stylesheet" href="<?= base_url('public/assets/style.css') ?>">
	<script src="<?= base_url('public/assets/jquery-3.3.1.slim.min.js') ?>"></script>
	<script src="<?= base_url('public/assets/owl.carousel.min.js') ?>"></script>
	<script src="<?= base_url('public/assets/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('public/assets/main.js') ?>"></script>
</head>

<body>

	<header>
		<div class="container">
			<div class="row">

				<div class="col-md-12">
					<div class="brand justify-content-center">
						<div class="brand-name text-center">
							<div class="d-flex justify-content-center">
								<h1 class="text-center">SMK AL-MUNIR</h1>
							</div>
						</div>
					</div>
				</div>

			</div> <!-- .row -->
		</div> <!-- .container -->
	</header>

	<!-- section menu -->
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #256D85; border-bottom: 5px solid #06283D;">
		<!-- letak .navbar-light -->
		<div class="container">
			<button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div id="my-nav" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<div class="dropdown show ml-auto">
							<a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Login
							</a>

							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="<?= base_url('login') ?>">Login Admin</a>
								<a class="dropdown-item" href="<?= base_url('login/bagian') ?>">Login Bagian</a>
							</div>
						</div>
					</li>

				</ul>
			</div>

		</div> <!-- .container -->
	</nav>

	<!-- section hero area -->
	<section>
		<div>
			<div style="display: flex; justify-content: center; align-items: center; height: 60vh">
				<img src="<?= base_url('public/assets/almunir.png') ?>" alt="">
			</div>
		</div>
	</section>
	<!-- <section class="my-banner" id="hero-area">
		<div id="slider-hero-nav">
			<div class="owl-carousel" id="slider-hero">
				<div class="slider-item">
					<div class="slider-item-img">
						
					</div>
				</div>
			</div>
		</div>
	</section> -->






	<script>
		$('.dropdown-toggle').dropdown()
	</script>

</body>

</html>
