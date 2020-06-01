<?php include "includes/db.php"; ?>
        <!-- Navigation -->
         <?php include"includes/header.php";?>

        <!-- Navigation -->
        
        <?php include"includes/navigation.php";?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

<?php session_start(); ?>


<?php

	if(isset($_POST['login'])){


		$username= $_POST['username'];
		$password= $_POST['password'];

		$username = mysqli_real_escape_string($conn, $username);
		$password = mysqli_real_escape_string($conn, $password);


		$query = "SELECT * FROM users WHERE username ='{$username}' " ;
		$select_user_query = mysqli_query($conn,$query);

		if(!$select_user_query){


			die ("FAILED QUERY".mysqli_error());

		}

		while ($row = mysqli_fetch_array($select_user_query)){

			$db_id = $row['user_id'];
			$db_username = $row['username'];
			$db_user_password = $row['password'];
			$db_user_firstname = $row['first_name'];
			$db_user_lastname = $row['last_name'];
			$db_user_role = $row['user_role'];
			

		}

		if ($username !==$db_username && $password!==$db_user_password){


			header ("Location: ../index.php");
		}

		elseif(($username ==$db_username && $password==$db_user_password)) {


			$_SESSION['username'] = $db_username;

			$_SESSION['firstname'] = $db_user_firstname;

			$_SESSION['lastname'] = $db_user_lastname;

			$_SESSION['user_role'] = $db_user_role;

			


			header ("Location: ../admin");
		}

		else{


			header ("Location: ../index.php");



		}




	}



?>


<!-- Login -->
                <div class="well">
                    <h4>Login</h4>

                    <form action="" method="post">
                    <div class="form-group">
                        <input name="username" type="text" class="form-control" placeholder="username">

                        </div>

                        <div class="input-group">
                        <input name="password" type="password" class="form-control"placeholder="password">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" name="login" class="btn btn-default" type="submit">Login</button>
                        </span>
                    </div>
                        </form>

                
                    <!-- /.input-group -->
                </div>


            </div>

        </div>


    </div>

     <?php

        include"includes/footer.php";

        ?>