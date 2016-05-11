
<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/css/bootstrap.css"); ?>"></script>
<script type="text/javascript">
function fetch_select(val)
{
   $.ajax({
     type: 'post',
     url: '<?php echo base_url("assets/getuser.php"); ?>',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("txtHint").innerHTML=response; 
     }
   });
}

</script>
<?php if($this->session->flashdata('mes')) print_r($_SESSION['mes']);?>
   <form>
<select  name="users" onchange="fetch_select(this.value)">
  <option value="">Select A type of food</option>
<?php

foreach ($list as $row)
{		$id=$row->id;
	
      ?>  
      <option value="<?=$row->id;?>"><?=$row->name;?></option>
        
<?php   
}
?>
   </select>
</form>
<br>

<div id="txtHint"><b>Food will be listed here...</b></div>
