
<?php
	if (isset($_POST['create_post'])) {
		
		$post_title=  $_POST['title'];
		$post_title= mysqli_escape_string($conn,$post_title);
		$post_author = $_POST['author'];
		$post_category_id = $_POST['post_category'];
		$Post_status = $_POST['post_status'];

		$post_image = $_FILES ['image'] ['name'];
		$post_image_temp = $_FILES ['image'] ['tmp_name'];

		$post_tags =$_POST['post_tags'];
		$post_content = $_POST['post_content'];
		$post_date =date('d-m-y');
		//$post_comment_count = 4;


		move_uploaded_file($post_image_temp, "../images/$post_image");

		$query = "INSERT INTO posts(post_category_id,post_title,Post_author,Post_date,Post_image,post_content,post_tags,post_status)";

		$query .= "VALUES({$post_category_id},'{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tags}','{post_status}' ) ";

		$create_post_query=mysqli_query($conn,$query);

		confirm($create_post_query);



	}

?>
<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label for="title">Post Title</label>
		<input type="text" class="form-control" name="title" required>
	</div>

	<div class="form-group">
		<label for="Post_author">Post Author</label>
		<input type="text" class="form-control" name="author" required >
	</div>

	<div class="form-group">
		<select name="post_category" id="" required >
			
<?php

 									   $query= "SELECT * FROM categories";

                                       $select_categories=mysqli_query($conn,$query); 

                                       confirm($select_categories);

                                        while($row=mysqli_fetch_assoc($select_categories)){

                                        $cat_id = $row['cat_id'];

                                        $cat_title=$row['cat_title'];

                                        echo "<option value='$cat_id'>{$cat_title}</option>";

                                    }

?>



		</select>
	</div>

	<div class="form-group">
		<label for="Post_status">Post Status</label>
		<input type="text" class="form-control" name="post_status" required >
	</div>

	<div class="form-group">
		<label for="Post_image">Post Image</label>
		<input type="file" class="form-control" name="image" required>
	</div>

	<div class="form-group">
		<label for="Post_tags">Post Tags</label>
		<input type="text" class="form-control" name="post_tags" required>
	</div>

	<div class="form-group">
		<label for="Post_content">Post Content</label>
		<textarea class="form-control" name="post_content" id="" cols="30" rows="10" required ></textarea>
	</div>

	<div class="form-group">
                                    
         <input class="btn btn-primary" type="submit" name="create_post" value="Create Post">

    </div>

</form>