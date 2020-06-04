<?php ob_start(); ?>



<?php include "includes/admin_header.php";?>



    <div id="wrapper">

        <!-- Navigation -->

        <?php include "includes/admin_Navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">

                    
                    <div class="col-lg-12">


                        <h1 class="page-header">
                            Welcome to Admin Panel
                            <small>Author</small>
                        </h1>

                            <?php

                            if(isset($_GET['source'])){

                                $source = $_GET['source'];

                            }else{

                                $source= '';
                            }

                                switch($source){

                                    case 'add_user';
                                    include "includes/add_user.php";
                                    break;

                                    case 'edit_user':
                                    include "includes/edit_user.php";
                                    break;

                                    default:

                                    include "includes/view_all_users.php";

                                    break;



                                }



                            ?>
                       
                       
                     
                                </div>

                        
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
       
       <?php include "includes/admin_footer.php" ?>