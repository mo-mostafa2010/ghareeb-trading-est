<nav  class="navbar transparent navbar-inverse bar500" id="bar1">
	 	<div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand navbar-brand21" href="#">Ghareb Trading Est.</a>
	    </div>
	    <div class="collapse navbar-collapse shades" id="myNavbar">
	      <ul class="nav nav11 navbar-nav center" id="bar22">
	        <li class="pages11"><a class="wsa" href="index.html">Home</a></li>
	         <li class="<?php if ($page=="Blog") {echo "active11"; } ?> pages11"><a href="blog.html">BLOG</a></li>
	        <li class="dropdown pages111 pages11  <?php if ($page=="Products") {echo "active11"; } ?>">
	          <a class="dropdown-toggle" href="products.html">products <span class="caret"></span></a>
	          <ul class="dropdown-menu drp">
	            <li class="drps"><a href="products.html#honey">Honey</a></li>
	            <li><a href="products.html#birds">BIRDS</a></li>
	            <li><a href="products.html#food">FOOD</a></li>
	            <li><a href="products.html#rats">HAMSTER</a></li>
	          </ul>
	        </li>
	        <li class="pages11 <?php if ($page=="Gallery") {echo "active11"; } ?>"><a href="gallery.html">GALLERY</a></li>
	        <li class="pages11 <?php if ($page=="Contact") {echo "active11"; } ?>"><a href="contact.html">Contact us</a></li>
	         <li class="pages11 <?php if ($page=="About") {echo "active11"; } ?>"><a href="about.html">about us</a></li>
	      </ul>
	      
	    </div>
	  </div>
</nav>