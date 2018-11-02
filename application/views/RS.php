<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<title> SEHAT Kuy: Data RS </title>
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
  <li><a href="/codeigniter/penyakit">Data Penyakit</a></li>
  <li><a class="active" href="/codeigniter/lokasi">Lokasi Rumah Sakit</a></li>
  <li><a href="/codeigniter/tentang">Tentang</a></li>
</ul>
	
<br>

	<?php echo form_open("home/cari_2");?>
		<td>Cari Berdasarkan</td><br>
		<select name="cariberdasarkan_2">
			<option value="Nama_Rs">Nama Rumah Sakit </option>
			<option value="Alamat_Rs">Alamat </option>
			<option value="Telephon_RS">Telepon </option>
			<option value="Tempat_Terdekat_Rs">Titik Terdekat </option>
		</select>
		<input type="text" name="ygdicari_2">
		<input type="submit" value="Cari">

	<?php echo form_close();?>

	<table>
		<tr class="batas">
			<td>Nama Rumah Sakit</td>
			<td>Alamat</td>
			<td>Telepon</td>
			<td>Titik Terdekat</td>
		</tr>
		<?php 
		if(isset($content)){
			?>
		<?php foreach ($content->result() as $key):?>
		<tr class="batas">
			<td><?php echo $key->Nama_Rs ?></td>
			<td><?php echo $key->Alamat_Rs ?></td>
			<td><?php echo $key->Telephon_RS ?></td>
			<td><?php echo $key->Tempat_Terdekat_Rs ?></td>
		</tr>
	<?php endforeach ?>
	<?php
	}else if(isset($rs)){?>
		<?php foreach ($rs->result() as $key):?>
		<tr class="batas">
			<td><?php echo $key->Nama_Rs ?></td>
			<td><?php echo $key->Alamat_Rs ?></td>
			<td><?php echo $key->Telephon_RS ?></td>
			<td><?php echo $key->Tempat_Terdekat_Rs ?></td>
		</tr>
	<?php endforeach ?>
<?php } ?>
		
	</table>

</body>
</html>