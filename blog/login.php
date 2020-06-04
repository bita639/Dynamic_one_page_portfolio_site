<?php session_start();?>
<?php include "includes/db.php"; ?>
        <!-- Navigation -->
         <?php include"../includes/header.php";?>

        <!-- Navigation -->
        
        <?php include"../includes/navigation.php";?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

        	<div class="col-md-4"></div>
            <!-- Blog Entries Column -->
            <div class="col-md-4">





	<div class="wrapper">
        <h2>Login</h2>
        <p>
            <?php 
                if(isset($_SESSION["error"])){
                    $error = $_SESSION["error"];
                    echo "<span>$error</span>";
                }
            ?>
        </p>

        <form action="loginprocess.php" method="post" >
            <div class="form-group">
                <label>Email</label>
                <input name="username" type="text" class="form-control" placeholder="username" required>
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input name="password" type="password" class="form-control"placeholder="password" required>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <span class="input-group-btn">
                            <button class="btn btn-primary" name="login" class="btn btn-default" type="submit">Login</button>
                        </span>
            </div>
            <p>Don't have an account? <a href="reg.php">Sign up now</a>.</p>
        </form>
    </div>  

<!-- Login -->
               

                
                    <!-- /.input-group -->
                </div>


            </div>

        </div>


    </div>

    <?php
    unset($_SESSION["error"]);
    ?>

     <?php

        include"includes/footer.php";

        ?>