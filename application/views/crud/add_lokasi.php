<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<title> Tambah Lokasi </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
	<a href="/codeigniter">
<div class="main">
	<img src="logo.png" alt="logo" style="width:250px;height:auto;">
</a>
</head>



<body style="background-color: #f9dbf0">
	<ul>
  <li><a href="/codeigniter/admin">Admin</a></li>
  <li><a href="/codeigniter/edit_obat">Edit Obat</a></li>
  <li><a href="/codeigniter/edit_penyakit">Edit Penyakit</a></li>
  <li><a class="active" href="/codeigniter/edit_lokasi">Edit Lokasi</a></li>
  <li><a href="/codeigniter/edit_admin">Cek Admin</a></li>
</ul>
	
<br>

	<form action=" <?php echo base_url(); ?>admin/aksi_add_lokasi" method="post">
		<input type="text" name="Nama_Rs" placeholder="Nama Rumah Sakit"> <br>
		<input type="text" name="Alamat_Rs" placeholder="Alamat"> <br>
		<input type="text" name="Telephon_RS" placeholder="Telepon"> <br>
		<input type="text" name="Tempat_Terdekat_Rs" placeholder="Titik Terdekat"> <br>
		<input type="submit" value="Tambah">
	</form>

 	
</html>