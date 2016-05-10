<?php

echo form_open('home/valid', 'class="email" id="myform"');
?>
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
