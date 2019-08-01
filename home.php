
<doctype html>
<html>
<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="footer.css" >
	  <link rel="stylesheet" href="style.css" >
	  <link rel="stylesheet" href="header.css" >  
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <?php $title = 'Home'; ?>
	  <link rel="icon" type="image/gif" href="Logo.png" />
</head>
<body> 
	<?php include('header.php') ?>
	 <div class="title">
	 	 <h1 class="name"> Ghareeb Trading Est. </h1>
	 </div>	
	<nav  class="navbar transparent navbar-inverse navbar-fixed-top" style="position:absolute !important" id="bar1">
	 	<div class="container-fluid shit1" style="z-index:9; background-color:transparent;">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" href="#">Ghareeb Trading Est.</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav center" style="float:none !important">
	        <li class="active11 pages" id="act"><a class="list" href="#">Home</a></li>
	         <li class="pages"><a class="list" href="blog.php">BLOG</a></li>
	        <li class="dropdown pages pages111">
	          <a class="dropdown-toggle list" href="products.php">products <span class="caret"></span></a>
	          <ul class="dropdown-menu drp">
	            <li class="drps"><a class="list" href="products.php#honey">Honey</a></li>
	            <li><a href="products.php#birds">BIRDS</a></li>
	            <li><a href="products.php#food">FOOD</a></li>
	            <li><a href="products.php#rats">HAMSTER</a></li>
	          </ul>
	        </li>
	        <li class="pages"><a class="list" href="gallery.php">GALLERY</a></li>
	        <li class="pages"><a class="list" href="contact.php">Contact us</a></li>
	         <li class="pages"><a class="list" href="about.php">about us</a></li>
	      </ul>
	      
	    </div>
	  </div>
