<ul>
<?php

foreach ($list->result() as $row)
{		$id=$row->id;

	
      ?>  
<li>        <a href="<?php echo site_url('home/catagories/'.$id);?>"><?=$row->name;?></a> </li>
        
<?php   
}
?></ul>