<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<title> Edit Lokasi </title>
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
</ul>
	
<br>

	<?php foreach ($content->result() as $key):?> 
			<form action=" <?php echo base_url(); ?>admin/aksi_upd_lokasi/<?php echo $key->Nama_Rs ?>" method="post">
				<input type="text" name="Nama_Rs" placeholder="Nama Rumah Sakit" value="<?php echo $key->Nama_Rs ?>"> <br>
				<input type="text" name="Alamat_Rs" placeholder="Manfaat" value="<?php echo $key->Alamat_Rs ?>"> <br>
				<input type="text" name="Telephon_Rs" placeholder="Dosis Dewasa (max mg/hari)" value="<?php echo $key->Telephon_Rs ?>"> <br>
				<input type="text" name="Tempat_terdekat_Rs" placeholder="Dosis Anak (max mg/hari)" value="<?php echo $key->Tempat_terdekat_Rs ?>"> <br>
				<input type="submit" value="Update">
	</form>
 	<?php endforeach ?>	
</html>