</nav>
	<div class="info">
		<h2>Info about birds</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>

			<div id="myCarousel" class="carousel slide high" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators pads">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	    <li data-target="#myCarousel" data-slide-to="3"></li>
		<li data-target="#myCarousel" data-slide-to="4"></li>
		<li data-target="#myCarousel" data-slide-to="5"></li>
	    
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
	    <div class="item active high ">
	      <img src="imgs\03.jpg">
	    </div>

	    <div class="item high">
	      <img src="imgs\01.jpg">
	    </div>

	    <div class="item high">
	      <img src="imgs\07.jpg" >
	    </div>
	     <div class="item high">
	      <img src="imgs\11.jpg">
	    </div>
	     <div class="item high">
	      <img src="imgs\09.jpg">
	    </div>
	     <div class="item high">
	      <img src="imgs\05.jpg">
	    </div>

	  </div>

	  <!-- Left and right controls -->
	  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<!-- End of Caruosl -->
	<div class="products"><h3>our products</h3></div>
	<div class="flex-container11">
		 <div class="desc"> 
		 	<div class="product"><img src="icons\honey.png">
		 	</div>
		 	 <h4>honey</h4>
		 	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  		 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  		 quis nostrud exercitation ullamco laboris nisi ut aliqui </p> 
		</div>
  		 <div class="desc"><div class="product"><img src="icons\food-pack-box-with-handle.png"></div> <h4>Pet food</h4> <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  		 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  		 quis nostrud exercitation ullamco laboris nisi ut aliqui</p> </div>
  		<div class="desc"> <div class="product"><img src="icons\hamster-facing-right.png"></div> <h4>rats</h4> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  		 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  		 quis nostrud exercitation ullamco laboris nisi ut aliqui </p> </div>
  		<div class="desc"> <div class="product"><img src="icons\bird.png"></div>  <h4>birds</h4> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  		 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  		 quis nostrud exercitation ullamco laboris nisi ut aliqui</p> </div>
	</div>
	<div class="gallery">
		<div class="gallerytop"> 
			<h2><span>&nbsp;Gallery&nbsp;</span></h2>
		</div>
		<div class="qoute"><q> some people said some words that no one will never care about</q> <br> <span>Some guy</span> </div>
	</div>
	<!--  begingig of the carusol -->
		<div class="imgs11" id="works">
			<img src="imgs\03.jpg" style="width:25%" class="img11" >
			<img src="imgs\04.jpg" class="img11" > 
			<img src="imgs\06.jpg" class="img11" >
			<img src="imgs\07.jpg" class="img11" >
	</div>

		<div class="blog">
				<img class="blogs blogs-left" src="imgs\03.jpg">
				<div class="blogs blogs-right text"> <h3> Parrot Facts: Habits, Habitat & Species  </h3> 
				<p>arrots are members of the order Psittaciformes, which includes more than 350 bird species, including parakeets, macaws, cockatiels and cockatoos, according to the Integrated Taxonomic Information System (ITIS) rrots are members of the order Psittaciformes, which includes more than 350 bird species, including parakeets, macaws, cockatiels and cockatoos, according to the Integrated Taxonomic Information System </p>
				<a href="#"> Read More</a>
				 </div>
				 <img class="blogs blogs-right" src="imgs\02.jpg">
				<div class="blogs blogs-left text"> <h3> Parrot Facts: Habits, Habitat & Species  </h3> 
				<p>arrots are members of the order Psittaciformes, which includes more than 350 bird species, including parakeets, macaws, cockatiels and cockatoos, according to the Integrated Taxonomic Information System (ITIS) rrots are members of the order Psittaciformes, which includes more than 350 bird species, including parakeets, macaws, cockatiels and cockatoos, according to the Integrated Taxonomic Information System </p>
				<a href="#"> Read More</a>
				 </div>
				  <img class="blogs blogs-left" src="imgs\04.jpg">
				<div class="blogs blogs-right text"> <h3> Parrot Facts: Habits, Habitat & Species  </h3> 
				<p>arrots are members of the order Psittaciformes, which includes more than 350 bird species, including parakeets, macaws, cockatiels and cockatoos, according to the Integrated Taxonomic Information System (ITIS) rrots are members of the order Psittaciformes, which includes more than 350 bird species, including parakeets, macaws, cockatiels and cockatoos, according to the Integrated Taxonomic Information System </p>
				<a href="#"> Read More</a>
				 </div>
		</div>
	<div class="moreblogs"> <a href="#">more blogs</a> </div>
	<div class="sub">
	<div class="color"> 
		<h6>Let`s be friends</h6>
		<p>recive e-mails to know more about us</p>
		 <form action="">
    <div class="form-group form1">
      <input type="email" class="form-control e-mail" type="email" id="email" placeholder="Your-email@example.com" name="email">
      <button class="sub1">subscribe</button>
    </div>
     
    </form>
    </div>		
	</div>
	<div class="findus"><img src="icons\facebook-placeholder-for-locate-places-on-maps.png"><h6>find Us</h6><div class="divid"></div></div>
		
    	<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.2467374963107!2d30.957124385441485!3d29.97233828190862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145855e8db059799%3A0xf9a701dbe8910477!2z2LTZitmBINin2YTYtNin2YU!5e0!3m2!1sar!2seg!4v1513684002849" allowfullscreen></iframe>
	<div class="findus1">
		<img src="icons\find.png" class="icns1"><p class="contact1">1st District, 3rd neighborhood,<br> 6th of October - Giza<p> 
		<img src="icons\green_call-answer.png" class="icns1" ><p class="contact1">(+2 ) 01002333422<br>(+2 ) 01003332238<p> 
		<img src="icons\green-email-filled-closed-envelope.png" id="mail-com" class="icns1"><p id="mail-com" class="contact1">info@ghareebtrading.com<p> 
	</div>
	<div class="findus2">
		<img src="icons\green-email-filled-closed-envelope.png" id="mail-mob" class="icns1"><p class="contact1">info@ghareebtrading.com<p> 

	</div>
<?php include('footer.php') ?>
<script src="script.js"></script> 
</body>
</html>