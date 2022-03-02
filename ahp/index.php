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
	<?php $aktif="index"; ?>
	<nav class="navbar navbar-transparan navbar-fixed-top">
		<?php include 'navbar.php'; ?>
	</nav>

	<header>
		<div class="layer">
			<div class="mt-200">
				<h1 class="fs-50 fc-white text-center">
					Selamat Datang di Pembelajaran AHP.
				</h1>
				
				<div class="row mt-50">
					<div class="col-xs-offset-2 col-xs-8 col-sm-offset-4 col-sm-4 col-md-offset-4 col-md-4">
						<a href="perhitungan.php" class="btn btn-primary btn-block btn-slg">Lihat Perhitungan</a>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="mt-100">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 text-center mt-30">
					<img src="../assets/img/ahp.jpg" alt="" width="80%">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 text-justify">
					<h2 class="fs-40">Pengertian AHP</h2>
					<p>
						Metode <b><i>Analitycal Hierarcy Process (AHP)</i></b> dikembangkanoleh THomas L. Saaty pada tahun 70-an ketika di Warston School. Metode AHP merupakan salah satu metode yang dapt digunakan dalam sistem pengambilan keputusan dengan memerhatikan faktor-faktor persepsi, preferensi, pengalaman, dan intuisi. AHP menggabungkan penilaian nilai pribadi ke dalam suatu cara yang logis.
					</p>
					<a href="teori.php" class="btn btn-primary">Teori Selengkapnya...</a>
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
			<p>
				Silahkan klik tombol dibawah dan kamu bisa mulai belajar AHP. Silahkan mencoba...
			</p>
			<div class="row mt-50">
				<div class="col-xs-offset-2 col-xs-8 col-sm-offset-4 col-sm-4 col-md-offset-4 col-md-4">
					<a href="perhitungan.php" class="btn btn-primary btn-block btn-slg">Mulai</a>
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

	<div id="algoritma-lainnya"></div>

	<div class="mt-100">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 text-center mt-30">
					<!-- <img src="../assets/img/algoritma2.PNG" alt="" width="80%"> -->
					<div class="row">
						<div class="col-xs-6 col-md-3">
							<a href="https://www.teamtrainit.com/demo/algoritma/ahp" class="btn btn-green btn-custom">
								<div>
									<span class="fs-40">AHP</span>
									<br> Analytical <br> Hierarkhi <br> Process
								</div>
							</a>
						</div>
						<div class="col-xs-6 col-md-3">
							<a href="https://www.teamtrainit.com/demo/algoritma/saw" class="btn btn-orange btn-custom">
								<div>
									<span class="fs-40">SAW</span>
									<br> Simple <br> Additive <br> Weighting
								</div>
							</a>
						</div>
						<div class="col-xs-6 col-md-3">
							<a href="https://www.teamtrainit.com/demo/algoritma/wp" class="btn btn-purple btn-custom">
								<div>
									<span class="fs-40">WP</span>
									<br> Weighted <br> Product
								</div>
							</a>
						</div>
						<div class="col-xs-6 col-md-3">
							<a href="https://www.teamtrainit.com/demo/algoritma/fc" class="btn btn-red btn-custom">
								<div>
									<span class="fs-20">Forward <br> Chaining</span>
								</div>
							</a>
						</div>
					</div>

					<div class="row mt-30">
						<div class="col-xs-6 col-md-3">
							<a href="https://www.teamtrainit.com/demo/algoritma/cf" class="btn btn-purple btn-custom">
								<div>
									<span class="fs-20">Certainly <br> Factor</span>
								</div>
							</a>
						</div>
						<div class="col-xs-6 col-md-3">
							<a href="https://www.teamtrainit.com/demo/algoritma/bayes" class="btn btn-green btn-custom">
								<div>
									<span class="fs-30">Naive <br> Bayes</span>
								</div>
							</a>
						</div>
						<div class="col-xs-6 col-md-3">
							<a href="https://www.teamtrainit.com/demo/algoritma/dempster" class="btn btn-red btn-custom">
								<div>
									<span class="fs-20">Dempster <br> Shafer</span>
								</div>
							</a>
						</div>
						<div class="col-xs-6 col-md-3">
							<a href="https://www.teamtrainit.com/demo/algoritma/fuzzy" class="btn btn-orange btn-custom">
								<div>
									<span class="fs-20">Fuzzy</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 text-justify">
					<h2 class="fs-40">Algoritma Lainnya</h2>
					<p>
						Trainit memberikan pelatihan membuat sistem dengan ALGORITMA yang diinginkan siswa secara lengkap. Mulai dari desain, perancangan sistem, perhitungan algoritma, database, sampai penerapan semua materi menjadi 1 aplikasi jadi.

						<br>
						<br>
						Silahkan klik link disamping untuk melihat algoritma lainnya.
					</p>
				</div>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>


	<script>
		$(window).scroll(function() {
			if ($(document).scrollTop() > 400) {
				$('.navbar').addClass('navbar-semitransparan');
				$('.navbar').removeClass('navbar-transparan');
			} else {
				$('.navbar').removeClass('navbar-semitransparan');
				$('.navbar').addClass('navbar-transparan');
			}
		});
	</script>

	<script>
		$(document).on('click', 'a[href^="#"]', function (event) {
			event.preventDefault();

			$('html, body').animate({
				scrollTop: $($.attr(this, 'href')).offset().top
			}, 1000);
		});
	</script>
</body>
</html>