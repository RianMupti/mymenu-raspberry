<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

</div>
<!-- /.container-fluid -->
<div class="row">

	<div class="col-md-5">

	<?= $this->session->flashdata('message'); ?>

		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Email</th>
					<th scope="col">Active?</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
			<?php $i = 1; ?>
			<?php foreach ($member as $m) : ?>
				<tr>
					<th scope="row"><?= $i++ ?></th>
					<td><?= $m['email']; ?> </td>
					<td>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" <?= check_access($m['id']); ?> data-id="<?= $m['id']; ?>" >
						</div>
					</td>
					<td><a href="<?= base_url('menu/delete/') . $m['id']; ?>" onclick="return confirm('Are you sure?');" class="badge badge-danger">Delete</a></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

</div>
<!-- End of Main Content -->
