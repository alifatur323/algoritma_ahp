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
	<?php $aktif="penerapan"; ?>
	<nav class="navbar navbar-semitransparan navbar-fixed-top">
		<?php include 'navbar.php'; ?>
	</nav>

	<div class="mt-150">
		<div class="container">
			<h2 class="fs-40">Penerapan AHP</h2>
			<hr>

			<ul class="fs-20 mb-50">
				<li>Kapan sebaiknya aku menggunakan AHP?</li>
				<li>Apa saja yang aku siapkan untuk membuat sistem dengan metode AHP?</li>
				<li>Kasus apa yang cocok diterapkan dalam metode AHP?</li>
			</ul>
			<h3>AHP Cocok Untuk Kasus Seperti Apa</h3>
			<p class="fs-20">
				Seringkali ada pertanyaan diatas muncul ketika mau membuat sistem menggunakan metode AHP. Karena itu, disini kami jelaskan kasus apa yang cocok menggunakan metode AHP dalam penilaiannya dan langkah apa saja yang perlu disiapkan.
				<br>
				<br>

				Metode <b><i>Analitycal Hierarcy Process (AHP)</i></b> sangat cocok digunakan untuk menggabungkan penilaian nilai pribadi ke dalam suatu cara yang logis. Misal ada penilaian pribadi seperti persepsi, preferensi, pengalaman, dan intuisi. Lalu penilaian pribadi tersebut diolah sedemikian rupa oleh AHP, sehingga menjadi bentuk angka yang mudah dihitung.
				<br>
				<br>

				Contoh kasus yang menggunakan AHP dalam penilaiaanya adalah:
			</p>
			<ol class="fs-20">
				<li>Pemilihan karyawan terbaik berdasarkan kriteria pimpinan</li>
				<li>Pemilihan produk paling cocok berdasarkan keinginan customer</li>
				<li>Dll</li>
			</ol>
			<br>
			<br>

			<p class="fs-20">
				<h3>Langkah Langkah Apasaja Dalam Menggunakan Algoritma AHP?</h3>
				Jika ingin membuat sistem menggunakan penerapan perhitungan AHP, maka langkah-langkah yang harus disiapkan adalah:
			</p>
			<ol class="fs-20">
				<li class="mb-10">Menentukan obyek yang akan menjadi bahan penilaian</li>
				<li class="mb-10">
					Mendapatkan data kriteria penilaian berdasarkan keinginan obyek.
					<br>
					Data kriteria adalah data penilaian yang akan dimasukkan sebagai acuan perhitungan. Misal kedisiplinan, kesopanan, pengalaman, dll.
					<br>
					Saat menggali data kriteria, jangan lupa tanyakan nilai perkriteria dengan skala perbandingan berpasangan menurut Saaty. Yaitu dari skala 1 sampai 9.
					<br>
					<small><a href="teori.php">Silahkan klik disini jika lupa skala perbandingan menurut Saaty</a></small>
				</li>
				<li class="mb-10">
					Mendapatkan data alternatif dari obyek
					<br>
					Data alternatif adalah apa yang akan dinilai. Misal data karyawan dan data produk.
				</li>
				<li class="mb-10">
					Setelah mendapat semua data yang dibutuhkan, langkah selanjutnya adalah menghitung data tersebut ke dalam teori AHP, sehingga menjadi hasil pasti berupa ranking. Nantinya ranking tersebut digunakan untuk membantu obyek dalam memutuskan masalahnya.
					<br>
					<small><a href="teori.php">Silahkan klik disini untuk melihat langkah perhitungan AHP</a></small>
				</li>
			</ol>
		</div>
	</div>

	

	<?php include 'footer.php'; ?>
</body>
</html>