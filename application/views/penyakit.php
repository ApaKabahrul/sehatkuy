<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<title> SEHAT Kuy: Data Penyakit </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
	<div class="main">
	<img src="logo.png" alt="logo" style="width:250px;height:auto;">
</head>
<body style="background-color: #f9dbf0">
	<ul>
  <li><a href="/codeigniter">Home</a></li>
  <li><a href="/codeigniter/obat">Data Obat</a></li>
  <li><a href="/codeigniter/sehat">Hidup Sehat</a></li>
  <li><a class="active" href="/codeigniter/penyakit">Data Penyakit</a></li>
  <li><a href="/codeigniter/lokasi">Lokasi Rumah Sakit</a></li>
  <li><a href="/codeigniter/tentang">Tentang</a></li>
</ul>
	
<br>
<h1 style="text-align: center;">Data Penyakit</h1>
	<?php echo form_open("home/cari_1");?>
		<td>Cari Berdasarkan</td><br>
		<select name="cariberdasarkan_1">
			<option value="nama_penyakit">Nama Penyakit </option>
			<option value="penyebab">Penyebab </option>
			<option value="nama_obat">Nama Obat </option>
		</select>
		<input type="text" name="ygdicari_1">
		<input type="submit" value="Cari">

	<?php echo form_close();?>

	<table class="zebra-table">
		<tr class="batas">
			<td>Nama Penyakit</td>
			<td>Penyebab</td>
			<td>Nama Obat</td>
		</tr>
		<?php 
		if(isset($content)){
			?>
		<?php foreach ($content->result() as $key):?>
		<tr class="batas">
			<td><?php echo $key->nama_penyakit ?></td>
			<td><?php echo $key->penyebab ?></td>
			<td><?php echo $key->nama_obat ?></td>
		</tr>
	<?php endforeach ?>
	<?php
	}else if(isset($data_penyakit)){?>
		<?php foreach ($data_penyakit->result() as $key):?>
		<tr class="batas">
			<td><?php echo $key->nama_penyakit ?></td>
			<td><?php echo $key->penyebab ?></td>
			<td><?php echo $key->nama_obat ?></td>
		</tr>
	<?php endforeach ?>
<?php } ?>
		
	</table>

</body>
</html>