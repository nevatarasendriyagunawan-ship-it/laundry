<?php
	include 'header.php';
?>

<div class="container">
	<br><br><br>
	<div class="col-md-5 col-md-offset-3">
		<div class="panel">
			<div class="panel-heading">
				<h4>Edit Pelanggan</h4>
			</div>
			<div class="panel-body">
				<?php
					include '../koneksi.php';
					$id = $_GET['id'];
					$data = mysqli_query($koneksi, "select * from pelanggan where id_pelanggan='$id'");
					while ($d=mysqli_fetch_array($data)) {
					?>

						<form method="post" action="pelanggan_update.php">
						<form method="post" action="pelanggan_update.php">
						<div class="form-group">
							<label>Nama</label>
							<input type="hidden" name="id" value="<?php echo $d['id_pelanggan']; ?>">
							<input type="text" name="nama" class="form-control" value="<?php echo $d['nama_pelanggan']; ?>">
						</div>

						<div class="form-group">
							<label>Hp</label>
							<input type="number" name="hp" class="form-control" value="<?php echo $d['hp_pelanggan']; ?>">
						</div>

						<div class="form-group">
							<label>Alamat</label>
							<input type="text" name="alamat" class="form-control" value="<?php echo $d['alamat_pelanggan']; ?>">
						</div>

						<br>

						<input type="submit" class="btn btn-primary" value="Simpan">
						<a href="pelanggan.php" class="btn btn-default">Batal</a>
						</form>

							

						</form>
						<?php
					}
				?>
			</div>
		</div>
		
	</div>
</div>

