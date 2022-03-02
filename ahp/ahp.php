<h3 class="fs-30">Perhitungan AHP</h3>
<hr>

<div class="panel panel-default">
	<div class="panel-heading">
		Hasil Perhitungan Kriteria
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Kriteria</th>
						<?php $dtk = $kriteria->tampil(); ?>
						<?php foreach ($dtk as $key => $value): ?>
							<th><?php echo $value['nama_kriteria'] ?></th>
						<?php endforeach ?>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($dtk as $key => $value): ?>
						<tr>
							<td><b><?php echo $value['nama_kriteria'] ?></b></td>
							<?php foreach ($dtk as $key_s => $value_s): ?>

								<?php $dtkb = $kriteria_bobot->tampil($value['id_kriteria'], $value_s['id_kriteria']) ?>					
								<td><?php echo $dtkb['jumlah_bobot'] ?></td>
							<?php endforeach ?>
						</tr>
					<?php endforeach ?>
					<tr>
						<td><b>Jumlah Bobot</b></td>
						<?php foreach ($dtk as $key => $value): ?>								
							<td>
								<?php
								$dt_perbaris = $kriteria_bobot->jumlah_perbaris($value['id_kriteria']);
								echo round($dt_perbaris['jumlah_bobot'], 2);
								?>
							</td>
						<?php endforeach ?>															
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		Matrix Nilai Kriteria
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Kriteria</th>
						<?php foreach ($dtk as $key => $value): ?>
							<th><?php echo $value['nama_kriteria'] ?></th>
						<?php endforeach ?>
						<th>Jumlah</th>
						<th>Prioritas</th>
					</tr>
				</thead>
				<tbody>						
					<?php $array_prioritas = array(); ?>
					<?php foreach ($dtk as $key => $value): ?>
						<tr>
							<td><b><?php echo $value['nama_kriteria'] ?></b></td>
							<?php $jumlah_normalisasi = 0; ?>
							<?php foreach ($dtk as $key_s => $value_s): ?>

								<?php $dtkb = $kriteria_bobot->tampil($value['id_kriteria'], $value_s['id_kriteria']) ?>
								<?php $dt_perbaris = $kriteria_bobot->jumlah_perbaris($value_s['id_kriteria']); ?>
								<?php $normalisasi = round($dtkb['jumlah_bobot'] / $dt_perbaris['jumlah_bobot'], 2) ?>

								<td>
									<?php echo $dtkb['jumlah_bobot'] ?> / <?php echo round($dt_perbaris['jumlah_bobot'],2) ?> =
									<?php echo $normalisasi ?>
								</td>
								<?php $jumlah_normalisasi +=$normalisasi; ?>
							<?php endforeach ?>

							<td><?php echo $jumlah_normalisasi ?></td>
							<?php $prioritas = round($jumlah_normalisasi / count($dtk), 2); ?>
							<?php $array_prioritas[$value['id_kriteria']] = $prioritas; ?>
							<td><?php echo $prioritas ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		Matrix Penjumlahan Setiap Baris
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Kriteria</th>
						<?php foreach ($dtk as $key => $value): ?>
							<th><?php echo $value['nama_kriteria'] ?></th>
						<?php endforeach ?>
						<th>Jumlah Per Baris</th>
					</tr>
				</thead>
				<tbody>
					<?php $array_ppk = array(); ?>
					<?php foreach ($dtk as $key => $value): ?>
						<tr>
							<td><b><?php echo $value['nama_kriteria'] ?></b></td>
							<?php $jumlah_ppk = 0; ?>
							<?php foreach ($dtk as $key_s => $value_s): ?>
								<?php $dtkb = $kriteria_bobot->tampil($value['id_kriteria'], $value_s['id_kriteria']) ?>
								<?php $prioritas_per_kriteria = round($array_prioritas[$value_s['id_kriteria']] * $dtkb['jumlah_bobot'], 2) ?>
								<td>
									<?php echo round($array_prioritas[$value_s['id_kriteria']],2) ?> * <?php echo $dtkb['jumlah_bobot'] ?> = 
									<?php echo $prioritas_per_kriteria ?>
								</td>

								<?php $jumlah_ppk += $prioritas_per_kriteria; ?>
							<?php endforeach ?>
							<td><?php echo $jumlah_ppk ?></td>
							<?php $array_ppk[$value['id_kriteria']] = $jumlah_ppk; ?>
						</tr>
					<?php endforeach ?>						
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		Hitung Ratio Konsistensi
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Kriteria</th>
						<th>Jumlah Per Baris</th>
						<th>Prioritas</th>
						<th>Hasil</th>
					</tr>
				</thead>
				<tbody>
					<?php $jumlah_hitung_ratio = 0; ?>
					<?php foreach ($dtk as $key => $value): ?>
						<tr>
							<td><b><?php echo $value['nama_kriteria'] ?></b></td>
							<td><?php echo $array_ppk[$value['id_kriteria']] ?></td>
							<td><?php echo $array_prioritas[$value['id_kriteria']]; ?></td>
							<?php $hitung_ratio = $array_ppk[$value['id_kriteria']] + $array_prioritas[$value['id_kriteria']] ?>
							<td><?php echo $hitung_ratio ?></td>
							<?php $jumlah_hitung_ratio += $hitung_ratio ?>
						</tr>
					<?php endforeach ?>
					<tr>
						<td colspan="3"><b>Jumlah Ratio</b></td>
						<td><?php echo $jumlah_hitung_ratio ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		Perhitungan Akhir Kriteria
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-sm-6">
				<p>
					<?php $lamda_max = round($jumlah_hitung_ratio / count($dtk), 2); ?>
					<b>Lamda Max</b> = Jumlah Ratio / n Kriteria = <?php echo $lamda_max ?> 
				</p>
				<p>
					<?php $ci = ($lamda_max - count($dtk)) / (count($dtk) - 1) ?>
					<b>Consistency Index (CI)</b> = (Lamda Max - n Kriteria) / (n Kriteria - 1) = <?php echo $ci ?> 
				</p>
				<p>
					<?php $ir = index_random(count($dtk)); ?>
					IR = <?php echo $ir ?> * (Sesuai tabel Indeks Random yang telah ditentukan)
					<br>
					<?php $cr = round($ci /  $ir, 2) ?>
					<b>Consistency Ratio (CR)</b> = CI / IR = <?php echo $cr?> 
				</p>
				<p>
					Karena CR < IR atau <?php echo $cr ?> < <?php echo $ir ?>, maka rasio konsistensi dapat diterima
				</p>
			</div>
			<div class="col-sm-6">
				<div class="table-responsive">
					<table class="table table-bordered">
						<tr>
							<th width="30%">Jumlah</th>
							<td><?php echo $jumlah_hitung_ratio ?></td>
						</tr>
						<tr>
							<th>n Kriteria</th>
							<td><?php echo count($dtk) ?></td>
						</tr>
						<tr>
							<th>Lamda Max</th>
							<td><?php echo $lamda_max ?></td>
						</tr>
						<tr>
							<th>CI</th>
							<td><?php echo $ci ?></td>
						</tr>
						<tr>
							<th>CR</th>
							<td><?php echo $cr ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $dtk = $kriteria->tampil(); ?>
