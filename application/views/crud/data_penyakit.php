<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<title> SEHAT Kuy: Data Penyakit </title>
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

 		<a href="<?php echo base_url(); ?>admin/add_penyakit"> Tambah</a>
	<div>
	<table>
		<tr class="batas_k">
			<td>ID</td>
			<td>Nama Penyakit</td>
			<td>Penyebab</td>
			<td>Nama Obat</td>
			<td>Aksi</td>
		</tr>
		
		<?php foreach ($content->result_array() as $key):?>
		<tr class="batas">
			<td><?php echo $key['id_penyakit'] ?></td>
			<td><?php echo $key['nama_penyakit'] ?></td>
			<td><?php echo $key['penyebab'] ?></td>
			<td><?php echo $key['nama_obat'] ?></td>
			<td>
				<a href="<?php echo base_url() ?>admin/upd_penyakit/<?php echo $key['id_penyakit'] ?>">Edit</a>
				<a href="<?php echo base_url() ?>admin/del_penyakit/<?php echo $key['id_penyakit'] ?>">Hapus</a>
			</td>
		</tr>
		<?php endforeach ?>	
	</table>
</div>
</body>
</html>
