<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<title> Tambah Obat </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
	<a href="/codeigniter">
<div class="main">
	<img src="logo.png" alt="logo" style="width:250px;height:auto;">
</a>
</head>



<body style="background-color: #f9dbf0">
	<ul>
  <li><a href="">Admin</a></li>
  <li><a class="active" href="/codeigniter/edit_obat">Edit Obat</a></li>
  <li><a href="">Edit Penyakit</a></li>
  <li><a href="">Edit Lokasi</a></li>
</ul>
	
<br>

	<form action=" <?php echo base_url(); ?>admin/aksi_add_obat" method="post">
		<input type="text" name="nama_obat" placeholder="Nama"> <br>
		<input type="text" name="manfaat_obat" placeholder="Manfaat"> <br>
		<input type="text" name="dosis_dewasa" placeholder="Dosis Dewasa (max mg/hari)"> <br>
		<input type="text" name="dosis_anak" placeholder="Dosis Anak (max mg/hari)"> <br>
		<input type="text" name="efek_samping" placeholder="Efek Samping"> <br>
		<input type="text" name="harga_obat" placeholder="Harga (/strip)"> <br>
		<input type="submit" value="Save">
	</form>

 	
</html>