<html>
	<style>
	body
		{
		 margin:0;
		 padding:0;
		 background-repeat: no-repeat;
		 background-attachment: fixed;
		 background-position: center;
		 background-size: cover; 
		}
	.menu
		{
		 width:100%;
		 background:gray;
		 overflow:auto;
		}
	.menu ul
		{
		 margin:0; 
		 padding:0;
		 list-style:none;
		 line-height:60px;
		}
	.menu li
		{
		 float:left;
		}
	.menu ul li a
		{
         background:gray;
		 text-decoration:none;
		 width:130px;
		 display:block;
		 text-align:center;
		 color:white;
		 font-size:20px;
		 font-family:sans-serif;
		 letter-spacing:0.5px;
		}
	.menu li a:hover
		{
		 color:red;
		 font-size:25px;
		 text-decoration:underline;
		}
	.menu ul li ul li
			{
			 
			}
	.search-form
		{
		 margin-top:15px;
		 float:right;
		 margin-right:100px;
		}
	input[type=text]
		{
		 padding:7px;
		 border:none;
		 font-size:18px;
		 font-family:sans-serif;
		}
	button
		{
		 float:right;
		 background:orange;
		 color:white;
		 border-radius:0 5px 5px 0;
		 cursor:pointer;
		 position:relative;
		 padding:7px;
		 font-family:sans-serif;
		 border:none;
		 font-size:18px;
		}
	button:hover 
		{
	     background: #0b7dda;
		}
	ul li ul li
		{
		 display:none;
		}
	ul li:hover ul li
		{display:block;
		}
	.menu2 ul 
		{
		 list-style-type: none;
		 margin: 0;
		 padding: 0;
		 overflow: hidden;
		 background-color: #333;
		}

	.menu2 li 
		{
		 display:inline-block;
		}

	.menu2 li a 
		{
		 display: block;
		 color: darkgray;
		 text-align: center;
		 padding: 14px 16px;
		 text-decoration: none;
		}
	.menu2 li a:hover
		{
		 color:red;
		 font-size:25px;
		 text-decoration:underline;
		}
	* 
	{
	 box-sizing: border-box;
	}
	body 
	{
	 font-family: Verdana, sans-serif;
	}
	.mySlides 
	{
	 display: none;
	}
	img 
	{
	 vertical-align: middle;
	}
	
	/* Slideshow container */
	.slideshow-container 
	{
	 max-width: 1000px;
     position: relative;
     margin: auto;
	}

	/* Caption text */
	.text 
	{
	 color: #ff0000;
	 font-size: 15px;
	 padding: 8px 12px;
	 position: absolute;
	 bottom: 8px;
	 width: 100%;
	 text-align: center;
	}

	/* Number text (1/3 etc) */
	.numbertext 
	{
	 color: #ff0000;
	 font-size: 12px;
	 padding: 8px 12px;
	 position: absolute;
	 top: 0;
	}

	/* The dots/bullets/indicators */
	.dot 
	{
	 height: 15px;
	 width: 15px;
	 margin: 0 2px;
	 background-color: #bbb;
	 border-radius: 50%;
	 display: inline-block;
	 transition: background-color 0.6s ease;
	}

	.active 
	{
	 background-color: #717171;
	}

	/* Fading animation */
	.fade 
	{
	 -webkit-animation-name: fade;
	 -webkit-animation-duration: 1.5s;
	 animation-name: fade;
	 animation-duration: 1.5s;
	}

	@-webkit-keyframes fade 
	{
	 from 
	 {
	  opacity: .4
	 } 
	 to 
	 {
	  opacity: 1
	 }
	}

	@keyframes fade 
	{
	 from 
	 {
	  opacity: .4
	 } 
	 to 
	 {
	  opacity: 1
	 }
	}

	/* On smaller screens, decrease text size */
	@media only screen and (max-width: 300px) 
	{
	.text 
		{
		 font-size: 11px
		}
	}
	.p
	{
	 color:white;
	 text-decoration:none;
	 font-size:20px;
	 font-family:sans-serif;
	 letter-spacing:0.5px;
	}
	.p1
	{
	 color:white;
	 text-decoration:underline;
	 text-decoration-color:red;
	 font-size:20px;
	 font-family:sans-serif;
	 letter-spacing:0.5px;
	}
	.li
	{
	 list-style-type:circle;
	}
	</style>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="13.png">
		<title>Home - Five Finger Death Punch </title>	
	</head>
	<body background="23.png">
	<nav class="menu">
		<ul>
			<li><a><img src="14.png" style = "display: inline-block; margin-left: auto; margin-right: auto;"></a>
				<ul>
				<?php
					session_start();
					if(isset($_SESSION['username']))
						echo $_SESSION['username'];
					if(!isset($_SESSION['username']))
						echo "<li class='menu ul li ul li'><a href='login.php'>SIGN IN</a></li>";
					else
						echo "<li class='menu ul li ul li'><a href='logout.php'>SIGN OUT</a></li>";
					if(!isset($_SESSION['username']))
						echo "<li class='menu ul li ul li'><a href='Register.php'>REGISTER</a></li>";
				?>
				</ul>
			</li>
			<li><a href="Shop - Five Finger Death Punch.html"><img src="15.png"></a></li>
		</ul>	
		<form class="search-form" >
			<input type="text" placeholder="SEARCH:" maxlength="40">
			<button>Search</button>
		</form>
	</nav>
	<br>
	<nav class="menu2">
		<ul>
			<li><a href="Home - Five Finger Death Punch.php">HOME</a></li>
			<li><a href="Tour - Five Finger Death Punch.html">TOUR</a></li>
			<li><a href="Shop - Five Finger Death Punch.html">SHOP</a></li>
		</ul>
	</nav>
	<br>
	<div class="slideshow-container">	

		<div class="mySlides fade">
		<div class="numbertext">1 / 3</div>
		<img src="img1.jpg" style="width:100%">
		<div class="text">Caption One</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">2 / 3</div>
		  <img src="img2.jpg" style="width:100%">
		  <div class="text">Caption Two</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">3 / 3</div>
		  <img src="img3.jpg" style="width:100%">
		  <div class="text">Caption Three</div>
		</div>

	</div>
	<br>

	<div style="text-align:center">
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span>
	</div>

	<script>
	var slideIndex = 0;
	showSlides();

	function showSlides() {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("dot");
		for (i = 0; i < slides.length; i++) {
		   slides[i].style.display = "none";  
		}
		slideIndex++;
		if (slideIndex > slides.length) {slideIndex = 1}    
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex-1].style.display = "block";  
		dots[slideIndex-1].className += " active";
		setTimeout(showSlides, 3500); // Change image every 2 seconds
	}

	</script>
	<br>
	<p class="p">Five Finger Death Punch (abreviat FFDP sau 5FDP) este o formatie americana de heavy metal, din Las Vegas, Nevada. Formatia a fost infiintata in 2005, numele grupului fiind derivat dintr-un clasic film de arte martiale. Componenta originala a trupei consta din vocalistul Ivan Moody, chitaristul Zoltan Bathory, chitaristul Caleb Andrew Bingham, basistul Matt Snell, si bateristul Jeremy Spencer.</p>
	<b><p class="p1">Membrii trupei</p></b>
	<p class="p">Membri actuali</p>
		<ul class="li">
			<li class="p">Ivan Moody ~ vocal (2005~prezent)</li>
			<li class="p">Zoltan Bathory ~ chitara ritmica (2005~prezent)</li>
			<li class="p">Jeremy Spencer ~ tobe (2005~prezent)</li>
			<li	class="p">Jason Hook ~ chitara, back vocal (2009~prezent)</li>
			<li	class="p">Chris Kael ~ chitara bas, back vocal (2011~prezent)</li>
		</ul>
	<p class="p">Fosti membri</p>
		<ul class="li">
			<li class="p">Caleb Andrew Bingham ~ chitara(2005~2006)</li>
			<li class="p">Matt Snell ~ bas, back vocal (2005~2010)</li>
			<li class="p">Darrell Roberts ~ chitara, back vocal (2006~2009)</li>
		</ul>
	<b><p class="p1">Discografie</p></b>
		<ul class="li">
			<li class="p">The Way of the Fist (2007)</li>
			<li class="p">War Is the Answer (2009)</li>
			<li class="p">American Capitalist (2011)</li>
			<li class="p">The Wrong Side of Heaven and the Righteous Side of Hell, Volume 1 (2013)</li>
			<li class="p">The Wrong Side of Heaven and the Righteous Side of Hell, Volume 2 (2013)</li>
			<li class="p">Got Your Six (2015)</li>
		</ul>
	</body>
</html>