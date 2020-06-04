<?php

    include("db.php");
    $query= "SELECT * FROM testimonial";
    $select_posts=mysqli_query($conn,$query);
    


        while($row=mysqli_fetch_assoc($select_posts)){

        $t_id=$row['t_id'];
        $t_name=$row['t_name'];
        $t_role=$row['t_role'];
        $t_description=$row['t_description'];
        $t_image=$row['t_image'];

      
        if($id <=0) {

            echo "<h1>NO SKILL FOUND </h1>";

        }

        else{

?>  

                            
        <div class="single-testi text-center item">
            <div class="testi-img">
                <img src="images/testimonial/<?php echo $t_image; ?>" alt="testimonial image"> <!--edit image-->
            </div>
            <div class="block-quote">
                <p><?php echo $t_description; ?></p> <!--edit here-->
                <h2><?php echo $t_name; ?></h2> <!--edit here-->
                <h3><?php echo $t_role; ?></h3> <!--edit here-->
            </div>

        </div>


<?php } } ?>