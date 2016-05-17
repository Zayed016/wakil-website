
<?php if($this->session->flashdata('mes')){ echo $_SESSION['mes'];}?><br/><br/>

<?php echo form_open('home/valid'); ?>
<?php echo form_error('username'); ?>
<label>Username: </label>
<input type="text" name="username" value="<?php echo set_value('username'); ?>" />
<br/><br/>
<?php echo form_error('password'); ?>
<label>Password: </label>
<input type="password" name="password" value=""  />
<br/><br/>
<input type="submit" value="Login" />
<?php
echo form_close();
?>
