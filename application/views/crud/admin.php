<?php?>

<html>
<head>
	<title>Welcome <?php echo $this->session->userdata("nama"); ?> :)</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/sehatkuy.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/login.css">

	<a href="/codeigniter">
		<div class="main">
		<img src="logo.png" alt="logo" style="width:250px;height:auto;">
	</a>

</head>

<ul>
  <li><a class="active" href="">Admin</a></li>
  <li><a href="/codeigniter/edit_obat">Edit Obat</a></li>
  <li><a href="">Edit Penyakit</a></li>
  <li><a href="">Edit Lokasi</a></li>
</ul>
	
<br>


<body style="background-color: #f9dbf0">
	<div class ="line">
		<h1>Login Berhasil</h1>
		<p>Hai, <?php echo $this->session->userdata("nama"); ?></p>
		<div class="login-page">
  			<div class="form">
				<form class="login-form">
					<button><a href="<?php echo base_url('login/logout'); ?>">Logout</a></button>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>