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
<?php
include "header.php";
?>

<main class="content">
	<div class="container-fluid p-0">
    <h3>Tampil Produk</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th><th>NAMA PRODUK</th><th>DESKRIPSI</th><th>HARGA</th><th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $qry_produk=mysqli_query($conn,"select * from produk");
            $no=0;
            while($data_produk=mysqli_fetch_array($qry_produk)){
            $no++;?>
            <tr>
            <td><?=$no?></td><td><?=$data_produk['nama_produk']?></td>
            <td><?=$data_produk['deskripsi']?></td>
            <td><?=$data_produk['harga']?></td>
            <p><td><a href="ubah_produk.php?id_produk=<?=$data_produk['id_produk']?>" class="btn btn-success">Ubah</a></p>
             <a href="hapus_produk.php?id_produk=<?=$data_produk['id_produk']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
        </table>
        <td><a href="tambah_produk.php" class="btn btn-success">Tambah Produk</a>
    </div>
    </div>
    </main>

<script src="js/app.js"></script>