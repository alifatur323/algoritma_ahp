<h3 class="fs-30">Ubah Alternatif</h3>
<hr>
<div class="table">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Aternatif</th>
				<?php $dtk = $kriteria->tampil(); ?>
				<?php foreach ($dtk as $key => $value): ?>
					<th><?php echo $value['nama_kriteria'] ?></th>
				<?php endforeach ?>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $dta = $alternatif->tampil(); ?>
			<?php foreach ($dta as $key_a => $value_a): ?>
				<tr>
					<td><?php echo $key_a+=1 ?></td>
					<td><?php echo $value_a['nama_alternatif'] ?></td>
					<?php foreach ($dtk as $key_k => $value_k): ?>
						<?php $dtan = $alternatif_nilai->tampil($value_a['id_alternatif'], $value_k['id_kriteria']); ?>
						<td><?php echo $dtan['nilai'] ?></td>
					<?php endforeach ?>
					<td>
						<a href="ubah_alternatif_nilai.php?id=<?php echo $value_a['id_alternatif'] ?>" class="btn btn-warning btn-xs disabled" disabled="">Ubah</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>