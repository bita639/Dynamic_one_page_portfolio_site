<?php

    include("db.php");
    $query= "SELECT * FROM skill";
        $select_posts=mysqli_query($conn,$query); 

        while($row=mysqli_fetch_assoc($select_posts)){

        $skill_id=$row['id'];
        $skill_name=$row['skill_name'];
        $percentage=$row['percentage'];

        if($skill_id <=0) {

            echo "<h1>NO SKILL FOUND </h1>";

        }

        else{

?>

        

        <!-- skillbar -->
        <div class="skillbar" data-percent="<?php echo $percentage; ?>%"> <!--edit percentage-->

            <h6 class="skillbar-title"><?php echo $skill_name; ?></h6> <!--edit skills-->
            <h6 class="skillbar-percent"><?php echo $percentage; ?>%</h6> <!--edit percentage-->

            <div class="skillbar-bar">
                <div class="skillbar-child"></div>
            </div>

        </div>
        <!-- end skillbar -->
        <?php } } ?>