<?php

$kode_barang=$_GET['kode_barang'];
include '../../config/koneksi.php';
$query=mysqli_query($conn, "DELETE FROM barang WHERE kode_barang='$kode_barang'");

if($query){
    echo "<script>alert('Data berhasil di hapus')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('Data gagal di hapus')</script>";
    echo "<script>window.location.href='index.php'</script>";
}