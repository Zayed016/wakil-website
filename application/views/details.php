<?php 

   foreach ($detail as $row) {
   echo $row->name;
   echo "<br>";
   $n=explode(",",$row->details);
       ?>   
     <img src="<?php echo base_url("assets/image/".$row->image);?>" height="200">
     <ul>
  <?php
   foreach ($n as $key ) {
   	?>
   	<li><?php echo $key;?></li>
   	<?php
   }?>
</ul>

  <?php }?>