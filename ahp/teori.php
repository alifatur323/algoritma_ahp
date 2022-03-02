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
	<?php $aktif="teori"; ?>
	<nav class="navbar navbar-semitransparan navbar-fixed-top">
		<?php include 'navbar.php'; ?>
	</nav>

	<div class="mt-150">
		<div class="container">
			<h2 class="fs-40">Pengertian AHP</h2>
			<hr>
			<p class="text-justify ">
				Sebelum masuk ke AHP, kita harus tahu dulu kalau AHP termasuk dalam Sistem Pendukung Keputusan (SPK) / <i>Decision Support System</i> (DSS), bukan Sistem Pakar. DSS adalah sistem informasi interaktif yang menyediakan informasi, pemodelan, dan pemanipulasian data. Sistem digunakan untuk pengambilan keputusan dalam situasi yang semiterstruktur dan situasi yang tidak terstruktur, dimana tak seorangpun tahu secara pasti keputusan seharusnya dibuat.
				<br>
				<br>

				Metode <b><i>Analitycal Hierarcy Process (AHP)</i></b> dikembangkan oleh THomas L. Saaty pada tahun 70-an ketika di Warston School. Metode AHP merupakan salah satu metode yang dapt digunakan dalam sistem pengambilan keputusan dengan memerhatikan faktor-faktor persepsi, preferensi, pengalaman, dan intuisi. AHP menggabungkan penilaian nilai pribadi ke dalam suatu cara yang logis.
				<br>
				<br>
				Dalam menyelesaikan permasalahan dengan AHP, ada beberapa prinsip yang harus dipahami, yaitu:
				<ol class="fs-20">
					<li class="mb-10">
						Membuat hierarki
						<br>
						Sistem yang kompleks dapat dipahami dengan memecahnya menjadi elemen-elemen pendukung, menyusun elemen secara hierarki, dan menggabungkannya.
					</li>
					<li class="mb-10">
						Penilaian Kriteria dan alternative
						<br>
						Kriteria dan alternative dilakukan dengan perbandingan berpasangan. Menurut Saaty (1988) dalam buku Kusrini (2017), untuk berbagai persoalan skala 1 sampai 9 adalah skala terbaik untuk mengekspresikan pendapat. Berikut skala perbandingan Saaty :
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Intensitas Kepentingan</th>
									<th>Keterangan</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Kedua elemen sama pentingnya.</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Elemen yang satu sedikit lebih penting daipada elemen yang lain</td>
								</tr>
								<tr>
									<td>5</td>
									<td>Elemen yang satu lebih penting daripada elemen lainnya</td>
								</tr>
								<tr>
									<td>7</td>
									<td>Satu elemen jelas lebih mutlak penting daipada elemen lainnya</td>
								</tr>
								<tr>
									<td>9</td>
									<td>Satu elemen mutlak penting daripada elemen lainnya</td>
								</tr>
								<tr>
									<td>2,4,6,8</td>
									<td>Nilai-nilai antara dua nilai peryimbangan yang berdekatan</td>
								</tr>
								<tr>
									<td>Kebalikan</td>
									<td>
										Jika aktivitas i mendapat satu angka dibandingkan dengan aktivitas j, maka j memiliki nili kebalikna dibandingkan dengan i.
									</td>
								</tr>
							</tbody>
						</table>
					</li>

					<li class="mb-10">
						Menentukan prioritas (Synthesis of priority)
						<br>
						Untuk setiap kriteria dan alternative, perlu dilakukan perbandingan berpasangan. Nilai-nilai perbandingan relative dari alternative kriteria bias disesuaikan dengan judgement  yang telah ditentukan untuk menghasilkan bobot dan prioritas. Bobot dan prioritas dihitung dengan memanipulasi matriks atau melalui penyelesaian persamaan matematika.
					</li>

					<li class="mb-10">
						Konsistensi logis (Logical consistency)
						<br>
						Konsistensi memiliki dua makna. Pertama obyek yang serupa bisa dikelompokkan sesuai dengan keseragaman dan relevansi. Kedua menyangkut tingkat hubungan antar obyek yang diasarkan pada kriteria tertentu.
					</li>
				</ol> 
			</p>
		</div>
	</div>

	

	<?php include 'footer.php'; ?>
</body>
</html>