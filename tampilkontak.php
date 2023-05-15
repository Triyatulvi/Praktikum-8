<h2>Tampil Kontak</h2>
<table border="1">
    <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Kota</th>
        <th>Pesan</th>
    </tr>
    <?php
    include 'koneksi.php';
    $kontak = mysqli_query($koneksi, "SELECT * FROM kontak");
    $no=1;
    foreach ($kontak as $row){
        echo "<tr>
            <td>$no</td>
            <td>".$row['ID']."</td>
            <td>".$row['Nama']."</td>
            <td>".$row['jkel']."</td>
            <td>".$row['Email']."</td>
            <td>".$row['Alamat']."</td>
            <td>".$row['Kota']."</td>
            <td>".$row['Pesan']."</td>
                </tr>";
            $no++;
    }
    ?>
</table>