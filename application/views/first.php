<?php

foreach ($list->result() as $row)
{		$id=$row->id;

	echo base_url();
      ?>  
        <a href="<?php echo site_url('home/getdata/'.$id);?>"><?=$row->name;?></a> 
        
<?php   
}
?>