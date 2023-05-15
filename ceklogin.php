<?php
session_start();
include 'koneksidb.php';

// cek apakah tombol login sudah diklik atau belum
if (isset($_POST['login'])) {
    // mengambil nilai inputan dari form login
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    // membuat query untuk mencari user di database
    $query = mysqli_query($conn, "SELECT * FROM tpengguna WHERE Username='$Username AND Password='$Password''");

    // menghitung jumlah baris yang ddataukan
    $count = mysqli_num_rows($query);

    if ($count > 0) {
        session_start();
        $_SESSION['Username'] = $Username;
        $_SESSION['status'] = 'login';
        header("location : formregistrasi_1.php");
    } else {
        header("location:login.php?pesan=gagal ");

}
}
?>