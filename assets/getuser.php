<?php
   
           
   if(isset($_POST['get_option']))
   {
     $host = 'localhost';
     $user = 'root';
     $pass = '';
           
     $conn = new mysqli($host, $user, $pass);

     mysqli_select_db($conn,'tech');      

     $state = $_POST['get_option'];
     $find=mysqli_query($conn,"select * from products where type_id='$state' order by id desc");
          while($row=mysqli_fetch_array($find))
     {
       echo $row['name'];

       ?><a href="edit/<?=$row['id'];?>">Edit</a>
       	
       	 <a href="delete/<?=$row['id'];?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>

       <?php
     }
   
     exit;
   }

?>