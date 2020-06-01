<?php ob_start(); ?>

<?php include "includes/admin_header.php";?>


<?php
    
    if(isset($_SESSION['username'])){


       $username = $_SESSION['username'];

       $query= "SELECT * FROM users WHERE username ='{$username}' ";
       $select_user_profile_query = mysqli_query($conn, $query);

       while ($row= mysqli_fetch_array($select_user_profile_query) ){

            $user_id=$row['user_id'];
            $username=$row['username'];
            $password = $row['password'];
            $first_name=$row['first_name'];
            $last_name=$row['last_name'];
            $user_email=$row['user_email'];
            $user_image=$row['user_image'];
            $user_role=$row['user_role'];





       }



    }

 ?>


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

                        <form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="user_firstname">First Name</label>
        <input type="text" class="form-control" name="user_firstname" value="<?php echo $first_name; ?>" >
    </div>

    <div class="form-group">
        <label for="user_lastname">Last Name</label>
        <input type="text" class="form-control" name="user_lastname" value="<?php echo $last_name; ?>" >
    </div>

    <div class="form-group">
        <label >User Role</label>
        <select name="user_role" id="" >
            <option value="subscriber" ><?php echo $user_role; ?></option>

            <?php  

            if($user_role == 'admin'){

                echo "<option value='subscriber' >Subscriber</option>";
            }

            else "<option value='admin' >Admin</option>";

            ?>
            
            

        </select>
    </div>

    <div class="form-group">
        <label for="Post_tags">Username</label>
        <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" >
    </div>

    <div class="form-group">
        <label for="Post_tags">Email</label>
        <input type="text" class="form-control" name="email" value="<?php echo $user_email; ?>" >
    </div>

<div class="form-group">
        <label for="Post_tags">Password</label>
        <input type="password" class="form-control" name="password" value="<?php echo $password; ?>">
    </div>
    

    <div class="form-group">
                                    
         <input class="btn btn-primary" type="submit" name="edit_user" value="Update Profile">

    </div>

</form>



                    
                            
                       
                       
                     
                                </div>

                        
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
       
       <?php include "includes/admin_footer.php" ?>