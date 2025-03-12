<?php
session_start();
if (empty($_SESSION['nisn'])) {
    echo"<script> alert('Maaf anda belum login);
    window.location.assign('../index.php')</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Siswa - Aplikasi Pembayaran SPP</title>
    <link rel="icon" type="image/png" href="../Logo-SMKN-3.png">
    <link href="../style/style1.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3>Aplikasi Pembayaran SPP</h3>
    <div class="alert">
        Anda Login Sebagai Siswa <b><?= $_SESSION['nama'] ?></b> Aplikasi Pembayaran SPP
    </div>
    <a href="siswa.php" class="btn btn-primary">Siswa</a>   
    <a href="siswa.php?url=logout" class="btn btn-primary">Logout</a>
    
    <div class="card mt-2">
        <div class="card-body">

            <?php
            $file = @$_GET['url'];
            if(empty($file)){
                echo "<h4>Selamat Datang Di Halaman Siswa</h4>";
                echo "<p>Aplikasi SPP Digunakan Untuk Mempermudah Dalam Melihat History Pembayaran Siswa / Siswi Disekolah ";
                echo "<hr>";
                include 'history-pembayaran.php';
            }else{
                include $file. '.php';
            }
            ?>
        </div>
    </div>
</div>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>