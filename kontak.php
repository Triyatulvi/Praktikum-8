<?php
$servername ="localhost";
$username ="root";
$password = "";
$dbname ="latihan";

//Create connection
$conn = mysqli_connect($servername, $username,$password,$dbname);

//Check connection
if (!$conn){
    die("connection failed: ".mysqli_connect_error());
}
$sql = "CREATE TABLE kontak (
    ID int (4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Nama varchar(30) NOT NULL,
    jkel varchar(10) NOT NULL,
    Email varchar(40) NOT NULL,
    Alamat varchar(50) NOT NULL,
    Kota varchar(20) NOT NULL,
    Pesan text (80)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
    
if (mysqli_query($conn, $sql))
    {echo "Kontak Berhasil Dibuat";
    }else{
        echo "Tidak Berhasil Membuat Tabel" .mysqli_error($conn);
    }
        
    
mysqli_close($conn);
?>