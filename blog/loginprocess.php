<?php include "../includes/db.php"; ?>
<?php session_start();?>
<?php
	if(isset($_POST['login'])){


		$username= $_POST['username'];
        $password= $_POST['password'];
        $error = "username/password incorrect";

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


		if($username ==$db_username && $password==$db_user_password) {


			$_SESSION['username'] = $db_username;

			$_SESSION['firstname'] = $db_user_firstname;

			$_SESSION['lastname'] = $db_user_lastname;

			$_SESSION['user_role'] = $db_user_role;

			


			header ("Location: admin");
		}

		else{

            $_SESSION["error"] = $error;
            header("location: login.php");



		}




	}



?>