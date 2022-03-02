<h3 class="fs-30">Ubah Alternatif</h3>
<hr>
<?php $dta = $alternatif->ambil($_GET['id']) ?>
<form method="post" class="form-horizontal">
	<div class="form-group">
		<label class="col-sm-2">Nama Alternatif</label>
		<div class="col-sm-5">
			<input readonly="" class="form-control" value="<?php echo $dta['nama_alternatif'] ?>">
		</div>
	</div>
	<?php $dtk = $kriteria->tampil(); ?>
	<?php foreach ($dtk as $key => $value): ?>
		<div class="form-group">
			<label class="col-sm-2"><?php echo $value['nama_kriteria'] ?></label>
			<div class="col-sm-5">
				<?php $dtan = $alternatif_nilai->tampil($_GET['id'], $value['id_kriteria']); ?>
				<input type="text" class="form-control" name="nilai[<?php echo $value['id_kriteria'] ?>]" value="<?php echo $dtan['nilai'] ?>">
			</div>
		</div>
	<?php endforeach ?>

	<div class="form-group">
		<label class="col-sm-2"></label>
		<div class="col-sm-5">
			<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
		</div>
	</div>
</form>

<?php
if (isset($_POST['simpan']))
{
	$alternatif_nilai->tambah($_GET['id'], $_POST['nilai']);
	echo "<script>location='tampil_alternatif_nilai.php';</script>";
}
?>