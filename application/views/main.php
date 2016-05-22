<!DOCTYPE html>
<html>
<head>
	<title>Wakil</title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css"); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap-responsive.css"); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap-responsive.min.css"); ?>">

<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</head>

 <body>
 <?php
 $d=$this->db->query("select id,name from types");
$for=$d->result();
 ?>
<div class="container" >
<div class="row">

<ul class="nav nav-pills">
 <li class="dropdown">
	  <a href="<?php echo site_url()?>">Home</a>
	</li>
 <li class="dropdown">
  <a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown <b class="caret"></b></a>
	  <ul class="dropdown-menu" id="menu1">
	  <?php foreach ($for as $k) { $id=$k->id;?>
	   <li><a href="<?php echo site_url('home/catagories/'.$id);?>"><?=$k->name;?></a></li>
	   <?php }?>
	  </ul>
 </li>
	<li class="dropdown">
	  <a href="#">Menu</a>
	</li>
	<li class="dropdown">
	  <a href="#">Menu</a>
	</li>
</ul>

<?php $this->load->view($view);?>

</body>
<footer>
	
</footer>

</html>