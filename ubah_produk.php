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
        <?php
        include "koneksi.php";
        $qry_get_produk=mysqli_query($conn, "SELECT * FROM `produk` WHERE id_produk = '".$_GET['id_produk']."'");
        $dt_produk=mysqli_fetch_array($qry_get_produk);
        ?>
        <h3>Ubah Produk</h3>
        <form action="proses_ubah_produk.php" method="post">
            <input type="hidden" name="id_produk" value="<?=$dt_produk['id_produk']?>">
            <p>
            Nama Produk :
            <input type="text" name="nama_produk" value= "<?=$dt_produk['nama_produk']?>" class="form-control"></p>
            <p>
            Deskripsi :
            <textarea name="deskripsi" class="form-control" rows="4"><?=$dt_produk['deskripsi']?></textarea></p>
            <p>
            <p>
            Harga :
            <input type="number" name="harga" value= "<?=$dt_produk['harga']?>" class="form-control"></p>
            <p>
            Foto Produk :
            <input type="file" name="foto" value="<?=$dt_produk['foto']?>" class="form-control"></p>
            <td><a href="tampil_produk.php" class="btn btn-outline-danger">Kembali</a>
            <input type="submit" name="simpan" value="Ubah Produk" class="btn btn-success">
    </form>
    </div>
    </main>
    <?php include "footer.php"?>

	<script src="js/app.js"></script>
    </body>
</html>