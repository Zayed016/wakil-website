<!DOCTYPE html>
<html>
<head>
	<title>Wakil</title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap-responsive.css"); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap-responsive.min.css"); ?>">

<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</head>

 <body>
<div  class="container-fluid">
<div class="row">
<div class="container" >
<a href="home/">Home</a>
<a href="">Products</a>
<a href="about"></a>
<?php $this->load->view($view);?>

</body>
<footer>
	
</footer>

</html>