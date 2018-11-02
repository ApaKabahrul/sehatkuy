<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<title> SEHAT Kuy: Data obat </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
<div class="main">
	<img src="logo.png" alt="logo" style="width:250px;height:auto;">
</head>



<body style="background-color: #f9dbf0">
	<ul>
  <li><a href="/codeigniter">Home</a></li>
  <li><a class="active" href="/codeigniter/obat">Data Obat</a></li>
  <li><a href="/codeigniter/sehat">Hidup Sehat</a></li>
  <li><a href="/codeigniter/penyakit">Data Penyakit</a></li>
  <li><a href="/codeigniter/lokasi">Lokasi Rumah Sakit</a></li>
  <li><a href="/codeigniter/tentang">Tentang</a></li>
</ul>
	
<br>

	<?php echo form_open("home/cari");?>
		<td>Cari Berdasarkan</td><br>
		<select name="cariberdasarkan">
			<option value="nama_obat">Nama Obat </option>
			<option value="manfaat_obat">Manfaat </option>
			<option value="efek_samping">Efek Samping </option>
			<option value="harga_obat">Harga (/strip) </option>
		</select>
		<input type="text" name="ygdicari">
		<input type="submit" value="Cari">

	<?php echo form_close();?>

	<table>
		<tr class="batas">
			<td>Nama</td>
			<td>Manfaat</td>
			<td>Dosis Dewasa (max mg/hari)</td>
			<td>Dosis Anak (max mg/hari)</td>
			<td>Efek Samping</td>
			<td>Harga (/strip)</td>
		</tr>
		<?php 
		if(isset($content)){
			?>
		<?php foreach ($content->result() as $key):?>
		<tr class="batas">
			<td><?php echo $key->nama_obat ?></td>
			<td><?php echo $key->manfaat_obat ?></td>
			<td><?php echo $key->dosis_dewasa ?></td>
			<td><?php echo $key->dosis_anak ?></td>
			<td><?php echo $key->efek_samping ?></td>
			<td><?php echo $key->harga_obat	 ?></td>
		</tr>
	<?php endforeach ?>
	<?php
	}else if(isset($data_obat)){?>
		<?php foreach ($data_obat->result() as $key):?>
		<tr class="batas">
			<td><?php echo $key->nama_obat ?></td>
			<td><?php echo $key->manfaat_obat ?></td>
			<td><?php echo $key->dosis_dewasa ?></td>
			<td><?php echo $key->dosis_anak ?></td>
			<td><?php echo $key->efek_samping ?></td>
			<td><?php echo $key->harga_obat	 ?></td>
		</tr>
	<?php endforeach ?>
<?php } ?>
		
	</table>

</body>
</html>