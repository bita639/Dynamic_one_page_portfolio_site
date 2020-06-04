<?php

    include("db.php");
    $query= "SELECT * FROM number_area";
    $select_posts=mysqli_query($conn,$query);
    


        while($row=mysqli_fetch_assoc($select_posts)){

        $id=$row['id'];
        $area_icon=$row['area_icon'];
        $area_value=$row['area_value'];
        $area_type_decription=$row['area_type_decription'];

       


        if($id <=0) {

            echo "<h1>NO SKILL FOUND </h1>";

        }

        else{

?>

        <div class="col-md-3 col-xs-6">
            <div class="single-number text-center">
                <i class="<?php echo $area_icon; ?>"></i>
                <h2 class="counter"><?php echo $area_value; ?></h2> <!--edit-->
                <p><?php echo $area_type_decription; ?></p>
            </div>
		</div>

      
<?php } } ?>