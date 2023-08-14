<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>Welcome to CodeIgniter | Test Report Jasper</title>
	<link rel="icon" href="<?=base_url('assets/images/favicon.png');?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
		<main>
			<div class="py-5 text-center">
				<img class="d-block mx-auto mb-4" src="<?=base_url('assets/images/logo.svg');?>" alt="" width="200">
				<h1 class="d-inline">Welcome to CodeIgniter!</h1> <small class="small align-top">v<?= CodeIgniter\CodeIgniter::CI_VERSION ?></small>
			</div>
			<h2>
				<a href="reports">PDF report from Jasper Reports</a>
			</h2>
			<div id="body">
				<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

				<p>If you would like to edit this page you'll find it located at:</p>
				<code>application/views/welcome_message.php</code>

				<p>The corresponding controller for this page is found at:</p>
				<code>application/controllers/Welcome.php</code>

				<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="userguide4/">User Guide</a>.</p>
			</div>

			<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CodeIgniter\CodeIgniter::CI_VERSION . '</strong>' : '' ?></p>
		</main>
	</div>
    <!-- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
