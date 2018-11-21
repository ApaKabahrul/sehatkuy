<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<title> Edit Obat </title>
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

	<?php foreach ($content->result() as $key):?> 
			<form action=" <?php echo base_url(); ?>admin/aksi_upd_obat/<?php echo $key->id_obat ?>" method="post">
				<input type="text" name="nama_obat" placeholder="Nama" value="<?php echo $key->nama_obat ?>"> <br>
				<input type="text" name="manfaat_obat" placeholder="Manfaat" value="<?php echo $key->manfaat_obat ?>"> <br>
				<input type="text" name="dosis_dewasa" placeholder="Dosis Dewasa (max mg/hari)" value="<?php echo $key->dosis_dewasa ?>"> <br>
				<input type="text" name="dosis_anak" placeholder="Dosis Anak (max mg/hari)" value="<?php echo $key->dosis_anak ?>"> <br>
				<input type="text" name="efek_samping" placeholder="Efek Samping" value="<?php echo $key->efek_samping ?>"> <br>
				<input type="text" name="harga_obat" placeholder="Harga (/strip)" value="<?php echo $key->harga_obat ?>"> <br>
				<input type="submit" value="Update">
	</form>
 	<?php endforeach ?>	
</html>
