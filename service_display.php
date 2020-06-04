<?php

    include("db.php");
    $query= "SELECT * FROM services";
        $select_posts=mysqli_query($conn,$query); 

        while($row=mysqli_fetch_assoc($select_posts)){

        $s_id=$row['s_id'];
        $s_title=$row['s_title'];
        $s_description=$row['s_description'];
        $s_logo=$row['s_logo'];


        if($skill_id <=0) {

            echo "<h1>NO SKILL FOUND </h1>";

        }

        else{

?>

        

      <div class="single-services text-center item">
        <div class="services-icon">
            <i class="<?php echo $s_logo; ?>"></i>
        </div>
        <div class="services-content">
            <h3><?php echo $s_title; ?></h3> <!--edit the service you give-->
            <p><?php echo $s_description; ?></p>
        </div>

        </div>
<?php } } ?>