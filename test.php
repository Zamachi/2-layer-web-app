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
	<meta charset="utf-8">
		<title>Naslov</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link href="styleForme.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		
		<section class="wrapperForme">
		
			<form id="formica" name="forma" method="POST" action="Potvrda.php">
			
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
				<input  type="submit" value="Submit" id="dugmeZaSlanje" name="dugmeZaSlanje" onclick="posalji();" form="formica">
				<div id="poljeGresaka">
					
				</div> 
			
			</form>
		
		</section>
		
		<script src="javascript.js">
			
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	</body>

</html>