<?php $array_prioritas = array(); ?>
<?php foreach ($dtk as $key => $value): ?>
	<?php $jumlah_normalisasi = 0; ?>
	<?php foreach ($dtk as $key_s => $value_s): ?>
		<?php $dtkb = $kriteria_bobot->tampil($value['id_kriteria'], $value_s['id_kriteria']) ?>
		<?php $dt_perbaris = $kriteria_bobot->jumlah_perbaris($value_s['id_kriteria']); ?>	
		<?php $normalisasi = round($dtkb['jumlah_bobot'] / $dt_perbaris['jumlah_bobot'], 2) ?>	
		<?php $jumlah_normalisasi +=$normalisasi; ?>
	<?php endforeach ?>
	<?php $prioritas = round($jumlah_normalisasi / count($dtk), 2); ?>
	<?php $array_prioritas[$value['id_kriteria']] = $prioritas; ?>
<?php endforeach ?>

<div class="panel panel-default">
	<div class="panel-heading">
		Hasil Prioritas kali Nilai Alternatif
	</div>
	<div class="panel-body">
		<div class="table=responive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Aternatif</th>
						<?php $dtk = $kriteria->tampil(); ?>
						<?php foreach ($dtk as $key => $value): ?>
							<th><?php echo $value['nama_kriteria'] ?></th>
						<?php endforeach ?>
						<th>Hasil Prioritas</th>
					</tr>
				</thead>
				<tbody>
					<?php $dta = $alternatif->tampil(); ?>
					<?php $array_ranking = array(); ?>
					<?php foreach ($dta as $key_a => $value_a): ?>
						<tr>
							<td><?php echo $key_a+=1 ?></td>
							<td><?php echo $value_a['nama_alternatif'] ?></td>
							<?php $penjumlahan = 0; ?>
							<?php foreach ($dtk as $key_k => $value_k): ?>
								<?php $dtan = $alternatif_nilai->tampil($value_a['id_alternatif'], $value_k['id_kriteria']); ?>
								<?php $perkalian = $dtan['nilai'] * $array_prioritas[$value_k['id_kriteria']] ?>
								<td><?php echo $perkalian ?></td>
								<?php $penjumlahan +=$perkalian; ?>
							<?php endforeach ?>
							<td><?php echo $penjumlahan ?></td>
						</tr>

						<?php $array_ranking[$value_a['id_alternatif']] = $penjumlahan ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>


<?php arsort($array_ranking) ?>
<div class="panel panel-default">
	<div class="panel-heading">
		Hasil Perankingan
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Aternatif</th>
						<?php $dtk = $kriteria->tampil(); ?>
						<?php foreach ($dtk as $key => $value): ?>
							<th><?php echo $value['nama_kriteria'] ?></th>
						<?php endforeach ?>
						<th>Hasil Prioritas</th>
						<th>Ranking</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; ?>
					<?php foreach ($array_ranking as $key_a => $value_a): ?>
						<tr>
							<td><?php echo $no ?></td>
							<td>
								<?php $dta = $alternatif->ambil($key_a); ?>
								<?php echo $dta['nama_alternatif'] ?>
							</td>
							<?php foreach ($dtk as $key_k => $value_k): ?>
								<td>
									<?php $dtan = $alternatif_nilai->tampil($key_a, $value_k['id_kriteria']); ?>			
									<?php $perkalian = $dtan['nilai'] * $array_prioritas[$value_k['id_kriteria']] ?>
									<?php echo $perkalian ?>
								</td>
							<?php endforeach ?>
							<td><?php echo $value_a ?></td>
							<td><?php echo $no ?></td>
						</tr>
						<?php $no+=1 ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>