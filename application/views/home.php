<ul>
<?php

foreach ($list as $row)
{		$id=$row->id;

	
      ?>  
<li>        <a href="<?php echo site_url('home/catagories/'.$id);?>"><?=$row->name;?></a> </li>
        
<?php   
}
?></ul>

<!-- INSERT INTO `types` (`id`, `name`) VALUES (NULL, 'Generator'), (NULL, 'Sub-station'), (NULL, 'Stabilizer'), (NULL, 'IPS/UPS'), (NULL, 'IVS'), (NULL, 'CCTV'), (NULL, 'Solar system'), (NULL, 'LED light'), (NULL, 'Electrical accessories'); -->

