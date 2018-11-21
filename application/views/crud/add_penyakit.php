<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<title> Tambah Penyakit </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
	<a href="/codeigniter">
<div class="main">
	<img src="logo.png" alt="logo" style="width:20%;height:auto;">
</a>
</head>



<body style="background-color: #f9dbf0">
	<ul>
  <li><a href="/codeigniter/admin">Admin</a></li>
  <li><a href="/codeigniter/edit_obat">Edit Obat</a></li>
  <li><a class="active" href="/codeigniter/edit_penyakit">Edit Penyakit</a></li>
  <li><a href="/codeigniter/edit_lokasi">Edit Lokasi</a></li>
</ul>
	
<br>

	<form action=" <?php echo base_url(); ?>admin/aksi_add_penyakit" method="post">
		<input type="text" name="nama_penyakit" placeholder="Nama Penyakit"> <br>
		<input type="text" name="penyebab" placeholder="Penyebab"> <br>
		<input type="text" name="nama_obat" placeholder="Nama Obat"> <br>
		<input type="submit" value="Tambah">
	</form>

 	
</html>
