<?php
session_start();
if (empty($_SESSION['id_petugas'])) {
    echo"<script> alert('Maaf anda belum login);
    window.location.assign('../index2.php')</script>";
}
if($_SESSION['level']!='petugas'){
    echo"<script> alert('Maaf anda sudah logout dari halaman admin, silahkan login kembali');
    window.location.assign('../index2.php')</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Petugas - Aplikasi Pembayaran SPP</title>
    <link rel="icon" type="image/png" href="../Logo-SMKN-3.png">
    <link href="../style/style1.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3>Aplikasi Pembayaran SPP</h3>
    <div class="alert">
        Anda Login Sebagai Petugas <b><?= $_SESSION['nama_petugas'] ?></b> Aplikasi Pembayaran SPP
    </div>
    <a href="petugas.php" class="btn btn-primary">Petugas</a>
    <a href="petugas.php?url=pembayaran" class="btn btn-primary">Pembayaran</a>
    <a href="petugas.php?url=logout" class="btn btn-primary">Logout</a>
    
    <div class="card mt-2">
        <div class="card-body">

            <?php
            $file = @$_GET['url'];
            if(empty($file)){
                echo "<h4>Selamat Datang Di Halaman Petugas</h4>";
                echo "<p>Aplikasi SPP Digunakan Untuk Mempermudah Dalam Mencatat Pembayaran Siswa / Siswi Disekolah ";
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