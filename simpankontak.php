<?php 
include 'koneksi.php';
//menyimpan data kedalam variabel 
$id    = $_POST['ID'];
$nama    = $_POST['Nama'];
$jenis_kelamin   = $_POST['jkel'];
$Email  = $_POST['Email'];
$Alamat    = $_POST['Alamat'];
$Kota   = $_POST['Kota'];
$Pesan    = $_POST['Pesan'];
//query SQL untuk insert data
$query="INSERT INTO kontak SET ID='$id', Nama='$nama',jkel='$jenis_kelamin ',Email='$Email',Alamat='$Alamat',Kota='$Kota',Pesan='$Pesan'";
mysqli_query($koneksi,$query);
//mengalihkan ke halaman tampilkontak.php
header("location:tampilkontak.php");
?>