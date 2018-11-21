<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<title> SEHAT Kuy: Data obat </title>
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
  <li><a class="active" href="/codeigniter/edit_obat">Edit Obat</a></li>
  <li><a href="/codeigniter/edit_penyakit">Edit Penyakit</a></li>
  <li><a href="/codeigniter/edit_lokasi">Edit Lokasi</a></li>
</ul>
	
<br>

 		<a href="<?php echo base_url(); ?>admin/add_obat"> Tambah</a>
	<div>
	<table>
		<tr class="batas_k">
			<td>ID</td>
			<td>Nama</td>
			<td>Manfaat</td>
			<td>Dosis Dewasa (max mg/hari)</td>
			<td>Dosis Anak (max mg/hari)</td>
			<td>Efek Samping</td>
			<td>Harga (/strip)</td>
			<td>Aksi</td>
		</tr>
		
		<?php foreach ($content->result_array() as $key):?>
		<tr class="batas">
			<td><?php echo $key['id_obat'] ?></td>
			<td><?php echo $key['nama_obat'] ?></td>
			<td><?php echo $key['manfaat_obat'] ?></td>
			<td><?php echo $key['dosis_dewasa'] ?></td>
			<td><?php echo $key['dosis_anak'] ?></td>
			<td><?php echo $key['efek_samping'] ?></td>
			<td><?php echo $key['harga_obat']	 ?></td>
			<td>
				<a href="<?php echo base_url() ?>admin/upd_obat/<?php echo $key['id_obat'] ?>">Edit</a>
				<a href="<?php echo base_url() ?>admin/del_obat/<?php echo $key['id_obat'] ?>">Hapus</a>
			</td>
		</tr>
		<?php endforeach ?>	
	</table>
</div>
</body>
</html>
