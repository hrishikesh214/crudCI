<?php require 'header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<form class="form" method="post" action="<?=base_url() ?>Update/Change?qid=<?=$_GET['qid'] ?>">	
				<div class="form-group">
					<legend>First Name</legend>
					<input class="form-control" type="text" value="<?=$oD[0]['firstname'] ?>" name= "fname">
				</div>
				<div class="form-group">
					<legend>Last Name</legend>
					<input class="form-control" value="<?=$oD[0]['lastname'] ?>" type="text" name= "lname">
				</div>
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-primary">
				</div>
			</form>
		</div>
		
		<div class="col-lg-6">
			<span class="text-success">
				<?php 
					if (isset($msg)) {
						echo $msg;
					}
				 ?>
			</span>
		</div>
	</div>
</div>

<?php require 'footer.php'; ?>