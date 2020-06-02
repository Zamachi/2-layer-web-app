var niz=document.querySelectorAll(".itemWrapper > div");

for(var i=0; i<niz.length; i++){
	
	niz[i].addEventListener('mouseenter',function(){
		
		
		var niz1=this.firstChild.childNodes;
		
		
		
		for(var j=0; j<niz1.length; j++){
			
			if(j==2 || j==4){
				niz1[j].childNodes[1].style.color="gold";
				continue;
			}
			if(j==6){
			niz1[j].style.color="gold";
			niz1[j].style.border="1px solid gold";
			}
			
		}
		
	});
	niz[i].addEventListener('mouseleave',function(){
		
			var niz1=this.firstChild.childNodes;
		
		for(var j=0; j<niz1.length; j++){
			
			if(j==2 || j==4){
				niz1[j].childNodes[1].style.color="black";
				continue;
			}
			
			if(j==6){
			niz1[j].style.color="black";
			niz1[j].style.border="1px solid gray";
			}
		}
		
				
		
	});
	
	
}