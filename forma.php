<?php
	$drzave=array(
	"US"=>"United States of America",
	"UK"=>"United Kingdom",
	"DE"=>"Germany",
	"FR"=>"France",
	"RU"=>"Russia",
	"CN"=>"China",
	"RS"=>"Serbia",
	"IT"=>"Italy",
	"ES"=>"Spain",
	"JP"=>"Japan"
	
	);
	

?>

<html>
	<head>
		<title>Homepage</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" type="text/css" href="style/styleForme.css">
		
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
				
				<section class="wrapperForme">
		
			<form target="_blank" id="formica" name="forma" method="POST" action="Potvrda.php">
			
				<div id="formTitle">	
					<label for="formica">Create an account</label>
				</div>
				
				<div id="countryDiv">
					<select required id="country" name="country" form="formica">
						<?php
							
							asort($drzave);
							
							echo "<option selected=\"true\" disabled=\"disabled\">Select your country of origin</option>";
							
							foreach($drzave as $key=>$value){
								
								echo "<option value=\"$value\">$value</option>";
							}
						
						?>
					</select>
				</div>
				
				<div id="nameSurnameDiv">
					<input required type="text" size="30" placeholder="Enter your first name..." id="ime" name="ime" form="formica" autofocus>
					<input required type="text" size="30" placeholder="Enter your last name..." id="prezime" name="prezime" form="formica" autofocus>
				</div>
				
				<div id="birthdayDiv">
					<?php
					
						$godina=strval(intval(date('Y'))-18);
						
						$mesec=date('m');
						
						$dan=date('d');
						
						$birthday=$godina . "-" . $mesec . "-" . $dan;
						echo "<input required type=\"date\" name=\"birthday\" id=\"birthday\" maxlength=\"4\" placeholder=\"Year...\" max=\"$birthday\">";
						
					?>
					
				
				<div id="emailDiv">
					<input required type="text" size="30" placeholder="Enter your email address..." name="mail" id="eAdresa" onfocus="unselektuj();" form="formica">
					<input required type="password" size="30" placeholder="Enter your password..." maxlength="16" name="password" id="password" onfocus="unselektuj();" form="formica">
				</div>	
				
				</div>	
				<div id="phoneDiv">
					<input required type="text" size="30" placeholder="Enter your phone number..." id="telefon" name="phone" onfocus="unselektuj();" form="formica">
				</div>
				
				
				<div id="checkboxDiv">
				
					<div><input type="checkbox" name="saglasnost" id="saglasnost" onchange="prikazi();">&nbsp;I agree with the terms of service.</div>
				</div>
				<input  type="submit" value="Submit" id="dugmeZaSlanje" name="dugmeZaSlanje" form="formica">
				<div id="poljeGresaka">
					
				</div> 
			
			</form>
		
		</section>
				
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
		<script src="js/javascriptForma.js" type="application/javascript">
		
		</script>
		<script src="js/javascript.js" type="application/javascript">
		
		</script>
		
		
		
	</body>
</html>