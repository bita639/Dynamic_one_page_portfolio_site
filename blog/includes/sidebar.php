 

 <div class="col-md-4">



                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Search</h4>

                    <form action="search.php" method="post">
                    <div class="input-group">
                        
                        <input name="search" type="text" class="form-control" required>
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                        </form>

                
                    <!-- /.input-group -->
                </div>

                



                <!-- Blog Categories Well -->
                <div class="well">

                    <?php

                    $query= "SELECT * FROM categories";
                    $select__categories_sidebar=mysqli_query($conn,$query);

                    ?>


                    <h4>Content Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            
                            

                            <ul class="list-unstyled">

                                <?php

                            while($row=mysqli_fetch_assoc($select__categories_sidebar)){

                            $cat_title=$row['cat_title'];
                            $cat_id = $row ['cat_id'];

                            echo "<li><a href='category.php?category=$cat_id'>{$cat_title}</a></li>";
                        

                            }

                            ?>

                                <!-- <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li> -->
                            </ul>
                        </div>
                        
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->

                    <div class="well">
                        <h4>Get My Latest Post</h4>

                    <form action="subscribe.php" method="post">
                    <div class="form-group">
                        
                        <input name="email" type="text" class="form-control" placeholder="example@example.com" required>

                    </div>

                    <div class="form-group">
                                    
                    <input class="btn btn-primary" type="submit" name="subscribe" value="Subscribe">

                    </div>
                        </form>
                    
                </div>

            </div>