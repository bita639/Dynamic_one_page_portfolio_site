
<?php
	if (isset($_POST['create_user'])) {
		

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
		//$post_date =date('d-m-y');

		//$post_comment_count = 4;


		//move_uploaded_file($post_image_temp, "../images/$post_image");

		$query = "INSERT INTO users(first_name,last_name,user_role,username,user_email,password)";

		$query .= "VALUES('{$user_firstname}','{$user_lastname}','{$user_role}','{$username}','{$email}','{$password}' ) ";

		$create_user_query=mysqli_query($conn,$query);

		confirm($create_user_query);



	}

?>
<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label for="user_firstname">First Name</label>
		<input type="text" class="form-control" name="user_firstname">
	</div>

	<div class="form-group">
		<label for="user_lastname">Last Name</label>
		<input type="text" class="form-control" name="user_lastname">
	</div>

	<div class="form-group">
		<select name="user_role" id="" >
			<option value="subscriber" >SELECT</option>
			<option value="admin" >Admin</option>
			<option value="subscriber" >Subscriber</option>

		</select>
	</div>

	<div class="form-group">
		<label for="Post_tags">Username</label>
		<input type="text" class="form-control" name="username">
	</div>

	<div class="form-group">
		<label for="Post_tags">Email</label>
		<input type="text" class="form-control" name="email">
	</div>

<div class="form-group">
		<label for="Post_tags">Password</label>
		<input type="password" class="form-control" name="password">
	</div>
	

	<div class="form-group">
                                    
         <input class="btn btn-primary" type="submit" name="create_user" value="Add User">

    </div>

</form>