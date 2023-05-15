<?php 
include 'koneksidb.php';
// melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_peserta");
   
        if (isset($_POST['submit'])) {
        $namalengkap = $_POST['namalengkap'];
        $jkel = $_POST['jkel'];
        $nisn = $_POST['nisn'];
        $nik = $_POST['nik'];
        $tempatlahir = $_POST['tempatlahir'];
        $tglahir = $_POST['tglahir'];
        $agama = $_POST['agama'];
        $berkebkhusus = $_POST['berkebkhusus'];
        $alamat = $_POST['alamat'];
        $rt = $_POST['rt'];
        $rw = $_POST['rw'];
        $namadusun = $_POST['namadusun'];
        $namakel = $_POST['namakel'];
        $kecamatan = $_POST['kecamatan'];
        $kodepos = $_POST['kodepos'];
        $ttinggal = $_POST['ttinggal'];
        $transport = $_POST['transport'];
        $nohp = $_POST['nohp'];
        $telepon = $_POST['telepon'];
        $email = $_POST['email'];
        $bantuan = $_POST['bantuan'];
        $nobantuan = $_POST['nobantuan'];
        $kwn = $_POST['kwn'];
        $negara = $_POST['negara'];
    
          // Menyimpan ke database
          $sql = mysqli_query($conn, "INSERT INTO datapribadi (namalengkap, jkel, nisn, nik, tempatlahir, tglahir, agama, berkebkhusus, alamat, rt, rw,namadusun, namakel, kecamatan, kodepos, ttinggal, transport, nohp, telepon, email, bantuan, nobantuan, kwn, negara) VALUES ('$namalengkap', '$jkel', '$nisn', '$nik', '$tempatlahir', '$tglahir', '$agama', '$berkebkhusus', '$alamat', '$rt', '$rw', '$namadusun','$namakel', '$kecamatan', '$kodepos', '$ttinggal', '$transport', '$nohp', '$telepon', '$email', '$bantuan', '$nobantuan', '$kwn', '$negara')");
          if ($sql) {
              // pesan jika data tersimpan
              echo "<script>alert('Selanjutnya Mengisi Form Data Ayah!'); window.location.href='formdataayah.php'</script>"; 
            } else {
              // pesan jika data gagal disimpan
                echo "<script>alert('Data Diri Gagal Ditambahkan!!');</script>";
            }
          }
?>