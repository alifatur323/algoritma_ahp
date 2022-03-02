<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trainit-Algoritma</title>
	<link rel="stylesheet" href="../assets/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/custom_pengunjung.css">
	<link rel="stylesheet" href="../assets/font-awesome-4.7.0/css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
</head>
<body>
	
	<nav class="navbar navbar-transparan navbar-fixed-top">
		<?php include 'navbar.php'; ?>
	</nav>

	<header>
		<div class="layer">
			<div class="mt-150">
				<h1 class="fs-50 fc-white text-center">
					Siapkah Anda Belajar dengan Kami?
				</h1>
				<h1 class="fs-50 fc-white text-center">
					Silahkan Lihat Disini
				</h1>
				<div class="row mt-50">
					<div class="col-xs-offset-2 col-xs-8 col-sm-offset-4 col-sm-4 col-md-offset-4 col-md-4">
						<button class="btn btn-primary btn-block btn-slg">Lihat Perhitungan</button>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="mt-100">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 text-center">
					<img src="../assets/img/algoritma2.PNG" alt="" width="80%">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 text-justify">
					<h2 class="fs-40">Belajar Algoritma Apa Saja Sesuai Perancanganmu</h2>
					<p class="fs-20">
						Trainit memberikan pelatihan membuat sistem dengan ALGORITMA yang diinginkan siswa secara lengkap. Mulai dari desain, perancangan sistem, perhitungan algoritma, database, sampai penerapan semua materi menjadi 1 aplikasi jadi.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="mt-100" style="position: relative;">
		<div class="layer-2">
			<img src="../assets/img/sdd11.jpg" alt="" width="100%">
		</div>
	</div>

	<div class="mt-100">
		<div class="container text-center">
			<!-- <i class="fa fa-calendar fa-5x text-primary"></i> -->
			<h2 class="fs-40">Mulai Belajar AHP</h2>
			<p class="fs-20">
				Silahkan klik tombol dibawah dan kamu bisa mulai belajar AHP. Silahkan mencoba...
			</p>
			<div class="row mt-50">
				<div class="col-xs-offset-2 col-xs-8 col-sm-offset-4 col-sm-4 col-md-offset-4 col-md-4">
					<button class="btn btn-primary btn-block btn-slg">Mulai</button>
				</div>
			</div>
			<p class="mt-20">
				Scroll kebawah jika ingin belajar algoritma lain.
			</p>
		</div>
	</div>

	<div class="mt-100" style="position: relative;">
		<div class="layer-2">
			<img src="../assets/img/sdd8.jpg" alt="" width="100%">
		</div>
	</div>

	<div class="mt-100">
		<div class="container text-center">
			<div class="row mb-20">
				<div class="col-xs-4 col-sm-3 col-md-offset-2 col-md-2">
					<a href="">
						<div class="item-circle">
							<p class="fs-20 fw-10 fc-white">AHP</p>
						</div>
					</a>
				</div>
				<div class="col-xs-4 col-sm-3 col-md-2">
					<a href="">
						<div class="item-circle">
							<p class="fs-20 fw-10 fc-white">AHP</p>
						</div>
					</a>
				</div>
				<div class="col-xs-4 col-sm-3 col-md-2">
					<a href="">
						<div class="item-circle">
							<p class="fs-20 fw-10 fc-white">AHP</p>
						</div>
					</a>
				</div>
				<div class="col-xs-4 col-sm-3 col-md-2">
					<a href="">
						<div class="item-circle">
							<p class="fs-20 fw-10 fc-white">AHP</p>
						</div>
					</a>
				</div>
			</div>
			<h2 class="fs-40">Mulai Belajar AHP</h2>
			<p class="fs-20">
				Selain AHP, masih banya lagi algoritma yang bisa kamu pelajari.
				<br>
				Anda tinggal klik link materi diatas, lalu mulai belajar.
				<br>
				Silahkan mencoba...
			</p>
		</div>
	</div>

	<?php include 'footer.php'; ?>


	<script>
		$(window).scroll(function() {
			if ($(document).scrollTop() > 400) {
				$('.navbar').addClass('navbar-blue');
				$('.navbar').removeClass('navbar-transparan');
			} else {
				$('.navbar').removeClass('navbar-blue');
				$('.navbar').addClass('navbar-transparan');
			}
		});
	</script>
</body>
</html>