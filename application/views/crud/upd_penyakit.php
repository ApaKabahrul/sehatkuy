<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<title> Edit Obat </title>
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
  <li><a class="active" href="/codeigniter/edit_penyakit">Edit Penyakit</a></li>
  <li><a href="/codeigniter/edit_lokasi">Edit Lokasi</a></li>
</ul>
	
<br>

	<?php foreach ($content->result() as $key):?> 
			<form action=" <?php echo base_url(); ?>admin/aksi_upd_penyakit/<?php echo $key->id_penyakit ?>" method="post">
				<input type="text" name="nama_penyakit" placeholder="Nama" value="<?php echo $key->nama_penyakit ?>"> <br>
				<input type="text" name="penyebab" placeholder="Penyebab" value="<?php echo $key->penyebab ?>"> <br>
				<input type="text" name="nama_obat" placeholder="Nama Obat" value="<?php echo $key->nama_obat ?>"> <br>
				<input type="submit" value="Update">
	</form>
 	<?php endforeach ?>	
</html>