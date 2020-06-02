

var niz=document.querySelectorAll(".navigacija ul li");

for(let i=0; i<niz.length; i++){
	
	niz[i].addEventListener("mouseover",function(){
		
		
		this.firstChild.style.color="red";
		
		
	});
	niz[i].addEventListener("mouseout",
		function(){
			
				
		
		this.firstChild.style.color="black";
		}
	);
	
}

function responsiveMenu() {
 
	var x=document.querySelector("#wrapperResponsive");
	
	console.log($("#wrapperResponsive").css('display'));
	
	if($("#wrapperResponsive").css('display')==="none")
	{
		console.log("Vidljiv");
		$("#wrapperResponsive").fadeIn('slow').animate({'left' : '0px'});
	}else{
		console.log("Nevidljiv");
		$("#wrapperResponsive").fadeOut('slow').animate({'left' : '-2000px'});
	}
	
 
}

var slika=document.querySelector("#pictureTagCover");
var setujVisinu=document.querySelector(".img-shadow").offsetHeight;
slika.style.height=setujVisinu;

function skrolovanje(){
	var elemeenat = document.querySelector("#navigate");
	if(window.scrollY>0){
		elemeenat.style.width="100%";
		elemeenat.style.position="fixed";
		elemeenat.style.top="0"
		elemeenat.style.zIndex="100";
	}else{
		elemeenat.style.position="initial";
		elemeenat.style.width="initial";
		elemeenat.style.zIndex="initial";
	}
	
}


var slideIndex = 1;
showSlides(slideIndex);

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

function automaticSlide() {
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
  setTimeout(automaticSlide, 2000); // Change image every 2 seconds
}

function newsletterSlanje(){
	var adresa=document.querySelector("#imejlInput").value;
	var praviloMail=/^[A-z]{1}[A-z_\d-\.]+@[a-z]+mail\.(com|ac\.rs)$/;
	
	if(praviloMail.test(adresa)){
		jsonImejl={
			"e-mail":adresa
		}
		
		$.ajax({
	            type : "post",
	            dataType : "json",
	            url : "podaci.php",
	            data : jsonImejl,
	            success : function() {
	                console.log("Subscribed!");
	            },
	            error : function(xhr, status, error) {
	                console.log(error);
	            }
	        });
		
	}
	else{
		alert("Invalid e-mail!");
	}
}


