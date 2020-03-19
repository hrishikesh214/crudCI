<?php require 'header.php'; ?>
<div class="container-fluid">
	<table class="table table-condensed table-dark">
		<tr class="text-white border border-dark">
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th></th>
			<th></th>
		</tr>
		<?php foreach($results as $result): ?>
			<tr>
				<td><?=$result['id'] ?></td>
				<td><?=$result['firstname'] ?></td>
				<td><?=$result['lastname'] ?></td>
				<td>
					<a class="btn btn-danger" href="<?=base_url() ?>Delete/index/?qid=<?=$result['id'] ?>">Delete</a>
				</td>
				<td>
					<a class="btn btn-primary" href="<?=base_url() ?>Update/Show_form/?qid=<?=$result['id'] ?>">Update</a>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
</div>
<?php require 'footer.php '; ?>