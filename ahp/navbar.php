
<div class="container">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand fs-18 fw-10 fc-white" href="index.php">Trainit</a>
	</div>

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="teori.php" class="fs-18 fw-10 fc-white <?php if($aktif=="teori"){echo "active";} ?>">Teori AHP</a></li>
			<li><a href="penerapan.php" class="fs-18 fw-10 fc-white <?php if($aktif=="penerapan"){echo "active";} ?>">Penerapan AHP</a></li>
			<li><a href="langkah.php" class="fs-18 fw-10 fc-white <?php if($aktif=="langkah"){echo "active";} ?>">Langkah Perhitungan AHP</a></li>
			<li><a href="perhitungan.php" class="fs-18 fw-10 fc-white <?php if($aktif=="perhitungan"){echo "active";} ?>">Studi Kasus AHP</a></li>
			<?php if ($aktif=="index"): ?>
				<li><a href="#algoritma-lainnya" class="fs-18 fw-10 fc-white">Algoritma Lainnya</a></li>
			<?php else: ?>
				<li><a href="index.php" class="fs-18 fw-10 fc-white">Algoritma Lainnya</a></li>
			<?php endif ?>
		</ul>
	</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
