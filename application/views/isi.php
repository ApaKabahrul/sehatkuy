<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<title> SEHAT Kuy</title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/sehatkuy.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">



<head>

<div class="main">
	<img src="logo.png" alt="logo" style="width:250px;height:auto;">

</head>

<ul>
  <li><a class="active" href="/codeigniter">Home</a></li>
  <li><a href="/codeigniter/obat">Data Obat</a></li>
  <li><a href="/codeigniter/sehat">Hidup Sehat</a></li>
  <li><a href="/codeigniter/penyakit">Data Penyakit</a></li>
  <li><a href="/codeigniter/lokasi">Lokasi Rumah Sakit</a></li>
  <li><a href="/codeigniter/tentang">Tentang</a></li>
</ul>
	
<br>

<body style="background-color: #f9dbf0">

<div class="container">
	<input type="radio" name="slide" class="radio-nav" id="nav-1" checked/>
	<input type="radio" name="slide" class="radio-nav" id="nav-2"/>
	<input type="radio" name="slide" class="radio-nav" id="nav-3"/>

	<ul class="slide">
		<li class="slide-1">
			<img src="images/post1.jpg"/>
			<div class="caption">Manfaat Olahraga bagi Kesehatan Mental</div>
		</li>
		<li class="slide-2">
			<img src="images/post2.jpg"/>
			<div class="caption">7 Tips Pola Hidup Sehat yang Harus Mulai Dilakukan dari Sekarang</div>
		</li>
		<li class="slide-3">
			<img src="images/post3.jpg"/>
			<div class="caption">Kebiasaan Hidup Sehat yang Baik Dilakukan Sebelum Tidur Malam</div>
		</li>
	</ul>

	<div class="nav-arrow nav-next">
		<label class="nav-1" for="nav-1">></label>
		<label class="nav-2" for="nav-2">></label>
		<label class="nav-3" for="nav-3">></label>
	</div>
	<div class="nav-arrow nav-prev">
		<label class="nav-1" for="nav-1"><</label>
		<label class="nav-2" for="nav-2"><</label>
		<label class="nav-3" for="nav-3"><</label>
	</div>
</div>

			
</body>


</html>