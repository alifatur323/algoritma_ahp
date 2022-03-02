<h3 class="fs-30">Alternatif</h3>
<hr>
<div class="table">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Alternatif</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $dta = $alternatif->tampil(); ?>
			<?php foreach ($dta as $key => $value): ?>
				<tr>
					<td><?php echo $key+=1 ?></td>
					<td><?php echo $value['nama_alternatif'] ?></td>
					<td>
						<a href="" class="btn btn-warning btn-xs disabled" disabled="">Ubah</a>
						<a href="" class="btn btn-danger btn-xs disabled" disabled="">Hapus</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>