<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<title> Tambah admin </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
	<a href="/codeigniter">
<div class="main">
	<img src="logo.png" alt="logo" style="width:250px;height:auto;">
</a>
</head>


<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/admin.css">
<body style="background-color: #f9dbf0">
	<ul>
  <li><a href="/codeigniter/admin">Admin</a></li>
  <li><a href="/codeigniter/edit_obat">Edit Obat</a></li>
  <li><a href="/codeigniter/edit_penyakit">Edit Penyakit</a></li>
  <li><a href="/codeigniter/edit_lokasi">Edit Lokasi</a></li>
  <li><a class="active" href="/codeigniter/edit_admin">Cek Admin</a></li>
</ul>
	
<br>
<div class="admin-page">
  	<div class="form1">
		<form class="admin-form"  action=" <?php echo base_url(); ?>admin/aksi_add_admin" method="post">
			<input type="text" name="username" placeholder="Username"> <br>
			<input type="password" name="password" placeholder="Password"> <br>
			<input type="submit" value="Tambah">
			
		</form>
 		</div>
	</div>

</html>