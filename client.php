<?php

$xml = new SimpleXMLElement(file_get_contents("http://localhost/bahan_ajar/php_web_service/app/p5_lab/server/server.php"));
//$xml = new SimpleXMLElement(file_get_contents("http://localhost/bahan_ajar/php_web_service/app/p5_lab/server/dokumen.php"));
?>
<h1 align="center">Nurjaman ||List Karyawan</h1>

<table align="center" border="1">
	<tr>
		<th>ID</th>
		<th>NIK</th>
		<th>Nama</th>
		<th>JK</th>
		<th>Jabatan</th>
		<th>Hari Normal</th>
		<th>Absen</th>
		<th>Hari Kerja</th>
		<th>Gaji Perhari</th>
		<th>Bonus</th>
		<th>Kasbon</th>
		<th>Gaji Bersih</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Alamat</th>
		<th>Status</th>
	</tr>
<?php
foreach ($xml->children() as $karyawan) {
	# code...
	?>
	<tr>
		<td><?php echo $karyawan['id']; ?></td>
		<td><?php echo $karyawan->nik; ?></td>
		<td><?php echo $karyawan->nama; ?></td>
		<td><?php echo $karyawan->jenis_kelamin; ?></td>
		<td><?php echo $karyawan->jabatan; ?></td>
		<td><?php echo $karyawan->hari_normal; ?></td>
		<td><?php echo $karyawan->absen; ?></td>
		<td><?php echo $karyawan->hari_kerja; ?></td>
		<td><?php echo $karyawan->gaji_perhari; ?></td>
		<td><?php echo $karyawan->bonus; ?></td>
		<td><?php echo $karyawan->kasbon; ?></td>
		<td><?php echo $karyawan->gaji_bersih; ?></td>
		<td><?php echo $karyawan->tempat_lahir; ?></td>
		<td><?php echo $karyawan->tanggal_lahir; ?></td>
		<td><?php echo $karyawan->alamat; ?></td>
		<td><?php echo $karyawan->status; ?></td>

	<?php
}
?>

</table>
