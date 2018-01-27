<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Peak Fitness</title>
  	<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
  	<meta name="keywords" content="gym, bodybuilding, exercise, treadmill, workout, weight, fitness, training, personal trainer, physical">
  	<meta name="description" content="Don't have time or the expertise to customize your own fitness routine? Let Peak fitness develop a plan that helps you achieve your goals efficiently, safely, and quickly.">
</head>

  <body class="container">
 
<!-- header and nav section -->
    <header>
      <div class="primary_header">
        <img src="images/Peak-Fitness-Logo.png" alt="Peak Fitness Logo">
      </div>
      <nav class="secondary_header" id="menu">
        <ul>
		  <li><a href="index.html">HOME</a></li>
          <li><a href="training.html">TRAINING SESSIONS</a></li>
          <li><a href="schedule.html">SCHEDULE</a></li>
          <li><a href="about.html">ABOUT</a></li>
          <li><a href="contact.html">CONTACT US</a></li>
        </ul>
      </nav>
    </header>
<p style="text-align: center;">
<?php
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['telephone'];
        $comments = $_POST['comments'];
        print($firstName." ".$lastName.", thank you for submitting your information.<br />");
        print("We will contact you back at ".$email." as soon as possible.<br /></p>");
    ?></p>
    
<!-- social media section -->    
    <section class="social">
      <p class="social_icon"><a href="https://www.facebook.com" target="_blank"><img src="images/facebook_icon_128.png" alt="Facebook Icon" class="thumbnail"/></a></p>
      <p class="social_icon"><a href="https://www.twitter.com" target="_blank"><img src="images/twitter_icon_128.png" alt="" class="thumbnail"/></a></p>
      <p class="social_icon"><a href="https://www.instagram.com" target="_blank"><img src="images/instagram_icon_128.png" alt="" class="thumbnail"/></a></p>
      <p class="social_icon"><a href="https://www.youtube.com" target="_blank"><img src="images/youtube_icon_128.png" alt="" class="thumbnail"/></a></p>
      <!-- https://www.iconfinder.com/iconsets/black-white-social-media -->
    </section>
    
<!-- footer section -->    
    <footer class="footer">
      <div class="copyright">
      Peak Fitness • 5790 Crowder Blvd, New Orleans, LA 70127<br/>
      Contact Us at <a class="footer_links" href="mailto:info@peakfitness.com">info@peakfitness.com</a><br/>
      &copy;2017 peak fitness - all rights reserved<br/>
      ver 1.0 - 11/12/2017 - Design by <a class="footer_links" href="http://wcet2.waketech.edu/cagaglioti/WEB140/CG/index.html" target=_blank">CG</a></div>
    </footer>
  
  </body>

</html>
