<?php
    include '../koneksi.php';
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $hp = $_POST['hp'];
    $alamat = $_POST['alamat'];

    mysqli_query($koneksi, "update pelanggan set nama_pelanggan='$nama', hp_pelanggan='$hp', alamat_pelanggan='$alamat' where id_pelanggan='$id'");

    echo "<script>alert('Data sudah diubah'); window.location.href='pelanggan.php'</script>";
?>
