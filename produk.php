<?php
session_start();
if($_SESSION['status_login']!=true){
    header('location: login.php');
}
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
						Pages Pelanggan
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="produk.php">
              <i class="align-middle" data-feather="shopping-bag"></i> <span class="align-middle">Produk</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="keranjang.php">
              <i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">Keranjang</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="histori_pembelian.php">
              <i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">Transaksi</span>
            </a>
					</li>

					<li class="sidebar-header">
						Account
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="profile1.php">
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
include "header1.php";
?>

<main class="content">
	<div class="container-fluid p-0">
    <h2>Daftar Produk</h2>
    <div class="row">
        <?php
        include "koneksi.php";
        $qry_produk=mysqli_query($conn, "select * from produk");
        while($dt_produk=mysqli_fetch_array($qry_produk)){
        ?>
            <div class="col-md-3">
                <div class="card">
                    <img src="foto_produk/<?=$dt_produk['foto']?>" class="card-img-top"  width="250"  height="600">
                    <div class="card-body">
                        <h5 class="card-title"><?=$dt_produk['nama_produk']?></h5>
                        <p class="card-text"><?=substr($dt_produk['deskripsi'],0,20)?></p>
                        <p class="card-text"><?=substr($dt_produk['harga'],0,20)?></p>
                        <a href="beli_produk.php?id_produk=<?=$dt_produk['id_produk']?>" class="btn btn-success">Beli</a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    </div>
    </main>
<?php
include "footer.php";
?>
<script src="js/app.js"></script>