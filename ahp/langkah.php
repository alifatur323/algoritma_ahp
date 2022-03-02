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
	<?php $aktif="langkah"; ?>
	<nav class="navbar navbar-semitransparan navbar-fixed-top">
		<?php include 'navbar.php'; ?>
	</nav>

	<div class="mt-150">
		<div class="container">
			<h2 class="fs-40">Langkah-Langkah Perhitungan AHP</h2>
			<hr>
			<p class="fs-20">
				Prosedur / langkah-langkah perhitungan dalam menggunakan metode AHP adalah sebagai berikut:
			</p>
			<ol class="fs-20">
				<li class="mb-10">
					Menentukan data kriteria.
				</li>
				<li class="mb-10">
					Menentukan nilai kriteria menggunakan perbandingan berpasangan berdasarkan skala perbandingan 1-9 (sesuai teori). Data ini menjadi data matrix.
				</li>
				<li class="mb-10">
					Menjumlahkan nilai pada setiap kolom matrix yang dibuat sebelumnya.
				</li>
				<li class="mb-10">
					Membagi setiap nilai dari kolom dengan total kolom yang bersangkutan untuk memperoleh normalisasi matriks. Data yang dihasilkan adalah data normalisasi.
				</li>
				<li class="mb-10">
					Menjumlahkan nilai-nilai dari setiap baris dan membaginya dengan jumlah elemen untuk mendapatkan nilai rata-rata. Data yang dihasilkan adalah data prioritas per kriteria
					<br>
					<b>*Catatan:</b>
					<br>
					Sebenarnya, perhitungan kriteria selesai sampai disini. Tetapi dalam pembuatan keputusan, penting untuk mengetahui seberapa baik konsistensi yang ada karena kita tidak menginginkan keputusan berdasarkan pertimbangan dengan konsistensi yang rendah. Karena itu lanjut dengan menghitung konsistensi.
					<br>
					<b>Dan data prioritas ini jugalah yang dijadikan sebagai nilai perkriteria.</b>
				</li>
				<li class="mb-10">
					Kalikan setiap nilai pada kolom pertama dengan prioritas relative elemen pertama, nilai pada kolom kedua dengan prioritas relative elemen kedua, dan seterusnya.
				</li>
				<li class="mb-10">
					Jumlahkan setiap baris
				</li>
				<li class="mb-10">
					Hasil dari penjumlahan baris dibagi dengan elemen prioritas reltif yang bersangkutan.
				</li>
				<li class="mb-10">
					Jumlahkan hasil bagi diatas dengan banyaknya elemen yang ada, hasilnya disebut λ maks
				</li>
				<li class="mb-10">
					Menghitung Consistency Index (CI) dengan rumus : CI=(λ maks - n) / n, dimana n adalah banyaknya elemen.
				</li>
				<li class="mb-10">
					Menghitung Rasio Konsistensi / Consistency Ratio (CR) dengan rumus : CR=CI/IR, dimana IR adalah Indeks Random Consistency. Daftar IR bisa dilihat dalam tabel berikut.
					<br>
					<div class="row">
						<div class="col-md-offset-3 col-md-6">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th width="20%">Ukuran Matriks</th>
										<th width="20%">Nilai IR</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1,2</td>
										<td>0.00</td>
									</tr>
									<tr>
										<td>3</td>
										<td>0.58</td>
									</tr>
									<tr>
										<td>4</td>
										<td>0.90</td>
									</tr>
									<tr>
										<td>5</td>
										<td>1.12</td>
									</tr>
									<tr>
										<td>6</td>
										<td>1.24</td>
									</tr>
									<tr>
										<td>7</td>
										<td>1.32</td>
									</tr>
									<tr>
										<td>8</td>
										<td>1.41</td>
									</tr>
									<tr>
										<td>9</td>
										<td>1.45</td>
									</tr>
									<tr>
										<td>10</td>
										<td>1.49</td>
									</tr>
									<tr>
										<td>11</td>
										<td>1.51</td>
									</tr>
									<tr>
										<td>12</td>
										<td>1.48</td>
									</tr>
									<tr>
										<td>13</td>
										<td>1.56</td>
									</tr>
									<tr>
										<td>14</td>
										<td>1.57</td>
									</tr>
									<tr>
										<td>15</td>
										<td>1.59</td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</li>
				<li class="mb-10">
					Memeriksa konsistensi hierarki. Jika nilaiany lebih dari 10% , maka penilaian data judgement harus diperbaiki. Namun jika rasio konsistensi (CI/IR kurang dari sama dengan 0,1, maka hasil perhitungan dinyatakan benar.)
				</li>
			</ol>
		</div>
	</div>

	

	<?php include 'footer.php'; ?>
</body>
</html>