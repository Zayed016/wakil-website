<div  class="container-fluid">
<div class="row">
  <div class="container" >
  <div  class="col-md-8">
  <?php if($this->session->flashdata('mes')) echo $_SESSION['mes'];?>
  <form class="form" method="post" action="<?php echo site_url('home/addnew')?>">
  
  <fieldset class="form-group">
    <label for="type">Which Type?</label>
    <select  name="type" class="form-control input-lg" >
    <?php  foreach ($list as $key ) { ?>
    <option value="<?=$key->id?>"><?=$key->name?></option>
     <?php  } ?>
     </select> 
  </fieldset>
  <fieldset class="form-group">
    <label for="name">Name</label>
    <input type="hidden" name="id" value="">
    <input type="text" name="name" class="form-control input-lg "  placeholder="Enter name of the "/>
    
  </fieldset>
   <fieldset class="form-group">
    <label for="details">Details</label>
    <textarea type="text" name="details" value="" class="form-control input-lg"  placeholder="use , to seperate"/></textarea>
    
  </fieldset>

  <button class="btn btn-success " name="mit" type="submit" >Submit</button>
 
</form>