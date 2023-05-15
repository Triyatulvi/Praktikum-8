<?php
    include 'koneksidb.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULIR PESERTA DIDIK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
    .warning {
        color: #FF0000;
    }
    </style>
</head>


<body>

    <?php
    $error_tanggalpengisian = "";
    $error_jenispendaftaran = "";
    $error_tglmasuk = "";
    $error_nis = "";
    $error_nopesertaujian = "";
    $error_paud = "";
    $error_tk = "";
    $error_noskhun = "";
    $error_noijazah = "";
    $error_hobi = "";
    $error_citacita = "";

    $tanggalpengisian = "";
    $jenispendaftaran = "";
    $tglmasuk= "";
    $nis = "";
    $nopesertaujian = "";
    $paud = "";
    $tk = "";
    $noskhun = "";
    $noijazah = "";
    $hobi = "";
    $citacita = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["nis"])) {
            $error_nis = "NIS Tidak Boleh Kosong";
        } else {
            $nis = cek_input($_POST["nis"]);
            if (!is_numeric($nis)) {
                $error_nis = "NIS Hanya Boleh Angka";
            }
        }

        if (empty($_POST["nopesertaujian"])) {
            $error_nopesertaujian = "No Peserta Ujian Tidak Boleh Kosong";
        } else {
            $nopesertaujian = cek_input($_POST["nopesertaujian"]);
            if (!is_numeric($nopesertaujian)) {
                $error_nopesertaujian = "Nomor Peserta Ujian Hanya Boleh Angka";
            }
        }

        if (empty($_POST["noskhun"])) {
            $error_noskhun = "Nomor Seri SKHUN Tidak Boleh Kosong";
        } else {
            $noskhun = cek_input($_POST["noskhun"]);
            if (!is_numeric($noskhun)) {
                $error_noskhun = "Nomor Seri SKHUN Hanya Boleh Angka";
            }
        }

        if (empty($_POST["noijazah"])) {
            $error_noijazah = "No Ijazah Tidak Boleh Kosong";
        } else {
            $noijazah = cek_input($_POST["noijazah"]);
            if (!is_numeric($noijazah)) {
                $error_noijazah = "Nomor Seri Ijazah Hanya Boleh Angka";
            }
        }

    }

    function cek_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <div class="row">
        <div class="col-md-13">
            <div class="card" style="background-color: beige;">
                <div class="card-header bg-white text-black">
                    FORMULIR PESERTA DIDIK
                </div>
                <p> Tanggal: <?php echo $tanggalpengisian = date("Y-m-d"); ?> </p>
                <div class="card-footer">
                    1. FORM REGISTRASI
                </div>
                <div class="card-body">
                    <form method="post" action="prosesregist.php">
                        <br>
                        <div class="form-group row">
                            <label for="jenispendaftaran" class="col-sm-2 col-form-label">Jenis
                                Pendaftaran</label>
                            <div class="col-sm-10">
                                <input type="radio" name="jenispendaftaran" value="Siswa Baru">Siswa
                                Baru</label>
                                <input type="radio" name="jenispendaftaran" value="Pindahan">Pindahan</label>
                                <span class="warning"><?php echo $error_jenispendaftaran; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tglmasuk" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
                            <div class="col-sm-10">
                                <input type="text" name="tglmasuk" id="tglmasuk"
                                    class="form-control <?php echo ($error_tglmasuk !="" ? "is-invalid" : ""); ?>"
                                    placeholder="XX - Bulan - XXXX" value="<?php echo $tglmasuk; ?>"> <span
                                    class="warning"><?php echo $error_tglmasuk ?></span>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                            <div class="col-sm-10">
                                <input type="text" name="nis" id="nis"
                                    class="form-control <?php echo ($error_nis !="" ? "is-invalid" : ""); ?>"
                                    placeholder="Nomor Induk Siswa" value="<?php echo $nis; ?>"> <span
                                    class="warning"><?php echo $error_nis ?></span>
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="nopesertaujian" class="col-sm-2 col-form-label">Nomor Peserta
                                Ujian</label>
                            <div class="col-sm-10">
                                <input type="text" name="nopesertaujian" id="nopesertaujian"
                                    class="form-control <?php echo ($error_nopesujian !="" ? "is-invalid" : ""); ?>"
                                    placeholder="No Peserta Ujian" value="<?php echo $nopesertaujian; ?>"> <span
                                    class="warning"><?php echo $error_nopesertaujian ?></span>
                            </div>
                        </div>

                        <br>
                        <div class="form-group row">
                            <label for="paud" class="col-sm-2 col-form-label">Apakah Pernah Paud</label>
                            <div class="col-sm-10">
                                <input type="radio" name="paud" value="Ya">Ya</label>
                                <input type="radio" name="paud" value="Tidak">Tidak</label>
                                <span class="warning"><?php echo $error_paud; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tk" class="col-sm-2 col-form-label">Apakah Pernah TK</label>
                            <div class="col-sm-10">
                                <input type="radio" name="tk" value="Ya">Ya</label>
                                <input type="radio" name="tk" value="Tidak">Tidak</label>
                                <span class="warning"><?php echo $error_tk; ?></span>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="noskhun" class="col-sm-2 col-form-label">No. SKHUN Sebelumnya</label>
                            <div class="col-sm-10">
                                <input type="text" name="noskhun" id="noskhun"
                                    class="form-control <?php echo ($error_noskhun !="" ? "is-invalid" : ""); ?>"
                                    placeholder="SKHUN Sebelumnya" value="<?php echo $noskhun; ?>"> <span
                                    class="warning"><?php echo $error_noskhun ?></span>
                            </div>
                        </div>
                        <br>

                        <div class="form-group row">
                            <label for="noijazah" class="col-sm-2 col-form-label">No. Seri Ijazah
                                Sebelumnya</label>
                            <div class="col-sm-10">
                                <input type="text" name="noijazah" id="noijazah"
                                    class="form-control <?php echo ($error_noijazah !="" ? "is-invalid" : ""); ?>"
                                    placeholder="Seri Ijazah Sebelumnya" value="<?php echo $noijazah; ?>"> <span
                                    class="warning"><?php echo $error_noijazah ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hobi" class="col-sm-2 col-form-label "> Hobi </label>
                            <div class="col-sm-10">
                                <select class="col-sm-2 form-select" name="hobi">
                                    <option value=""></option>
                                    <option value="Olahraga"> Olahraga </option>
                                    <option value="Kesenian"> Kesenian</option>
                                    <option value="Membaca"> Membaca</option>
                                    <option value="Menulis"> Menulis </option>
                                    <option value="Traveling"> Traveling </option>
                                    <option value="Lainnya"> Lainnya </option>
                                </select>
                                <span class="warning"><?php echo $error_hobi; ?></span>
                            </div>
                        </div>

                        <br>
                        <div class="form-group row">
                            <label for="citacita" class="col-sm-2 col-form-label "> Cita Cita </label>
                            <div class="col-sm-10">
                                <select class="col-sm-2 form-select" name="citacita">
                                    <option value=""></option>
                                    <option value="PNS"> PNS </option>
                                    <option value="TNI/POLRI"> TNI/POLRI</option>
                                    <option value="Guru/Dosen"> Guru/Dosen</option>
                                    <option value="Dokter"> Dokter </option>
                                    <option value="Politikus"> Politikus </option>
                                    <option value="Wiraswasta"> Wiraswasta </option>
                                    <option value="Seni/Lukis/Artis/Sejenis"> Seni/Lukis/Artis/Sejenis </option>
                                    <option value="Lainnya"> Lainnya </option>
                                </select>
                                <span class="warning"><?php echo $error_citacita; ?></span>
                            </div>
                        </div>

                        <br>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" name="submit" class="btn btn-primary">Next</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>