<?php

foreach ($pro->result() as $row)
{	
    echo $row->id;	
	echo $row->name;
}
?>