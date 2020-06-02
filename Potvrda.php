
<?php
//prihvatanje podataka iz HTML forme

class Person{
	
	private $country,$ime,$prezime,$birthday,$mejl,$password,$phone;
	
	public $currentTime;
	
public function __construct(){
	
	$this->country=$_POST['country'];
	$this->ime=$_POST['ime'];
	$this->prezime=$_POST['prezime'];
	$this->birthday=$_POST['birthday'];
	$this->password=$_POST['password'];
	$this->mejl=$_POST['mail'];
	$this->phone=$_POST['phone'];
	$this->currentTime=date("Y/m/d H:i:s");
}
	
	public function toArray(){
		return array(
							"country"=>$this->country,
							"ime"=>$this->ime,
							"prezime"=>$this->prezime,
							"birthday"=>$this->birthday,
							"password"=>$this->password,
							"mail"=>$this->mejl,
							"phone"=>$this->phone,
							"dateCreated"=>$this->currentTime)
							;}
	
}
?>
<html>
	<head>
		<title>Homepage</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" type="text/css" href="style/stylesheet1942.css">
		
		
		
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
			
			<?php
				$osoba=new Person();
				$podaciOsobe=$osoba->toArray();
				
				echo '<div id="bill" style="width: 60%; margin: 0px auto">';
				
					echo "<div><h1>Bill text</h1></div>";
					echo '<div class="strana">';
						echo '<div class="podstrana">';
							echo '<p>Ime i prezime: </p>';
							echo '<div class="poljeZaUpis">'.$podaciOsobe["ime"].' '.$podaciOsobe["prezime"].'</div>';
						echo '</div>';
						
						echo '<div class="podstrana">';
							echo '<p>Datum rodjenja: </p>';
							echo '<div class="poljeZaUpis">'.$podaciOsobe["birthday"].'</div>';
						echo '</div>';
						
						echo '<div class="podstrana">';
							echo '<p>Datum kreacije: </p>';
							echo '<div class="poljeZaUpis">'.$podaciOsobe["dateCreated"].'</div>';
						echo '</div>';
						
					echo '</div>';
					echo '<div class="strana" style="margin-left: 15px;">';
						
						echo '<div class="podstrana">';
							echo '<div class="podelaNaDvaDela">';
								echo '<p>Drzava: </p>';
								echo '<div class="poljeZaUpis">'.$podaciOsobe["country"].'</div>';
							echo '</div>';
							
							echo '<div class="podelaNaDvaDela">';
								echo '<p>Telefon: </p>';
								echo '<div class="poljeZaUpis">'.$podaciOsobe["phone"].'</div>';
							echo '</div>';
							
						echo '</div>';
						
						echo '<div class="podstrana">';
							echo '<p>Email: </p>';
							echo '<div class="poljeZaUpis">'.$podaciOsobe["mail"].'</div>';
						echo '</div>';
						
						echo '<div class="podstrana">';
							echo '<p>Password</p>';
							echo '<div class="poljeZaUpis">'.$podaciOsobe["password"].'</div>';
						echo '</div>';
						
					echo '</div>';
					echo '<p>Ovaj dokument je napravljen datuma: '.(date("d/F/Y")).' at '.(date("h:i:s A")).'</p>';
				echo '</div>';
			
			?>
				
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