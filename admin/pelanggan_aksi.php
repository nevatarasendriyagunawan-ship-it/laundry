<?php
include '../koneksi.php';
$nama = $_POST['nama_pelanggan'];
$hp = $_POST['hp_pelanggan'];
$alamat = $_POST['alamat_pelanggan'];
mysqli_query($koneksi,"insert into pelanggan values('','$nama','$hp','$alamat')");
echo "<script>alert('Data Tersimpan');window.location.href='pelanggan.php'</script>";

?>