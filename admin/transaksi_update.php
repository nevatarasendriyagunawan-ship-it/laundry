<?php
include '../koneksi.php';
$id = $_POST['id_pelanggan'];
$nama = $_POST['nama_pelanggan'];
$hp = $_POST['hp_pelanggan'];
$alamat = $_POST['alamat_pelanggan'];
mysqli_query($koneksi,"update pelanggan set nama_pelanggan='$nama', hp_pelanggan='$hp', alamat_pelanggan='$alamat'where id_pelanggan='$id' ");
echo "<script>alert('Data sudah diubah');window.location.href='pelanggan.php'</script>";

?>