<?php

$kode_barang = $_GET['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$id_jenis = $_POST['id_jenis'];

include '../../config/koneksi.php';
$query = mysqli_query($conn,
"UPDATE barang SET nama_barang='$nama_barang', harga='$harga', stok='$stok', id_jenis='$id_jenis' WHERE kode_barang='$kode_barang'");

if ($query){
    echo "<script>alert('Data berhasil di edit')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo  "<script>alert('Data gagal di edit')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}
