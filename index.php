<?php include("profile_info_display.php"); ?>


<!doctype html>
<html lang="en">

<!-- Mirrored from mourithemes.com/mason/mason/index-particles.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2020 22:39:05 GMT -->
<head>
    <!--meta tags-->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description"
        content="MD Saiful Islam is an IT Professional with Extensive knowledge of Application Development  and penetration Testing who love to Travel, hangouts and work like a robot.">
    <meta name="keywords" content="Saiful Islam, Full Stuck web developer, Penetration Tester, Python Developer, personal resume">
    <meta name="author" content="Saiful Islam">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--template title-->
    <title>Saiful Islam - Full Stuck Web Developer | Penetration Tester</title>

    <!--==========Favicon==========-->

    
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/main.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--========== Theme Fonts ==========-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,600,700,800" rel="stylesheet">

    <!--Font Awesome css-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--Brand Logo Slider CSS-->
    <link rel="stylesheet" href="css/logo_slider.css">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--Animated headline css-->
    <link rel="stylesheet" href="css/jquery.animatedheadline.css">

    <!--Animate css-->
    <link rel="stylesheet" href="css/animate.css">
    
	<!--Owl carousel css-->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.default.css">
    
	<!--Magnific popup css-->
	<link rel="stylesheet" href="css/magnific-popup.css">
    
	<!--Normalizer css-->
	<link rel="stylesheet" href="css/normalize.css">

    <!--Theme css-->
    <link rel="stylesheet" href="css/style.css">

    <!--Responsive css-->
    <link rel="stylesheet" href="css/responsive.css">


    <!--Logo Slider Necessary css and js cdn link -->
   

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css"> -->




