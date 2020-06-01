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
                        

                        <div class="col-xs-6">

                            <?php

                           insert_categories();


                            ?>
                            
                            <form action="" method="post">

                                <div class="form-group">

                                    <label for="cat_title">ADD Category</label>

                                    <input type="text" class="form-control" name="cat_title">

                                </div>

                                <div class="form-group">
                                    
                                    <input class="btn btn-primary" type="submit" name="submit" value="ADD Category">

                                </div>


                        </form>

                        <?php  

                        if(isset($_GET['edit'])){

                            $cat_id = $_GET['edit'];

                            include "includes/edit_categories.php ";



                        }

                        ?>
                        

                        </div>


                        <div class="col-xs-6">


                           
                                    
                                 <table class="table table-bordered table-hover">
                                     
                                     <thead>
                                         
                                         <tr>
                                             <th> ID </th>
                                             <th>Category Title</th>
                                             <th>Delete Category</th>
                                             <th>Update Category</th>

                                         </tr>
                                     </thead>

                                     <tbody>

                                        
                                       <?php show_data(); ?>


                                    <?php 

                                    delete_data();


                                    ?>
                                         
                                            


                                         

                                     </tbody>


                                 </table>
                                </div>

                        
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
       
       <?php include "includes/admin_footer.php" ?>