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

					<li class="sidebar-item">
						<a class="sidebar-link" href="keranjang.php">
              <i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">Keranjang</span>
            </a>
					</li>

          <li class="sidebar-item active">
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
	<h2>Histori Pembelian Produk</h2>
	<table class="table table-hover table-striped">
    <thead>
        <th>NO</th><th>Tanggal Pembelian</th><th>Nama Produk</th><th>Harga</th><th>Jumlah</th><th>Metode Pembayaran</th><th>Total</th>
    </thead>
    <tbody>
        <?php
        include "koneksi.php";
        $qry_histori=mysqli_query($conn, "select * from pembelian_produk order by id_pembelian_produk desc");
        $no=0;
        while($dt_histori=mysqli_fetch_array($qry_histori)){
            $no++;
            //menampilkan produk yang dibeli
            $produk_dibeli="<ol>";
            $qry_produk=mysqli_query($conn, "select * from detail_pembelian_produk join produk on produk.id_produk=detail_pembelian_produk.id_produk where id_pembelian_produk='".$dt_histori['id_pembelian_produk']."'");
            while($dt_produk=mysqli_fetch_array($qry_produk)){
                $produk_dibeli.="<li>".$dt_produk['nama_produk']."</li>";
            }
            $produk_dibeli.="</ol>";
            $produk_harga="<ol>";
            $qry_produk=mysqli_query($conn, "select * from detail_pembelian_produk join produk on produk.id_produk=detail_pembelian_produk.id_produk where id_pembelian_produk='".$dt_histori['id_pembelian_produk']."'");
            while($dt_produk=mysqli_fetch_array($qry_produk)){
            $produk_harga.="<li>".$dt_produk['harga']."</li>";
            }
            $produk_harga.="</ol>";

            $produk_jumlah="<ol>";
            $qry_produk=mysqli_query($conn, "select * from detail_pembelian_produk join produk on produk.id_produk=detail_pembelian_produk.id_produk where id_pembelian_produk='".$dt_histori['id_pembelian_produk']."'");
            while($dt_produk=mysqli_fetch_array($qry_produk)){
            $produk_jumlah.="<li>".$dt_produk['qty']."</li>";
            }
            $produk_jumlah.="</ol>";

            $metode_pembayaran="<ol>";
            $qry_produk=mysqli_query($conn, "select * from detail_pembelian_produk join produk on produk.id_produk=detail_pembelian_produk.id_produk where id_pembelian_produk='".$dt_histori['id_pembelian_produk']."'");
            while($dt_produk=mysqli_fetch_array($qry_produk)){
              $metode_pembayaran.="<li>".$dt_produk['metode_pembayaran']."</li>";
            }
            $metode_pembayaran.="</ol>";

            $produk_total="<ol>";
            $qry_produk=mysqli_query($conn, "select * from detail_pembelian_produk join produk on produk.id_produk=detail_pembelian_produk.id_produk where id_pembelian_produk='".$dt_histori['id_pembelian_produk']."'");
            while($dt_produk=mysqli_fetch_array($qry_produk)){
            $produk_total.="<li>".$dt_produk['qty']*$dt_produk['harga']."</li>";
            }
            $produk_total.="</ol>";
            ?>
            <tr>
            <td><?=$no?></td>
            <td><?=$dt_histori['tgl_beli']?></td>
            <td><?=$produk_dibeli?></td>
            <td><?=$produk_harga?></td>
            <td><?=$produk_jumlah?></td>
            <td><?=$metode_pembayaran?></td>
            <td><?=$produk_total?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
    </table>
				</div>
			</main>

			<?php include "footer.php"?>

	<script src="js/app.js"></script>

</body>

</html>