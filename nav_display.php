<?php

    include("db.php");
    $query= "SELECT * FROM navbar";
    $select_posts=mysqli_query($conn,$query);
    


        while($row=mysqli_fetch_assoc($select_posts)){

        $n_id=$row['n_id'];
        $n_name=$row['n_name'];
        $n_link=$row['n_link'];
       


        if($n_id <=0) {

            echo "<h1>NO SKILL FOUND </h1>";

        }

        else{

?>

        
            <!--<ul class="nav navbar-nav navbar-right">-->

                <li class="active"><a class="smooth-menu" href="<?php echo $n_link; ?>"><?php echo $n_name; ?></a></li>
            
            <!--</ul>-->
            
        

      
<?php } } ?>