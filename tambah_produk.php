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

					<li class="sidebar-item active">
						<a class="sidebar-link" href="tampil_produk.php">
              <i class="align-middle" data-feather="edit"></i> <span class="align-middle">Produk</span>
            </a>
					</li>

					<li class="sidebar-header">
						Account
					</li>

					<li class="sidebar-item">
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

        <?php include "header.php"; ?>

    <main class="content">
	<div class="container-fluid p-0">
    <div class="form-control">
    <h3>Tambah Produk</h3>
    <form action="proses_tambah_produk.php" method="post" enctype="multipart/form-data">
        <p>
            Nama Produk :
            <input type="text" name="nama_produk" value="" class="form-control">
        </p>
        <p>
            Deskripsi :
            <textarea name="deskripsi" class="form-control"
rows="4"></textarea>
        </p>
        <p>
            Harga :
            <input type="number" name="harga" value="" class="form-control">
        </p>
        <p>
        Foto Produk :
        <input type="file" name="foto" value="" class="form-control">
        </P>
        <td><a href="tampil_produk.php" class="btn btn-outline-danger">Kembali</a>
        <input type="submit" name="simpan" value="Tambah Produk" class="btn btn-success">
</form>
</div>
</div>
</main>
<?php include "footer.php"?>

<script src="js/app.js"></script>
</body>
</html>