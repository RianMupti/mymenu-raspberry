<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<div class="row">
		<?php foreach ($menu as $m) : ?>

			<div class="col-md-3 pb-1">
				<div class="card text-center text-dark">
					<div class="card-header <?= $m['status']; ?>">
						<?= $m['name']; ?>
					</div>
					<div class="card-body ">
						<h1><i class="<?= $m['icon']; ?>"></i></h1>
						<h5 class="card-text "><?= $m['status']; ?></h5>
						<!-- <button class="btn btn-primary menu-tombol text-white" data-name="<?= $m['name']; ?>" data-status="<?= $m['status']; ?>"><?= $m['button']; ?> </button> -->
						<a class="btn btn-primary menu-tombol text-white" href="<?= base_url('user/') ?>menu?name=<?= $m['name']; ?>&status=<?= $m['status']; ?>"><?= $m['button']; ?> </a>
					</div>
				</div>
			</div>

		<?php endforeach; ?>

		<div class="col-md-3 pb-1">
			<div class="card text-center text-dark">
				<div class="card-header On">
					Camera
				</div>
				<div class="card-body ">
					<h1><i class="fas fa-video"></i></h1>
					<h5 class="card-text ">On</h5>
					<a class="btn btn-primary menu-tombol text-white" href="http://sv1.septiandari.site" target="_blank">View</a>
				</div>
			</div>
		</div>
	</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->