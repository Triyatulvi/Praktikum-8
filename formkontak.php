<!DOCTYPE html>
<html>

<head>
    <title>Form Input</title>
</head>

<body>
    <form method="post" action="simpankontak.php">
        <table>
            <tr>
                <td>ID</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" Name="Nama"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>
                    <input type="radio" name="jkel" value="L">Laki Laki
                    <input type="radio" name="jkel" value="P">Perempuan
                </td>
            </tr>
            <tr>
                <td>EMAIL</td>
                <td><input type="text" name="Email"></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input type="text" name="Alamat"></td>
            </tr>
            <tr>
                <td>KOTA</td>
                <td><input type="text" name="Kota"></td>
            </tr>
            <tr>
                <td>PESAN</td>
                <td><input type="textarea" name="pesan"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
            </tr>
        </table>
    </form>
</body>

</html>