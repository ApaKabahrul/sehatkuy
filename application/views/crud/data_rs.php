<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<title> SEHAT Kuy: Data RS </title>
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

 		<a href="<?php echo base_url(); ?>admin/add_lokasi"> Tambah</a>
	<div>
	<table>
		<tr class="batas_k">
			<td>Nama Rumah Sakit</td>
			<td>Alamat</td>
			<td>Telepon</td>
			<td>Titik Terdekat</td>
		</tr>
		
		<?php foreach ($content->result_array() as $key):?>
		<tr class="batas">
			<td><?php echo $key['Nama_Rs'] ?></td>
			<td><?php echo $key['Alamat_Rs'] ?></td>
			<td><?php echo $key['Telephon_RS'] ?></td>
			<td><?php echo $key['Tempat_Terdekat_Rs'] ?></td>
			<td>
				<a href="<?php echo base_url() ?>admin/upd_lokasi/<?php echo $key['Nama_Rs'] ?>">Edit</a>
				<a href="<?php echo base_url() ?>admin/del_lokasi/<?php echo $key['Nama_Rs'] ?>">Hapus</a>
			</td>
		</tr>
		<?php endforeach ?>	
	</table>
</div>
</body>
</html>