</head>
<body>

    <!--preloader starts-->


    <div class="loader_bg"><div class="loader"></div></div>


    <!--preloader ends-->

    <!--navigation area starts-->

    <header class="nav-area navbar-fixed-top">
        <div class="container">
            <div class="row">
                <!--main menu starts-->

                <div class="col-md-12">
                    <div class="main-menu">
                        <div class="navbar navbar-cus">
                            <div class="navbar-header">
                                <a href="index.html" class="navbar-brand"><span class="logo">丂卂丨千ㄩㄥ</span></a>
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse">
                                <?php include("nav_display.php"); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!--main menu ends-->
            </div>
        </div>
    </header>

    <!--navigation area ends-->

    <!--Banner area starts-->

    <div class="banner-area" id="home">
        <div id="particles-js"></div>
        <div class="banner-table">
            <div class="banner-table-cell">
                <div class="welcome-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <section class="intro animate-scale">

                                    <h3>Welcome to My Website</h3>

                                    <h1 class="ah-headline">

                                        <span class="ah-words-wrapper">
                                            <b class="is-visible">Saiful Islam</b> <!--edit the name to your name-->
                                            <b>Web Developer</b> <!--edit the designation if you are in different profession-->
                                            <b>System Administrator</b><!--edit the designation if you are in different profession-->
                                            <b>Penetration Tester</b><!--edit the designation if you are in different profession-->
                                        </span>
                                    </h1>

                                    <a href="#contact" class="banner-btn">Contact me</a>


                                </section>

                                <div class="clearfix"></div>

                                <a class="mouse-scroll hidden-xs" href="#about">
                                    <span class="mouse">
                                        <span class="mouse-movement"></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Banner area ends-->

    <!--about area starts-->

    <div class="about-area section-padding" id="about">
        <div class="container">

            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                    <div class="about-text-left">
                        <h2><?php echo $full_name; ?></h2> <!--edit name-->
                        <h3><?php echo $job_title; ?></h3> <!--edit designation-->
                        <p><?php echo $description; ?></p>
                        <a href="resume/<?php echo $resume; ?>" download>Download Resume &nbsp; &nbsp;<i class="fa fa-download"></i></a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <img src="images/about/<?php echo $image; ?>"  class="img-responsive" alt="about image"> <!--add your image here-->
                </div>

                <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                    <div class="about-text-right">

                        <div id="skills">

                            <h3>My Skills</h3>

                            <div class="row">

                                <div class="col-md-12">

                                <?php include("skill_display.php"); ?>
                                </div>


                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

    <!--about area ends-->
    
    <!--Services Area Starts-->

    <div id="services" class="services-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header wow fadeInDown" data-wow-delay="0.2s">
                        <p class="line-one"></p>
                        <h2>What I Offer</h2>
                        <p class="line-one"></p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div id="services-carousel" class="owl-carousel owl-theme">

                    <?php include("service_display.php"); ?>


                   
                </div>

            </div>
        </div>
    </div>

    <!--Services Area Ends-->
    
	<!--number area starts-->

	<div class="number-area section-padding">
		<div class="container">
			<div class="row">

                <?php include("number_area_display.php"); ?>

			</div>
		</div>
	</div>

	<!--number area ends-->
   
	<!--Portfolio Area Starts-->

	<div id="portfolio" class="portfolio-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header wow fadeInDown" data-wow-delay="0.2s">
						<p class="line-one"></p>
						<h2>My Works</h2>
						<p class="line-one"></p>
					</div>
				</div>
			</div>

			<div class="row">

                <div class="portfolio-items">

                    <?php include("project_display.php"); ?>

              
                </div> <!--end portfolio grid -->

            </div>


		</div>
	</div>


	<!--Portfolio Area Ends-->
   
	<!--Testimonial Section Starts-->

	<div id="testimonial" class="testimonial-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header wow fadeInDown" data-wow-delay="0.2s">
						<p class="line-one"></p>
						<h2>What Clients Say</h2>
						<p class="line-one"></p>
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col-md-10 col-md-offset-1">
					<div class="review-area">
						<div id="testimonial-carousel" class="owl-carousel owl-theme">

                            <?php include("testimonial_display.php"); ?>

                    
						</div>
					</div>
                </div>
                
			</div>
		</div>
	</div>

	<!--Testimonial Section Ends-->

    <!--contact area starts-->

    <div class="contact-area section-padding" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header wow fadeInDown" data-wow-delay="0.2s">
                        <p class="line-one"></p>
                        <h2>Contact</h2>
                        <p class="line-one"></p>
                    </div>
                </div>
            </div>

            <div class="row">
                
                <?php include("personal_information_display.php"); ?>

            </div>

            <div class="row">
                
                <div class="col-md-10 col-md-offset-1">

                 

                <?php include("message_form.php"); ?>
                   
                </div>




            </div>
        </div>
    </div>

    <!--contact area ends-->

    <!--Brand area starts-->

    <div class="brand-area section-padding">
        <div class="container">
            <p class="line-one"></p>
            <h2 style="text-align: center;">Clients</h2>
            <p class="line-one"></p><br>

            <div class="row">

               <?php include("brand_display.php"); ?>

            </div>
        </div>
    </div>

    <!--Brand area ends-->

    <!--Footer Area Starts-->

    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <p>&copy; All Right Reserved By <a href="#">Saiful Islam</a></p> <!--edit here-->  
                </div>
            </div>
        </div>
    </div>

    <!--Footer Area Ends-->
    
    

    <script>
        const sectionDiv = document.getElementById('section');
        const form = document.getElementById('myForm');

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            form.style.display = 'none';
            sectionDiv.style.display = 'block';
        });
    </script>

    <!--Latest version JQuery-->
    <script src="js/jquery-3.2.1.min.js"></script>

    <!--Bootstrap js-->
    <script src="js/bootstrap.min.js"></script>

	<!--Magnific popup js-->
	<script src="js/jquery.magnific-popup.js"></script>

	<!--Owl Carousel js-->
	<script src="js/owl.carousel.js"></script>

	<!--wow js-->
	<script src="js/wow.min.js"></script>

    <!--Animated headline js-->
    <script src="js/jquery.animatedheadline.js"></script>
    

	<script src="js/custom.js"></script>
    
    <!--Validator js-->
    <script src="js/jquery.waypoints.js"></script>
    
	<!--counter up js-->
	<script src="js/jquery.counterup.min.js"></script>

    <!--particles js-->
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>

    <!--Validator js-->
    <script src="js/validator.js"></script>

    <!--Contact js-->
    <script src="js/contact.js"></script>

    <!--Main js-->
    <script src="js/main.js"></script>
    
    <script>

	</script>
</body>

<!-- Mirrored from mourithemes.com/mason/mason/index-particles.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2020 22:46:18 GMT -->
</html>