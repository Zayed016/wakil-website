
<?php

foreach ($all as $row)
{		
	$id=$row->id;
	echo $row->name;
	
      ?>
      <img src="<?php echo base_url("assets/image/".$row->image);?>" height="200">  
      <a href="<?php echo site_url('home/detail/'.$row->id)?>">Details</a> 

        
<?php   
}
echo $this->pagination->create_links();
?>

