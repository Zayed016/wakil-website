
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

<?php if($this->session->flashdata('mes')) echo $_SESSION['mes'];?>
<a href="<?php echo site_url('home/tonew')?>">Add new data</a>
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
