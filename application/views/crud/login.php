<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<head>
	<title>Login</title>
</head>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/sehatkuy.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/login.css">
<img src="logo.png" alt="logo" style="width:20%;height:auto;">
<body style="background-color: #f9dbf0">
	
<div class="login-page">
  <div class="form">
    <form class="login-form" action="<?php echo base_url('login/aksi_login'); ?>" method="post">
      <input type="text" placeholder="Input Username" name="username"/>
      <input type="password" placeholder="Input Password" name="password"/>
      <button>Masuk</button>
    </form>
  </div>
</div>

</body>