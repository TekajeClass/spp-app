<?php
//header("Content-type: application/vnd-ms-excel");
//header("Content-Disposition: attachment; filename=Laporan-Pembayaran-SPP.xls");
?>

<style>
        .body{
            text-align: center;
        }
        .body img{
			text-align: center;
            width: 100px;
            height: 105px;
        }
        .body a{
            font-size: 17px;
        }
</style>
<body>
<nav class="head">
    <div class="body">
		<br><br><br>
        <img src="../Logo-SMKN-3.png"><br>
        <h2>SMK Negeri 3 Kota Bekasi</h2>
        <a>Jl. Mutiara Gading Timur Blk. L No.1, RT.003/RW.001, Mustika Jaya, Kec.Mustika Jaya. Kota Bks, Jawa Barat 17158 </a>
    </div>
    </div>
</nav>
<hr color="white" size="7">
<table border="1" cellpadding="5" align="center" class="table table-dark table-striped">
	<tr class="fw bold">
		<td>No</td>
		<td>NISN</td>
		<td>Nama</td>
		<td>Kelas</td>
		<td>Tahun SPP</td>
		<td>Nominal Dibayar</td>
		<td>Sudah Dibayar</td>
		<td>Tanggal Bayar</td>
		<td>Petugas</td>
	</tr>
	<?php
	include'../koneksi.php';
	$no = 1;
	$sql = "SELECT*FROM pembayaran,siswa,kelas,spp,petugas WHERE pembayaran.nisn=siswa.nisn AND siswa.id_kelas=kelas.id_kelas AND pembayaran.id_spp=spp.id_spp AND pembayaran.id_petugas=petugas.id_petugas ORDER BY tgl_bayar DESC";
	$query = mysqli_query($koneksi, $sql);
	foreach($query as $data){ 
		?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?= $data['nisn'] ?> </td>
			<td><?= $data['nama'] ?> </td>
			<td><?= $data['nama_kelas'] ?> </td>
			<td><?= $data['tahun'] ?> </td>
			<td>Rp<?= number_format($data['nominal'],2,',','.');?></td>
			<td>Rp<?= number_format($data['jumlah_bayar'],2,',','.');?></td>
			<td><?= $data['tgl_bayar'] ?> </td>
			<td><?= $data['nama_petugas'] ?> </td>
		</tr>
	<?php } ?>
</table>
<script>
    window.print();
</script>
</body>
