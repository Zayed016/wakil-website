 <div  class="col-md-8">
<?php echo form_open_multipart('home/addnewtype');?>
<br/><br/>
<?php if($this->session->flashdata('mes')) echo $_SESSION['mes'];?>
 <fieldset class="form-group">
    <label for="type">Which Type?</label>
     <input type="text" name="name" required value="" class="form-control input-lg "  placeholder="Enter name of the type"/>
     </fieldset>

      <button class="btn btn-success " name="mit" type="submit" >Submit</button>