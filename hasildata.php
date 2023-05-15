<!DOCTYPE html>
<html>

<head>
    <title>Data Pendaftaran</title>
</head>

<body>
    <h1>Data Pendaftaran Peserta Didik</h1>
    <h4>Data Registrasi</h4>

    <?php
		include 'koneksidb.php';
		$pendaftaran = mysqli_query($conn, "SELECT * from pendaftaran");
	?>

    <?php foreach ($pendaftaran as $data): ?>
    <ul>
        <li>Jenis Pendaftaran : <?= $data['jenispendaftaran'] ?></li>
        <li>Tanggal Masuk Sekolah : <?= $data['tglmasuk'] ?></li>
        <li>NIS : <?= $data['nis'] ?></li>
        <li>Nomor Peserta Ujian : <?= $data['nopesertaujian'] ?></li>
        <li>Apakah Pernah PAUD? : <?= $data['paud'] ?></li>
        <li>Apakah Pernah TK? : <?= $data['tk'] ?></li>
        <li>No. Seri SKHUN Sebelumnya : <?= $data['noskhun'] ?></li>
        <li>No. Seri Ijazah Sebelumnya : <?= $data['noijazah'] ?></li>
        <li>Hobi : <?= $data['hobi'] ?></li>
        <li>Cita-cita : <?= $data['citacita'] ?></li>
    </ul>
    <?php endforeach; ?>

    <h4>Data Pribadi</h4>

    <?php
    include 'koneksidb.php';
    $datapribadi = mysqli_query($conn, "SELECT * from datapribadi");
    ?>

    <?php foreach ($datapribadi as $data): ?>
    <ul>
        <li>Nama Lengkap : <?= $data['namalengkap'] ?></li>
        <li>Jenis Kelamin : <?= $data['jkel'] ?></li>
        <li>NISN : <?= $data['nisn'] ?></li>
        <li>NIK : <?= $data['nik'] ?></li>
        <li>Tempat Lahir : <?= $data['tempatlahir'] ?></li>
        <li>Tanggal Lahir : <?= $data['tglahir'] ?></li>
        <li>Agama : <?= $data['agama'] ?></li>
        <li>Berkebutuhan Khusus : <?= $data['berkebkhusus'] ?></li>
        <li>Alamat Jalan : <?= $data['alamat'] ?></li>
        <li>RT : <?= $data['rt'] ?></li>
        <li>RW : <?= $data['rw'] ?></li>
        <li>Nama Dusun : <?= $data['namadusun'] ?></li>
        <li>Nama Kelurahan/Desa : <?= $data['namakel'] ?></li>
        <li>Kecamatan : <?= $data['kecamatan'] ?></li>
        <li>Kode Pos : <?= $data['kodepos'] ?></li>
        <li>Tempat Tinggal : <?= $data['ttinggal'] ?></li>
        <li>Moda Transportasi : <?= $data['transport'] ?></li>
        <li>Nomor HP : <?= $data['nohp'] ?></li>
        <li>Nomor Telepon : <?= $data['telepon'] ?></li>
        <li>Email Pribadi : <?= $data['email'] ?></li>
        <li>Penerima KPS/PKH/KIP : <?= $data['bantuan'] ?></li>
        <li>No. KPS/KKS/PKH/KIP : <?= $data['nobantuan'] ?></li>
        <li>Kewarganegaraan : <?= $data['kwn'] ?></li>
        <li>Nama Negara : <?= $data['negara'] ?></li>

    </ul>
    <?php endforeach; ?>

    <h4>Data Ayah Kandung</h4>

    <?php
    include 'koneksidb.php';
    $dataayah = mysqli_query($conn, "SELECT * from dataayah");
    ?>

    <?php foreach ($dataayah as $data): ?>
    <ul>
        <li>Nama Ayah Kandung : <?= $data['namaayah'] ?></li>
        <li>Tahun Lahir : <?= $data['tlayah'] ?></li>
        <li>Pendidikan : <?= $data['pendayah'] ?></li>
        <li>Pekerjaan : <?= $data['pekerayah'] ?></li>
        <li>Penghasilan Bulanan : <?= $data['salaryayah'] ?></li>
        <li>Berkebutuhan Khusus : <?= $data['berkebayah'] ?></li>

    </ul>
    <?php endforeach; ?>

    <h4>Data Ibu Kandung</h4>

    <?php
    include 'koneksidb.php';
    $dataibu = mysqli_query($conn, "SELECT * from dataibu");
    ?>

    <?php foreach ($dataibu as $data): ?>
    <ul>
        <li>Nama Ibu Kandung : <?= $data['namaibu'] ?></li>
        <li>Tahun Lahir : <?= $data['tlibu'] ?></li>
        <li>Pendidikan : <?= $data['pendidikan'] ?></li>
        <li>Pekerjaan : <?= $data['pekeribu'] ?></li>
        <li>Penghasilan Bulanan : <?= $data['penghasilan'] ?></li>
        <li>Berkebutuhan Khusus : <?= $data['berkebibu'] ?></li>

    </ul>
    <?php endforeach; ?>

</body>

</html>