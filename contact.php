<doctype html>
<html>
	<head>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="header.css" >
		  <link rel="stylesheet" href="footer.css" >
		  <link rel="stylesheet" href="contact.css" >
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		  <?php $title = 'Contact Us';
		  		$page = 'Contact'
		   ?>		
	</head>

	<body>
			<?php include('header.php') ?>
			<?php include('subheader.php') ?>
			<div class="photo">
				<div class="color">
					Contact Us
				</div>
			</div>
			<div class="map">
				<img src="imgs\map.png">
					<div class="gallery">
						<div class="gallerytop"> 
							<h2><span>&emsp;Find Us on the map &ensp; </span></h2>
						</div>
					</div>
					<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.2467374963107!2d30.957124385441485!3d29.97233828190862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145855e8db059799%3A0xf9a701dbe8910477!2z2LTZitmBINin2YTYtNin2YU!5e0!3m2!1sar!2seg!4v1513684002849" allowfullscreen></iframe> 
					<p>1st District, 3rd neighborhood,<br> 6th of October - Giza</p>
					<div class="contacts">
						<div class="left">
						<img src="imgs\email-filled-closed-envelope.png" class="icns11"><div class="mails"> <p>&ensp;E-mail Us</p> <br>
						<span>Info@ghareebtrading.com</span> </div>
						</div>
						<div class="right">
						<img src="imgs\call-answer.png" class="icns11"><div class="mails"> <p>&ensp;Call Us</p> <br>
						<span>(+2 ) 01002333422 </span><h6>(+2 ) 01003332238</h6> </div>
						</div>
					</div>
			</div>
			<?php include('footer.php') ?>
			<script src="script.js"></script> 
	</body>
</html>