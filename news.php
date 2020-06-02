<html>
	<head>
		<title>Homepage</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		
		
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	</head>

	<body style="background-image:url('img/test.gif'); background-size: cover; background-repeat:no-repeat; background-attachment: fixed;" onscroll="skrolovanje();">
		
		<!--<video oncontextmenu="return false;" autoplay="autoplay" loop muted width="100%">
			<source src="HelplessDeficientIvorybackedwoodswallow-mobile.mp4" type="video/mp4">
		</video>-->
		
		<div id="wrapperResponsive">
		<div id="responsiveContainer">
		<button id="back" onclick="responsiveMenu();">Back</button>
	
		<div id="listica">
			<ul>

				<li>
					<a href="index.php">Home</a>
				<i class="fa fa-caret-down"></i></button>
				</span>
					
				</li>
				<li><a href="news.php">News</a></li>
				<li>
					<a href="shop.php">Shop</a>
				</li>
				
				<li>
					<a href="forma.php">Sign up now</a>
				</li>
				
			</ul>
			
		</div>
		</div>
	</div>
		
		<header>
			<div>
				<h1>SpaceEngine</h1>
			</div>
			<div>
				
			</div>
		</header>
		
		<nav id="navigate">
		
			<a href="#" class="icon" onclick="responsiveMenu()">
					<i class="fa fa-bars"></i>		
			</a>
		
			<div class="navigacija">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="shop.php">Shop</a></li>
					
					<li><a href="forma.php">Sign up now</a></li>
					
				
				</ul>
			</div>
		</nav>
		
		
		
		<section id="sadrzaj">
			
			<div id="content">
			
				<?php
				
					echo "<div class=\"dateNews\">".date("m/Y")."</div>";
					
					for($i=1;$i<=5;$i++){
						
						echo "<div class=\"newsContent\">";
						
						echo "<div class=\"pictureContainer\"><img width=\"100%\" height=auto src=\"img/news/$i.png\"></div>";
						
						echo "<div class=\"newsText\">";
						
							echo "<div class=\"newsTitle\">News: $i</div>";
							echo "<div class=\"shortText\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Nunc porta tellus quam, non tincidunt est iaculis in. 
							In maximus sem laoreet dignissim mattis. 
							Aliquam pharetra turpis ut ipsum semper, vel convallis sem aliquet. 
							Ut at nisi eget tellus egestas pulvinar. 
							Donec nec ultricies orci, ac consequat diam. 
							Fusce eu eleifend erat. 
							Phasellus facilisis porttitor efficitur. 
							Ut tincidunt quam eget nunc sodales rhoncus. 
							Phasellus a iaculis tellus, nec porttitor metus. 
							Phasellus hendrerit sed nulla ut ultricies. 
							Vivamus eleifend, risus non tincidunt finibus, nulla orci cursus tortor, a feugiat ante leo id nulla. 
							Etiam aliquet tincidunt dui ac facilisis. 
							In hac habitasse platea dictumst. 
							Vivamus tincidunt efficitur turpis eget pellentesque. 
							Aenean at justo neque. 
							Cras eget elit eget ante tincidunt molestie efficitur ac ex. </div>";
							echo "<div class=\"datumNovosti\">".date("d \ m \ Y")."</div>";
						
						echo "</div>";
						
						echo "</div>";
						
					}
					
				?>
			
			</div>
				
		</section>
		
		<footer>
			
			<div id="footerLogo">
				<div id="wrapperLogo">
					<p>&copy; 2020 - SpaceEngine</p> 
				</div>
				<br>
				<div id="kontakt">
						<p>Contact us: </p>
						<p>E-mail: <a href="mailto:dstefa.dimitrijevic7@gmail.com">dstefa.dimitrijevic7@gmail.com</a></p>
						<p>Phone: 060-32-40-426</p>
				</div>
			</div>
			
			<div id="footerForma">
			
				
				<form action="podaci.php" method="POST" onsubmit="newsletterSlanje();">
					<label for="imejlInput">
					Get the latest news: </label><br>			
					<input type="text" id="imejlInput" name="newsletter" required placeholder="Your E-mail Here to Subscribe" size="30">				
				</form>
				
				
			
			</div>
			<div id="socialno">
				<p>Follow us on social media:&nbsp;</p>
				<div>
					<ul>
						
						<li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f ikonice"></i></a></li>
						<li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter ikonice"></i></a></li>
						<li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram ikonice"></i></a></li>
					</ul>
				</div>
			</div>
			
		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="js/javascript.js" type="application/javascript">
		
		</script>
		
		
	</body>
</html>