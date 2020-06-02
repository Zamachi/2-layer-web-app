
<?php
	
	$coinValue=array(1=>0.5);

?>

<html>
	<head>
		<title>Homepage</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		
		<link rel="stylesheet" href="stylesheet.css" type="text/css" charset="utf-8" />
		
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
			
			<div id="content" class="itemWrapper" style="display: grid; grid-template-columns: auto auto auto auto auto; grid-column-gap: 10px; grid-row-gap: 10px;">
			
				<?php
					
					
					for($i=0; $i<10;$i++){
						$kolicina=10*($i+1);
						echo '<div style="padding: 15px; background-color: rgba(30,30,30,0.7); border:1px solid gray;" >';
						echo '<form method="POST" action="price.php" id="'.$i.'" name="'.$i.'">';
						
						echo '<div><img class="logo" src="img/coin.png" alt="slika ne radi"></div><br>';
						echo '<span class="kvantitet"> <input form="'.$i.'" name="amount" type="text" value="'.$kolicina.'" readonly> </span><br>';
						$novac=$kolicina*$coinValue['1'];
						echo '<span class="kvantitet"> <input form="'.$i.'" readonly name="kolicina" type="text" value="$'.$novac.'"> </span><br>';
						echo '<input type="submit" class="buying" value="Buy!" form="'.$i.'">';
						
						
						echo '</form>';
						echo '</div>';
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
			
				<?php
				
					echo "<form action=\"podaci.php\" id=\"mejl\" method=\"POST\" name=\"mejl\" onsubmit=\"newsletterSlanje();\">";
					echo "<label for=\"imejlInput\">";
					echo "Get the latest news: </label><br>";			
					echo "<input form=\"mejl\" type=\"text\" id=\"imejlInput\" name=\"newsletter\" required placeholder=\"Your E-mail Here to Subscribe\" size=\"30\">";				
					echo "</form>";
				?>
				
			
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
		<script src="js/javascriptShop.js" type="application/javascript">
		
		</script>
		
		
	</body>
</html>