    var prixini = document.getElementById('prixini');
    var pourcentage = document.getElementById('pourcentage');  
    var prixfin =document.getElementById('prixfin'); 
     var nom=document.getElementById('nom');
    var prenom=document.getElementById('prenom');

function verif(){

	if(!(/[0-9]+[,][0-9]{2}/.test(prixini.value))){
      alert("le prix initiale doit etre au format nombre,00 !");return false;} 

	else{
    
         if (!(/[0-9]{1,2}/.test(pourcentage.value))) {
  alert("le pourcentage entrer ne corespond pas !");return false;} 


    else{
    
         if (!(/[0-9]+[,][0-9]{2}/.test(pourcentage.value))) {
  alert("le prix final doit etre au format nombre,00 !");return false;} 

  else{ if(/['"<>]+/.test(nom.value)) {
    nom.value = "";  alert("Nom invalide pas de caracteres speciaux ");return false;}

  else{ if(/["<>]+/.test(prenom.value)) {
    prenom.value = "";  alert("description invalide les caractères \" et < sont interdis  ");return false;}

else{return true;}
        	     }
    	    }
		}
	}
}



function PrixI(){
	if(!(/[0-9]+[,][0-9]{2}/.test(prixini.value))){
		 document.getElementById("PrixI").innerHTML="X";
        document.getElementById("PrixI").style.color='rgb(255, 0, 0)';
    }
     else{document.getElementById("PrixI").innerHTML="V";
          document.getElementById("PrixI").style.color='rgb(0, 255, 0)';}



}
