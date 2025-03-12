<?php

$id_kelas = $_GET['id_kelas'];

include'../koneksi.php';
$sql = "DELETE FROM kelas WHERE id_kelas='$id_kelas'";
$query = mysqli_query($koneksi, $sql);

if($query){
	header ('location:?url=kelas');
}else{
	echo"<script> alert('Maaf Data Anda Belum Terhapus'); window.location.assign('?url=kelas')</script>";
}