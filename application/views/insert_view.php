<?php require 'header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-lg-6 border-dark border">
			<form method="post" action="<?=base_url() ?>Insert/show">
				<table class="table table-condensed">
				<tr>
					<td>First Name : </td>
					<td><?php echo form_input(array('type'=>'text','name'=>'fname','placeholder'=>'First Name')); ?></td>
				</tr>
				<tr>
					<td>Last Name : </td>
					<td><?php echo form_input(array('type'=>'text','name'=>'lname','placeholder'=>'Last Name')); ?></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" class="btn btn-primary" name="submit" value="Insert"></td>
				</tr>
			</table>
		</form>
		</div>	
		<div class="col-lg-6">
			<span class="text-danger"><?php 
				if(isset($fname)){
					echo "<pre>";
					print_r($fname);
				}
			 ?></span>
		</div>
	</div>
</div>

<?php require 'footer.php'; ?>