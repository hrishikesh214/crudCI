<!DOCTYPE html>
<html>
<head>
	<title>List</title>
	<style type="text/css">
		body{
			padding-top: 70px;
		}
		.link{
			text-decoration: none;
		}
		.link:hover{
			text-decoration: none;
		}
		.alike{
			word-spacing: 20px;
			font-size: 20px;
		}
	</style>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-dark fixed-top bg-primary">
	<span class="navbar-brand">CRUD</span>
	<span class="navbar-text">By PHP CodeIgniter</span>
</nav>
<div class="container alike container-fluid bg-dark text-white">
	<a href="<?=base_url() ?>Lister" class="text-white link">List</a>
	<a class="text-white link" href="<?=base_url() ?>Insert">Insert</a>
</div><br>