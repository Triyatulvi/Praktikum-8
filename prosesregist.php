<?php 
include 'koneksidb.php';
if (isset($_POST['submit'])) {
    $jenispendaftaran = $_POST['jenispendaftaran'];
    $tglmasuk = $_POST['tglmasuk'];
    $nis = $_POST['nis'];
    $nopesertaujian = $_POST['nopesertaujian'];
    $paud = $_POST['paud'];
    $tk = $_POST['tk'];
    $noskhun = $_POST['noskhun'];
    $noijazah = $_POST['noijazah'];
    $hobi = $_POST['hobi'];
    $citacita = $_POST['citacita'];

    // Menyimpan ke database
    $sql = mysqli_query($conn, "INSERT INTO pendaftaran (jenispendaftaran, tglmasuk, nis, nopesertaujian, paud, tk, noskhun, noijazah, hobi, citacita) VALUES ('$jenispendaftaran', '$tglmasuk', '$nis', '$nopesertaujian', '$paud', '$tk', '$noskhun', '$noijazah', '$hobi', '$citacita')");
    if ($sql) {
        // pesan jika data tersimpan
        echo "<script>alert('Selanjutnya Mengisi Form Data Diri!'); window.location.href='formdatadiri.php'</script>"; 
    } else {
        // pesan jika data gagal disimpan
        echo "<script>alert('Data Registrasi Gagal Ditambahkan!!');</script>";
    }
}
?>