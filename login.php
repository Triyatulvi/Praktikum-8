<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="favicon.ico" />
    <title>Login</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<style>
body {
    background: url(image/Login.jpg) no-repeat;
    width: 90%;
    height: 120vh;
    background-size: cover;
}

/*Login*/
.needs-validation {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: beige;
    padding: 60px;
    border-radius: 15px;
    box-shadow: 5px 8px 5px 0px #f1ebeb;
}

.image {
    display: flex;
    justify-content: flex-end;
    s float: right;
    width: 500px;
}

.avatar {
    width: 100px;
}

.login-container {
    display: center;
    position: center;

    text-align: center;
}

form h2 {
    font-size: 2.9rem;
    text-transform: uppercase;
    margin: 5px 0;
    color: #022747;
    width: 288px;
}

.input-div {
    display: grid;
    grid-template-columns: 7% 93%;
    margin: 25px 0;
    padding: 5px 0;
    border-bottom: 2px solid #000;
}

.input-div.one {
    margin-top: 0;
}

.input-div.two {
    margin-bottom: 4px;
}

.i {
    display: flex;
    justify-content: center;
}

.input-div>div {
    position: relative;
    height: 45px;
}

.input-div>div h5 {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #022747;
    font-size: 14px;
    display: none;
    transition: 0.3s;
}

.input {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    border: none;
    outline: none;
    background: none;
    padding: 0.5rem 0.7rem;
    font-size: 1.2 rem;
    color: #022747;
    font-family: Papertua;
}

.btn-Kirim {
    display: block;
    width: 100%;
    height: 50px;
    border-radius: 25px;
    margin: 1rem 0;
    font-size: 1.2rem;
    outline: none;
    border: none;
    background-image: linear-gradient(to right, #2e39db, #2aabee, #2e39db);
}

/*Mengatur navbar*/
.navbar-invers {
    background-color: black;
    color: #fcbf93;
    font-size: 18px;
}

.nav-link {
    color: #fcbf93;
    font-family: Lustria;
}

.navbar-brand {
    color: #fcbf93;
    font-family: Lustria;
}

.navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='orange' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

/* Mengimpor font dari Google Fonts */
@import url("https://fonts.google.com/specimen/Yatra+One");

.warna-bg {
    background: linear-gradient(to right,
            rgba(84, 127, 221, 0.92),
            rgba(9, 40, 108, 0.92));
}

.container-pilih {
    display: flex;
    justify-content: center;
}

.line {
    width: 180px;
    height: 4px;
    background-color: #022747;
}

.left {
    margin-right: 40px;
}

.right {
    margin-left: 40px;
}

.text {
    text-align: center;
    font-family: "Yatra One";
    color: #022747;
    font-size: 30px;
}

.warna-footer {
    font-family: Perpetua;
    background: #022747;
}

.deskripsi {
    font-family: Perpetua;
    vertical-align: top;
    letter-spacing: 0px;
    word-spacing: 0px;
    font-size: 30px;
    color: #022747;
}

/*Mengatur Books*/
.warna-materi {
    background: linear-gradient(to right, rgba(82, 95, 121, 0.92), #fcbf93);
}
</style>

<body>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-3">
                <form action="formregistrasi_1.php" class="needs-validation" novalidate>
                    <center>
                    </center>
                    <?php
            if(isset($_GET['login'])){
                if($_GET['pesan'] == "gagal"){
                    echo "<center>Login gagal! Username dan Password salah!</center>";
                    echo "<br>";
                }else if($_GET['pesan'] == "logout"){
                    echo "Anda telah berhasil logout";
                }else if($_GET['pesan'] == "belum_login"){
                    echo "Anda harus login untuk mengakses halaman admin";
                }
            }
            ?> <h2 align="center">Selamat Datang</h2>
                    <div class="input-div one">
                        <div class="i">
                            <img src="icon_username-fill.svg" width="35" />
                        </div>
                        <div>
                            <h5>Username</h5>
                            <input class="input" type="text" placeholder="Username" required />
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="input-div two">
                        <div class="i">
                            <img src="lock-fill.svg" width="35" />
                        </div>
                        <div>
                            <h5>Password</h5>
                            <input class="input" type="password" placeholder="Password" required />
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>

                        </div>
                    </div>
                    <a href="#">Forgot Password ?</a>
                    <input type="submit" class="btn-Kirim" value="Login" />

                </form>

            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript
     Placed at the end of the document so the pages load faster -->
    <script src="jquery-3.6.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script>
    (function() {
        "use strict";
        window.addEventListener(
            "load",
            function() {
                var forms = document.getElementsByClassName("needs-validation");
                var validation = Array.prototype.filter.call(
                    forms,
                    function(form) {
                        form.addEventListener(\
                            "submit",
                            function(event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add("was-validated");
                            },
                            false
                        );
                    }
                );
            },
            false
        );
    })();
    </script>
</body>

</html>