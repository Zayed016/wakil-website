
<?php

foreach ($all as $row)
{		
	$id=$row->id;
	echo $row->name;
	
      ?>  
      <a href="<?php echo site_url('home/detail/'.$row->id)?>">Details</a> 
        
<?php   
}
echo $this->pagination->create_links();
?>

