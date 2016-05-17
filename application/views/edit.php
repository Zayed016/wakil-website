
<?php
foreach ($edit as $one) { $name=$one->name; $details=$one->details;}
foreach ($tid as $value) {
	$v=$value->id;
	}
?>
<div  class="container-fluid">
<div class="row">
  <div class="container" >
  <div  class="col-md-8">
  <form class="form" method="post" action="<?php echo site_url('home/updating')?>">
  
  <fieldset class="form-group">
    <label for="type">Which Type?</label>
    <select  name="type" class="form-control input-lg" >
    <?php  foreach ($list as $key ) {	?>
	 	<option <?php if($key->id==$v){ ?> selected <?php } ?>value="<?=$key->id?>"><?=$key->name?></option>
     <?php	}	?>
     </select> 
  </fieldset>
  <fieldset class="form-group">
    <label for="name">Name</label>
    <input type="hidden" name="id" value="<?=$id?>">
    <input type="text" name="name" value="<?=$name?>" class="form-control input-lg "  placeholder="Enter name of the "/>
    
  </fieldset>
   <fieldset class="form-group">
    <label for="details">Details</label>
    <textarea type="text" name="details" value="<?=$details?>" class="form-control input-lg"  placeholder="use , to seperate"/><?=$details?></textarea>
    
  </fieldset>

  <button class="btn btn-success " name="mit" type="submit" >Submit</button>
 
</form>