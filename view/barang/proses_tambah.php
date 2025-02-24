<?php

$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$id_jenis = $_POST['id_jenis'];

include '../../config/koneksi.php';
$query = mysqli_query($conn,
"INSERT INTO barang VALUES('$kode_barang','$nama_barang','$harga','$stok','$id_jenis')");

echo "
<script>
alert('input data berhasil');
</script>
<script>
window.location.href = 'index.php';
</script>
";