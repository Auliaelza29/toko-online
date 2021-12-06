<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Toko Online</title>

	<link href="css/app.css" rel="stylesheet">
</head>
<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand">
          <span class="align-middle">Toko Online</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages Petugas
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="index.php">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="tampil_produk.php">
              <i class="align-middle" data-feather="edit"></i> <span class="align-middle">Produk</span>
            </a>
					</li>
					
					<li class="sidebar-header">
						Account
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="profile.php">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
            </a>
					</li>

			<li class="sidebar-item">
						<a class="sidebar-link" href="logout.php">
              <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Logout</span>
            </a>
			</div>
		</nav>

        <?php
        include "header.php";
        ?>
				<div class="container mt-5">
						<div class="row d-flex justify-content-center">
							<div class="col-md-7">
								<div class="card p-3 py-4">
									<div class="text-center">  <img src="img/avatars/avatar.jpg"  width="100" class="rounded-circle"> </div>
									<div class="text-center mt-3">
									<h2 class="mt-2 mb-0"><?=$_SESSION['username']?></h2> <span><?=$_SESSION['level']?></span>
										<div class="px-4 mt-1">
											<p class="fonts">Telah bergabung sejak 2018</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
		
	<script src="js/app.js"></script>

</body>

</html>