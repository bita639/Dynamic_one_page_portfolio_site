
   <?php
    ob_start();

    include("db.php");
        
    // If the form data found save and send response
    if(isset($_POST['submit'])){ // This submit value comes from from Script. check line 93 & 102
        $uname=$_POST['name']; // This name value comes from from Script. check line 87 & 102
        $email=$_POST['email']; // This email value comes from from Script. check line 89 & 102
        $message=$_POST['msg']; // This msg value comes from from Script. check line 91 & 102

        $sql = "INSERT INTO `inbox`(`sender_name`, `sender_email`,`message`) VALUES ('$uname','$email','$message')";
        // $sql = "INSERT INTO `users`( `name`,`email`,`message`) VALUES ('$name','$email','$message')";

        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("statusCode"=>200)); 
        }
        else { 
            echo json_encode(array("statusCode"=>201)); 
        } 
        mysqli_close($conn);
    }
   
?>
   
   
   
   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/message_form_style.css">

 
        <div class="message" style="display: none;">

            <!--Model Popup starts-->

        
                <div class="modal-content">
                    
					
                    <div class="modal-body">
                       
						<div class="thank-you-pop">
							<img src="images/success.png" alt="">
							<h1>Thank You!</h1>
							<h3 class="cupon-pop">Your Message is received and I will contact you soon.</h3>
							
 						</div>
                         
                    </div>
				</div>	
        </div> 
        


        


            <form id="contact-form" method="post" action="#" class="wow fadeInDown" data-wow-delay="1.2s">

                        <div class="messages"></div> <!--you can change the message in contact.php file -->

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="name" type="text" name="name" class="form-control" placeholder="Enter your name *" required="required" data-error="Fullname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="email" type="email" name="email" class="form-control" placeholder="Enter your email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="form_message" class="form-control" placeholder="Your Message *" rows="4" required="required" data-error="Leave a message for me"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                    
                                    <input type="submit" class="btn btn-send" name="submit" value="Sumit" id="btn-save" />
                                </div>
                            </div>
                        </div>

                    </form>
                
        

        

        <script>
            const submit = $('#btn-save').click(function (e) {
                e.preventDefault();

                const name = $('#name').val(); //name comes from name input field, this name is a id value

                var uname = $('#name').val();

                const email = $('#email').val(); //email comes from name input field, this email is a id value

                const msg = $('#form_message').val(); //message comes from name textarea field, this form_message me is a id value

                const submit = $('#btn-save').val(); //btn-save comes from name input field, this btn-save is a id value

                

                if(!name) return alert('Please enter your name');

                $.ajax({
                    url: 'index.php',
                    type: 'POST',
                    data: { submit:submit, name: name, email: email, msg:msg },
                    success: function (data) {
                        $('.message').show();
                        $('#contact-form').hide();
                    },
                });
            });
        </script>


