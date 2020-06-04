<!DOCTYPE html>
<html>
    <head>
        <title>Insert Data from html form to MySQL Database using Ajax and PHP</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="message" style="display: none;">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quo ex pariatur aliquid vero!
                Voluptatibus harum accusamus amet maiores at sit, neque magni nulla ut optio quis culpa nisi nostrum!
            </p>
        </div>
        <form id="myForm">
            <label for="name">Name:</label>
            <input type="text" id="name" placeholder="Name" name="name" />
            <input type="submit" name="save" value="Submit" id="btn-save" />
        </form>

        <script>
            const submit = $('#btn-save').click(function (e) {
                e.preventDefault();

                const name = $('#name').val();

                if(!name) return alert('Please enter your name');

                $.ajax({
                    url: 'index.php',
                    type: 'POST',
                    data: { name: name },
                    success: function (data) {
                        $('.message').show();
                        $('#myForm').hide();
                    },
                });
            });
        </script>
    </body>
</html>

<?php
    $conn = mysqli_connect("localhost", "root", "","mydb");

    // Checking connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    // If the form data found save and send response
    if(isset($_POST['name'])){
        $name=$_POST['name'];
        $sql = "INSERT INTO `users`( `name`) VALUES ('$name')";

        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("statusCode"=>200)); 
        }
        else { 
            echo json_encode(array("statusCode"=>201)); 
        } 
        mysqli_close($conn);
    }
?>