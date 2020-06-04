<?php

    include("db.php");
    $query= "SELECT * FROM project";
    $select_posts=mysqli_query($conn,$query);
    


        while($row=mysqli_fetch_assoc($select_posts)){

        $p_id=$row['p_id'];
        $p_name=$row['p_name'];
        $p_description=$row['p_description'];
        $p_image=$row['p_image'];
        $client=$row['client'];
        $date=$row['completed'];
        $type=$row['Type'];
        $link=$row['Link'];
        

       


        if($id <=0) {

            echo "<h1>NO SKILL FOUND </h1>";

        }

        else{

?>

        <div class="col-md-4 col-sm-6 col-xs-12 no-pad">
            <div id="inline-popups" class="port-box">
                <a href="#test-popup" data-effect="mfp-zoom-out">
                    <div class="hovereffect">

                        <img src="images/portfolio/<?php echo $p_image; ?>" alt="portfolio image" class="img-responsive"> <!--edit image-->
                        <div class="overlay">
                            <h2><?php echo $p_name; ?></h2> <!--your project name-->
                            <p><?php echo $p_description; ?></p>
                        </div>

                    </div>
                </a>
            </div>
            <div id="test-popup" class="white-popup mfp-with-anim mfp-hide">
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <div class="por-img">
                            <img src="images/portfolio/port1.jpg" alt="portfolio image" class="img-responsive"> <!--edit image-->
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="por-text">
                            <h2><?php echo $p_name; ?></h2> <!--your project title-->
                            <p><?php echo $p_description; ?></p>
                            <div class="por-text-details">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <p>Client: </p>
                                        <p>Completed:</p>
                                        <p>Type:</p>
                                        <p>link:</p>
                                    </div>
                                    <div class="col-xs-offset-1 col-xs-7">
                                        <p><?php echo $client; ?></p> <!--edit here-->
                                        <p><?php echo $date; ?></p> <!--edit here-->
                                        <p><?php echo $type; ?></p> <!--edit here-->
                                        <p><?php echo $link; ?></p> <!--edit here-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

      
<?php } } ?>