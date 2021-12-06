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
include "header1.php";
include "koneksi.php";
$qry_detail_produk=mysqli_query($conn, "select * from produk where id_produk = '".$_GET['id_produk']."'");
$dt_produk=mysqli_fetch_array($qry_detail_produk);
?>
			<main class="content">
				<div class="container-fluid p-0">
                <h2>Beli Produk</h2>
<div class="row">
    <div class="col-md-4">
        <img src="foto_produk/<?=$dt_produk['foto']?>" class="card-img-top">
    </div>
    <div class="col-md-8">
        <form action="masukkankeranjang.php?id_produk=<?=$dt_produk['id_produk']?>" method="post">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <td>Nama Produk</td><td><?=$dt_produk['nama_produk']?></td>
                </tr>
                <tr>
                    <td>Deskripsi</td><td><?=$dt_produk['deskripsi']?></td>
                </tr>
                <tr>
                    <td>Harga</td><td><?=$dt_produk['harga']?></td>
                </tr>
                <tr>
                    <td>Jumlah Produk</td><td><input type="number" name="jumlah_produk" value="1"></td>
                </tr>
				<tr>
				<td> Metode Pembayaran </td>
				<td>
                    <select class="box-data" name="metode_pembayaran">
						<option disable selected hidden>Pilih metode pembayaran</option>
                        <option>Bank</option>
                        <option>Indomaret</option>
                        <option>Alfamart</option>
                        <option>Dana</option>
                        <option>OVO</option>
                        <option>COD</option>
                        </select>
				</td>
                </tr>
                <tr>
                    <td colspan="2"><input class="btn btn-success" type="submit" value="Beli"></td>
                </tr>
            </thead>
        </table>
    </form>
    </div>
</div>
				</div>
			</main>

			<?php include "footer.php"?>

	<script src="js/app.js"></script>

</body>

</html>