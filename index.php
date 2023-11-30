<?php
require_once('src/header/header_assets.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $channel_title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


   <?php require_once('src/header/header.php'); ?>
  
  
  
  
   <?php require_once('src/podcast/lastest_podcast.php'); ?>

     
	
	 <div class="site-section bg-light">
      <div class="container">
<br/>
<br/>
        <div class="row mb-5" data-aos="fade-up">
          <div class="col-md-12 text-center" >
		  <h2 class="font-weight-bold text-black" >Recent 5 Podcasts</h2>
          </div>
        </div>
		<br/>
   <?php require_once('src/podcast/recent_podcast.php'); ?>

         </div>
 
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
              <ul>
                <li class="active"><span>5</span></li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>




    <div class="site-section">
      <div class="container" data-aos="fade-up">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <h2 class="font-weight-bold text-black">Behind The Developement</h2>
          </div>
        </div>
        <div class="row">
         

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
           
          </div>
		  
		  
		  
		   <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">

              <img src="https://media.licdn.com/dms/image/D4D03AQGYQLoMzMvhDA/profile-displayphoto-shrink_400_400/0/1701047892188?e=1706745600&v=beta&t=dhRmkbJCO7ZhSSpx0G9iyxxRgsSdw4J9LIIYWgnYIlo" alt="Image" class="img-fluid">

              <div class="text">

                <h2 class="mb-2 font-weight-light h4">Hashaam Zahid</h2>
                <span class="d-block mb-2 text-white-opacity-05">PHP Developer</span>
                <p class="mb-4">Technical Skills To Deliver Bespoke Multi-faceted Projects</p>
                <p>
                  <a href="https://www.facebook.com/Hashaam007" class="text-white p-2"><span class="icon-facebook"></span></a>
                  <a href="https://www.linkedin.com/in/hashaam-zahid/" class="text-white p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>

            </div>
          </div>
		  

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
           
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
          
          </div>


        </div>
      </div>
    </div>

  

    <?php require_once('src/footer/footer.php'); ?>

  </div>

    <?php require_once('src/footer/footer_assets.php'); ?>
    
  </body>
</html>