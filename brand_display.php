<?php

    include("db.php");
    $query= "SELECT * FROM clients_logo";
    $select_posts=mysqli_query($conn,$query);
    


        while($row=mysqli_fetch_assoc($select_posts)){

        $id=$row['id'];
        $clients_name=$row['clients_name'];
        $brand_logo=$row['brand_logo'];

        if($id <=0) {

            echo "<h1>NO SKILL FOUND </h1>";

        }

        else{

?>
    
  
    <div class="col-md-3 col-xs-6 col-sm-3">
        <div class="brand-logo-img wow fadeInDown" data-wow-delay="0.2s">
            <img src="images/brand/<?php echo $brand_logo; ?>" alt="brand image"> <!--edit image-->
        </div>
    </div>
        

      
<?php } } ?>

