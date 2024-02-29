<?php
include "header.php";
include "navbar.php";
?>
<body>
	<style>
body {
    background-image:url(pija.jpg);
    background-repeat: no-repeat;
    background-size:cover;
}
	</style>
<div class="card mt-5">	
	<div class="card-body">
		<div class="row">
			<div class="col-sm-4">
				<div class="card bg-secondary text-white">
					<div class="card-body">
						Data Barang
						<?php
						include '../koneksi.php';
						$data_produk = mysqli_query($koneksi,"SELECT * FROM produk");
						$jumlah_produk = mysqli_num_rows($data_produk);
						?>
						<h3><?php echo $jumlah_produk; ?></h3>
						<a href="data_barang.php" class="btn btn-outline-primary btn-sm">Detail</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card bg-warning text-white">
					<div class="card-body">
						Data Pembelian
						<?php
						include '../koneksi.php';
						$data_penjualan = mysqli_query($koneksi,"SELECT * FROM penjualan");
						$jumlah_penjualan = mysqli_num_rows($data_penjualan);
						?>
						<h3><?php echo $jumlah_penjualan; ?></h3>
						<a href="pembelian.php" class="btn btn-outline-primary btn-sm">Detail</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card bg-info text-white">
					<div class="card-body">
						Data Pengguna
						<?php
						include '../koneksi.php';
						$data_petugas = mysqli_query($koneksi,"SELECT * FROM petugas");
						$jumlah_petugas = mysqli_num_rows($data_petugas);
						?>
						<h3><?php echo $jumlah_petugas; ?></h3>
						<a href="data_pengguna.php" class="btn btn-outline-primary btn-sm">Detail</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<center>
<div class="card mt-2">
	<div class="card-body">
		<p>Selamat datang dihalaman administrator, silahkan anda bisa mengakses beberapa fitur</p>
		</center>
	</div>
</div>	
</body>
<?php
include "footer.php";
?>