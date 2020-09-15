<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

	<?php if ($this->session->flashdata('message')) : ?>
		<div class="row">
			<div class="col-md-6">
				<div class="alert alert-success" role="alert">Password <?= $this->session->flashdata('message'); ?> has reset to "12345"</div>
			</div>
		</div>
	<?php endif; ?>

</div>
<!-- /.container-fluid -->
<div class="row">
    <?php foreach ($member as $user): ?>

	<div class="col-xl-3 pl-3 pb-3 pr-3">
		<div class="card">
			<img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail" alt="...">
			<div class="card-body">
				<h5 class="card-title"><?= $user['name']; ?></h5>
				<p class="card-text"><?= $user['email']; ?></p>
				<p class="card-text"><small class="text-muted">Member since<?= date('d F Y', $user['date_created']); ?></small></p>
                <a href="<?= base_url('admin/resetpassword/') . $user['id']; ?>" class="btn btn-danger">Reset Password</a>
			</div>
		</div>
	</div>
    <?php endforeach; ?>
</div>


</div>
<!-- End of Main Content -->
