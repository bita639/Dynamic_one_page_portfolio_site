<?php
   include("db.php");

   $query= "SELECT * FROM profile";

   $select_profile=mysqli_query($conn,$query); 


   while ($row    = mysqli_fetch_array($select_profile)){

    
    $full_name=$row['full_name'];
    $job_title=$row['job_title'];
    $description=$row['description'];
    $resume=$row['resume'];
    $image=$row['image'];



   }





?>