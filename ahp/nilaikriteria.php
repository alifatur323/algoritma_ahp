<h3 class="fs-30">Nilai Kriteria</h3>
<hr>

<form method="post">
	<?php
	if (isset($_POST['jumlah_bobot']))
	{
		$data= $kriteria_bobot->tambah_otomatis($_POST['jumlah_bobot']);
	}
	?>
	<div class="table">
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
				<?php $nobaris = 1; ?>				
				<?php foreach ($dtk as $key => $value): ?>
					<tr>
						<td><b><?php echo $value['nama_kriteria'] ?></b></td>

						<?php $nokolom = 1; ?>
						<?php foreach ($dtk as $key_s => $value_s): ?>								
							<?php $dtkb = $kriteria_bobot->tampil($value['id_kriteria'], $value_s['id_kriteria']) ?>	
							<?php if ($nobaris == $nokolom): ?>
								<td>
									<input type="text" readonly="" class="form-control" name="jumlah_bobot[<?php echo $value['id_kriteria'] ?>][<?php echo $value_s['id_kriteria'] ?>]" value="1">
								</td>
							<?php elseif($nobaris > $nokolom): ?>
								<td>
									<input type="text" readonly="" class="form-control" value="<?php echo $dtkb['jumlah_bobot'] ?>">
								</td>
							<?php else: ?>
								<td>
									<input type="text" class="form-control" name="jumlah_bobot[<?php echo $value['id_kriteria'] ?>][<?php echo $value_s['id_kriteria'] ?>]" value="<?php echo $dtkb['jumlah_bobot'] ?>" onchange="submit();">
								</td>
							<?php endif ?>				
							<?php $nokolom +=1; ?>
						<?php endforeach ?>
					</tr>
					<?php $nobaris +=1; ?>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</form>