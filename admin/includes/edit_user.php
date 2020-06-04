<?php

		if(isset($_GET['edit_user'])){

		$the_user_id = $_GET['edit_user'];

		$query= "SELECT * FROM users WHERE user_id = $the_user_id ";
                                       $select_users_query=mysqli_query($conn,$query); 

                                        while($row=mysqli_fetch_assoc($select_users_query)){

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


            if(isset($_POST['edit_user'])){      


        $user_firstname=  $_POST['user_firstname'];
		$user_lastname = $_POST['user_lastname'];
		$user_role = $_POST['user_role'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		//$post_image = $_FILES ['image'] ['name'];
		//$post_image_temp = $_FILES ['image'] ['tmp_name'];

		//$post_tags =$_POST['post_tags'];
		//$post_content = $_POST['post_content'];	

		//move_uploaded_file($post_image_temp, "../images/$post_image");      

		$query = "UPDATE users SET ";

     	$query .= "first_name = '{$user_firstname}', ";
     	$query .= "last_name = '{$user_lastname}', ";
     	$query .= "user_role = '{$user_role}', ";
     	$query .= "username = '{$username}', ";
     	$query .= "user_email = '{$email}', ";
     	$query .= "password = '{$password}' ";	
     	$query .="WHERE user_id = {$the_user_id} ";

   
		$edit_user_query = mysqli_query($conn,$query);

		confirm($edit_user_query);


	}

?>


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
                                    
         <input class="btn btn-primary" type="submit" name="edit_user" value="Update Information">

    </div>

</form>