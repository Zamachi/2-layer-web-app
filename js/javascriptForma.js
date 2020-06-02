console.log("OK");

$(document).ready(function(){
	
	
	
	$("#formica").submit(function(dogadjaj){
		
	
	document.querySelector("#poljeGresaka").innerHTML="";
	var greske=[];
	
	var ime=document.querySelector("#ime").value;
	var nizIndeksDrzava=document.querySelector("#country").selectedIndex;
	var prezime=document.querySelector("#prezime").value;
	var telefon=document.querySelector("#telefon").value;
	var nizIndeksMesec=document.querySelector("#birthDay").selectedIndex;
	var adresa=document.querySelector("#eAdresa").value;
	var password=document.querySelector("#password").value;
	var birthday=document.querySelector("#birthday").value;
	var saglasnost=document.querySelector("#saglasnost");
	

	
	var praviloIme=/^[A-Z]{1}[a-z]+$/;
	var praviloMail=/^[A-z]{1}[A-z_\d-\.]+@[a-z]+mail\.(com|ac\.rs)$/;
	var praviloFon=/^(06){1}[0-9]{1}\/(\d{2}-){2}\d{3}$/;
	var praviloPassword=/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])\w{8,}$/;
	var praviloBirthday=/^\d{4}-\d{2}-\d{2}$/;
		
	if(nizIndeksDrzava==0){
		document.querySelector("#country").style.border="2px solid red";
		greske.push("You must select a country!");
	
	}
	else{
		document.querySelector("#country").style.border="";
	}
	if(praviloIme.test(ime)){
		document.querySelector("#ime").style.border="";
		
		
	}
	else{
		document.querySelector("#ime").style.border="2px solid red";
		greske.push("You have incorrectly inputted your first name!");
	}
	
	if(praviloIme.test(prezime)){
		document.querySelector("#prezime").style.border="";
	}else{
		document.querySelector("#prezime").style.border="2px solid red";
		greske.push("Your last name is not the right input type!<br>Your first and last name must start with a capital letter, all the other letters must be undercase!");
	}
	
	if(praviloMail.test(adresa)){
		document.querySelector("#eAdresa").style.border="";
		
	}
	else{
		document.querySelector("#eAdresa").style.border="2px solid red";
		greske.push("Incorrect e-mail!<br>Your e-mail must start with a letter and can contain numbers, letters, '_', '-' and '.'!");
	}
	
	if(praviloPassword.test(password)){
		document.querySelector("#password").style.border="";
	}else{
		document.querySelector("#password").style.border="2px solid red";
		greske.push("Incorrect password, your password must contain at least<br> one uppercase and lowercase letter, at least one digit and be at least 8 characters long");
	}
	
	if(praviloBirthday.test(birthday)){
		document.querySelector("#birthday").style.border="";
	}else{
		document.querySelector("#birthday").style.border="2px solid red";
		greske.push("Incorrect birthday input");
	}
	
	if(praviloFon.test(telefon)){
		document.querySelector("#telefon").style.border="";
		
	}
	else{
		document.querySelector("#telefon").style.border="2px solid red";
		greske.push("Your phone is wrong!<br>Phone format is the following: 0xx/xx-xx-xxx !");
	}
	if(greske.length!=0){
		
		for(var i=0;i<greske.length;i++)
		{
			document.querySelector("#poljeGresaka").style.display="table-cell";
			document.querySelector("#poljeGresaka").innerHTML+="*"+greske[i]+"<br><br>";
			
		}
		dogadjaj.preventDefault();
		return;
	}
			
	}); //KRAJ SUBMIT FUNKCIJE
	//KRAJ READY FUNKCIJE
});

function unselektuj(){
	var saglasnost=document.querySelector("#saglasnost");
	saglasnost.checked=false;
	
}

function prikazi(){
	
	document.querySelector("#dugmeZaSlanje").style.display="table-cell";
}






//za imejl newsletter