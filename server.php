<?php
include 'koneksi.php';


$data = new SimpleXMLElement("<karyawan />");

$sql = "select * from nurjaman_list_karyawan";
$query = mysqli_query($conn, $sql);

while ($result = mysqli_fetch_assoc($query)) {
	# code...
	$karyawan = $data->addChild("karyawan");
	$karyawan->addAttribute("id", $result['id']);
	$karyawan->addChild("nik", $result['nik']);
	$karyawan->addChild("nama", $result['nama']);
	$karyawan->addChild("jenis_kelamin", $result['jenis_kelamin']);
	$karyawan->addChild("jabatan", $result['jabatan']);
	$karyawan->addChild("hari_normal", $result['hari_normal']);
	$karyawan->addChild("absen", $result['absen']);
	$karyawan->addChild("hari_kerja", $result['hari_kerja']);
	$karyawan->addChild("gaji_perhari", $result['gaji_perhari']);
	$karyawan->addChild("bonus", $result['bonus']);
	$karyawan->addChild("kasbon", $result['kasbon']);
	$karyawan->addChild("gaji_bersih", $result['gaji_bersih']);
	$karyawan->addChild("tempat_lahir", $result['tempat_lahir']);
	$karyawan->addChild("tanggal_lahir", $result['tanggal_lahir']);
	$karyawan->addChild("alamat", $result['alamat']);
	$karyawan->addChild("status", $result['status']);
	
}

echo $data->asXML();

?>