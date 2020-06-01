<?php 

include("db.php");

    if (isset($_POST['submit'])) 
    {
        $form_name=  $_POST['name'];
        $query = "INSERT INTO `test` (`xxname`) VALUES ('$form_name')";
        if(mysqli_query($conn, $query))
        {
            echo "asdfghjkl";
        } 
        else
        {
            echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
        }
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <div id="section" style="display: none;">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae cupiditate culpa reprehenderit animi,
            numquam distinctio repellendus debitis fugit unde consequatur eum magni illo minima amet quidem omnis veniam
            commodi voluptatum!
        </p>
    </div>
    <div id="myForm">
        <form id="testForm" method="post" action="#">
            <input id="form_name" type="text" name="name" class="form-control">
            <input type="submit" name="submit" class="btn btn-send" value="submit">
        </form>
    </div>
   
    <script type="text/javascript">
        const sectionDiv = document.getElementById('section');
        const form = document.getElementById('myForm');

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            form.style.display = 'none';
            sectionDiv.style.display = 'block';
        });
    </script>
</body>

</html>