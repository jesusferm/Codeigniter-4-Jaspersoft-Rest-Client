<?php
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="icon" href="<?= base_url('assets/images/fav.png'); ?>" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jasper Documents</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-4">
				<div class="py-2 text-center">
					<a href="/">
						<img class="d-block mx-auto mb-4" src="<?=base_url('assets/images/logo.svg');?>" alt="" width="200">
					</a>
					<h1 class="d-inline">Welcome to CodeIgniter!</h1> <small class="small align-top">v<?= CodeIgniter\CodeIgniter::CI_VERSION ?></small>
				</div>
				<h2>Test jasper reports</h2>
				<p>
					PDF: <a href="<?=base_url($pdf);?>" target="_blank"><?=base_url($pdf);?></a>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<embed src="<?=base_url($pdf);?>" type="application/pdf" width="100%" height="600px"/>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>