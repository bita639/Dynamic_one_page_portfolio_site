<?php 


function confirm($result){
    global $conn;
    if(!$result){

        die('QUERY FAILED'. mysqli_error($conn));
    }

    return $result;


}

function insert_categories(){

    if (isset($_POST['submit'])){


                                global $conn;

                                $cat_title = $_POST['cat_title'];

                                if($cat_title == "" || empty($cat_title)){


                                    echo "This Field Should Not be Empty";

                                }

                                else {

                                    $query = "INSERT INTO categories (cat_title)";
                                    $query .= "VALUE ('{$cat_title}') ";

                                    $create_category_query = mysqli_query ($conn, $query);


                                    if (!$create_category_query){

                                        die('QUERY FAILED'. mysqli_error($conn));
                                    }


                                }

                            }  
}

function show_data(){

                                //FIND ALL Categories QUery

                                        global $conn;

                                       $query= "SELECT * FROM categories";
                                       $select_categories=mysqli_query($conn,$query); 

                                        while($row=mysqli_fetch_assoc($select_categories)){

                                        $cat_id=$row['cat_id'];

                                        $cat_title=$row['cat_title'];

                                        echo "<tr>";
                                        echo"<td> {$cat_id} </td>";
                                        echo"<td>{$cat_title}</td>";
                                        echo"<td><a href='categories.php?delete={$cat_id}'> Delete </a> </td>";
                                        echo"<td><a href='categories.php?edit={$cat_id}'> Edit </a> </td>";
                                        echo "</tr>";

                                         }

                                    
}


    function delete_data(){

                                    //delete category Query

                                    global $conn;


                                    if (isset($_GET['delete'])){

                                        $the_cat_id = $_GET['delete'];

                                        $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";

                                        $delete_query = mysqli_query ($conn, $query);

                                        header ('location:categories.php');



                                    }



    }
 

?>
