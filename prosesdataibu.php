<?php 
include 'koneksidb.php';
    if (isset($_POST['submit'])) {
        $namaibu = $_POST['namaibu'];
        $tlibu = $_POST['tlibu'];
        $pendidikan = $_POST['pendidikan'];
        $pekeribu = $_POST['pekeribu'];
        $penghasilan = $_POST['penghasilan'];
        $berkebibu = $_POST['berkebibu'];

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO dataibu (namaibu, tlibu, pendidikan, pekeribu, penghasilan, berkebibu) VALUES ('$namaibu', '$tlibu', '$pendidikan', '$pekeribu', '$penghasilan', '$berkebibu')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Data Keseluruhan Berhasil Disimpan!'); window.location.href='hasildata.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Ibu Kandung Gagal Ditambahkan!!');";
        }
      }
?>