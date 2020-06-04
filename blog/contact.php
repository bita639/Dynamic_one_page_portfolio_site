

        <!-- Navigation -->
         <?php include"includes/header.php";?>

        <!-- Navigation -->
        
        <?php include"includes/navigation.php";?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-md-3"></div>

            <!-- Blog Entries Column -->
            <div class="col-md-4">

                <h2>Contact us</h2>
        
        <form action="contact_process.php" method="post">
            <div class="form-group">
                <label>email</label>
                <input type="text" name="email"class="form-control" required>
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Subject</label>
                <input type="text" name="subject" class="form-control" required>
                <span class="help-block"></span>
            </div>

            <div class="form-group">
                <label>Message</label>
                <textarea type="text" class= "form-control"  name="message"></textarea>            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name ="contact" value="contact">
            </div>
            <p>Don't have an account? <a href="reg.php">Sign up now</a>.</p>
        </form>

             

            </div>

            <!-- Blog Sidebar Widgets Column -->
           
           <? /*php include"includes/sidebar.php"; */ ?> 

        </div>
        <!-- /.row -->

        <hr>

        <?php

        include"includes/footer.php";

        ?>