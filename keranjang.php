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
						Pages Pelanggan
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="produk.php">
              <i class="align-middle" data-feather="shopping-bag"></i> <span class="align-middle">Produk</span>
            </a>
					</li>

					<li class="sidebar-item active">
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
				<h2>Daftar Produk di Keranjang</h2>
				<table class="table table-hover striped">
				<thead>
				<tr>
				<th>NO</th><th>Nama Produk</th><th>Harga</th><th>Jumlah</th><th>Metode Pembayaran</th><th>Subtotal</th><th>Aksi</th>
				</tr>
				</thead>
				<tbody>
				<?php
				foreach (@$_SESSION['cart'] as $key_produk => $val_produk): ?>
				<tr>
				<td><?=($key_produk+1)?></td><td><?=$val_produk['nama_produk']?></td>
				<td><?=$val_produk['harga']?></td>
				<td><?=$val_produk['qty']?></td>
				<td><?=$val_produk['metode_pembayaran']?></td>
				<td><?=$val_produk['harga']*$val_produk['qty']?></td>
				<td><a href="hapus_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>

				</tr>
				<?php endforeach ?>
				</tbody>
				</table>
				<a href="produk.php" class="btn btn-outline-success">Tambah Produk</a>
				<a href="checkout.php" class="btn btn-success">Check Out</a>

				</div>
			</main>

			<?php include "footer.php"?>

	<script src="js/app.js"></script>

</body>

</html>