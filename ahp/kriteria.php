<h3 class="fs-30">Kriteria</h3>
<hr>
<div class="table">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Kriteria</th>
				<th>Nama Kriteria</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $dtk = $kriteria->tampil(); ?>
			<?php foreach ($dtk as $key => $value): ?>
				<tr>
					<td><?php echo $key+=1 ?></td>
					<td><?php echo $value['kode_kriteria'] ?></td>		
					<td><?php echo $value['nama_kriteria'] ?></td>
					<td>
						<a href="" class="btn btn-warning btn-xs disabled disabled=">Ubah</a>
						<a href="?hapus&id=<?php echo $value['id_kriteria'] ?>" class="btn btn-danger btn-xs disabled" disabled="">Hapus</a>
					</td>	
				<?php endforeach ?>
			</tbody>
		</table>
	</div>