<?php

    include("db.php");
    $query= "SELECT * FROM personal_information";
    $select_posts=mysqli_query($conn,$query);
    


        while($row=mysqli_fetch_assoc($select_posts)){

        $id=$row['id'];
        $location=$row['location'];
        $phone=$row['phone'];
        $email=$row['email'];
        $facebook=$row['facebook'];
        $linkedin=$row['linkedin'];
        $github=$row['github'];
        $twitter=$row['twitter'];

      
        if($id <=0) {

            echo "<h1>NO SKILL FOUND </h1>";

        }

        else{

?>  

                            
                <div class="col-md-3 col-sm-6">
                    <div class="single-contact text-center wow fadeInDown" data-wow-delay="0.4s">
                        <i class="fa fa-home"></i>
                        <h2>Location</h2>
                        <p><?php echo $location; ?></p> <!--edit here-->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-contact text-center wow fadeInDown" data-wow-delay="0.6s">
                        <i class="fa fa-phone"></i>
                        <h2>Phone: </h2>
                        <p><?php echo $phone; ?></p> <!--edit here-->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-contact text-center wow fadeInDown" data-wow-delay="0.8s">
                        <i class="fa fa-envelope-o"></i>
                        <h2>Email</h2>
                        <p><?php echo $email; ?></p> <!--edit here-->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-contact text-center wow fadeInDown" data-wow-delay="1s">
                        <i class="fa fa-gg"></i>
                        <h2>Social Media: </h2>
                        <div class="socials">
                            <a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook"></i></a> <!--your facebook profile link here-->
                            <a href="<?php echo $linkedin; ?>" target="_blank"><i class="fa fa-linkedin"></i></a> <!--your linkedin profile link here-->
                            <a href="<?php echo $github; ?>" target="_blank"><i class="fa fa-github"></i></a> <!--your twitter profile link here-->
                            <a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a> <!--your pinterest profile link here-->
                        </div>
                    </div>
                </div>


<?php } } ?>