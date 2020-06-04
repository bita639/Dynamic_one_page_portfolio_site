

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Username</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Image</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    
                                    <th>Delete</th>
                                    <th>Edit</th>
                                    <th>Admin</th>
                                    <th>Subscriber</th>
                                    
                                    

                                </tr>
                            </thead>


                             <tbody>

                                <?php

                                    $query= "SELECT * FROM users";
                                       $select_users=mysqli_query($conn,$query); 

                                        while($row=mysqli_fetch_assoc($select_users)){

                                        $user_id=$row['user_id'];
                                        $username=$row['username'];
                                       
                                        $first_name=$row['first_name'];
                                        $last_name=$row['last_name'];
                                        $user_email=$row['user_email'];
                                        $user_image=$row['user_image'];
                                        $user_role=$row['user_role'];
                                        //$post_date=$row['post_date'];

                                        echo "<tr>";
                                        echo"<td>$user_id</td>";
                                        echo"<td>$username</td>";
                                        echo"<td>$first_name</td>";

           /* $query= "SELECT * FROM categories WHERE cat_id = {$post_category_id}  ";
            $select_categories_id=mysqli_query($conn,$query); 

                            while($row=mysqli_fetch_assoc($select_categories_id)){

                                $cat_id=$row['cat_id'];

                                $cat_title=$row['cat_title'];

                                echo"<td>{$cat_title}</td>";

                            } */



                                        

                                        echo"<td>$last_name</td>";
                                        echo"<td> <img width='auto' height='50px' src='../images/$user_image' alt='image'></td>";
                                        echo"<td>$user_email</td>";
                                        echo"<td>$user_role</td>";
                                        
                            echo"<td><a href='users.php?delete={$user_id}'>Delete</a></td>";

                            echo"<td><a href='users.php?source=edit_user&edit_user={$user_id}'>Edit</a></td>";

            echo"<td><a href='users.php?change_to_admin={$user_id}'>Admin</a></td>";
            echo"<td><a href='users.php?change_to_sub={$user_id}'>Subscriber</a></td>";
                                        
                                        echo "</tr>";



                                    }

                                        
                                ?>
                            
                                
                                
                            

                        </tbody>

                        </table>

                        <?php

                           if(isset($_GET['delete'])){

                                $the_user_id = $_GET['delete'];

                        $query = "DELETE FROM users WHERE user_id =$the_user_id ";
                                $change_admin_query = mysqli_query ($conn,$query);

                                header("Location: users.php");


                            }


                            if(isset($_GET['change_to_admin'])){

                                $the_user_id = $_GET['change_to_admin'];

            $query = "UPDATE users SET user_role='admin' WHERE user_id =$the_user_id ";
                                $change_admin_query = mysqli_query ($conn,$query);

                                header("Location: users.php");


                            }


                            if(isset($_GET['change_to_sub'])){

                                $the_user_id = $_GET['change_to_sub'];

            $query = "UPDATE users SET user_role='subscriber' WHERE user_id =$the_user_id ";
                                $change_subscriber_query = mysqli_query ($conn,$query);

                                header("Location: users.php");


                            }



                        


                        


                        ?>

                    