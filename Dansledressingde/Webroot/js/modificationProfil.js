    var PSEUDO=document.getElementById('pseudo');
    var code = document.getElementById('codePostal');  
    var email=document.getElementById('email');  
    var nom=document.getElementById('nom');
    var prenom=document.getElementById('prenom');
    var adresse=document.getElementById('adresse');
    var ville=document.getElementById('ville');
    var telephone=document.getElementById('telephone');
    var mailfilleul=document.getElementById('mailpar');
   


 function sub(){
   
    
    if(code.value>100000 || code.value<10000 || isNaN(code.value)){    
     code.value = "";alert('code postal non valide');return false;}
    
    else{
         if (!(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-z]{2,6}$/.test(email.value))) {
email.value = "";  alert("Adresse e-mail invalide !");return false;} 

  

  else{ if(!(/[\w]+\s*/.test(nom.value))) {
    nom.value = "";  alert("Nom invalide pas de caracteres speciaux ");return false;}

  else{ if(!(/[\w]+\s*/.test(prenom.value))) {
    prenom.value = "";  alert("prenom invalide pas de caracteres speciaux ");return false;}

   else{ if(!(/[\w]+\s*/.test(adresse.value))) {
    adresse.value = "";  alert("adresse invalide pas de caracteres speciaux ");return false;}

   else{ if(!(/[\w]+\s*/.test(ville.value))) {
    ville.value = "";  alert("ville invalide pas de caracteres speciaux ");return false;}
  
   else{  if(!(/[0-9]{10}/.test(telephone.value))) {
      alert("telephone invalide ");return false;}

   else{return true;}

                               
                        
                         
                      }
                   }
                }
            }
        }
    }
}

     
function createXHR(){
	var xhr; 
    try {
		xhr = new ActiveXObject('Msxml2.XMLHTTP');
	} catch (e) {
        try {
			xhr = new ActiveXObject('Microsoft.XMLHTTP');
		} catch (e2) {
        	try {  
		  		xhr = new XMLHttpRequest();
			} catch (e3) {  
				xhr = false;
			}
        }
     }
	return xhr;
}

function change(){

    
     xhr = createXHR();

xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
             alert(xhr.responseText);
            }}
            
var pseudo = encodeURIComponent(document.getElementById("pseudo").value);
var nom = encodeURIComponent(document.getElementById("nom").value);
var prenom = encodeURIComponent(document.getElementById("prenom").value);
var ville = encodeURIComponent(document.getElementById("ville").value);
var codepostal = encodeURIComponent(document.getElementById("codePostal").value);
var tel = encodeURIComponent(document.getElementById("telephone").value);
var mail = encodeURIComponent(document.getElementById("email").value);
var adresse = encodeURIComponent(document.getElementById("adresse").value);

if(sub()){
xhr.open("GET", "/Dansledressingde/Webroot/js/Ajaxtraitementprofil.php?1=" + pseudo + "&2=" + nom + "&3=" + prenom + "&4=" + ville +
               "&5=" + codepostal + "&6=" + tel + "&7=" + mail + "&8=" + adresse, true);
xhr.send(null);
}
            }

function ER(){
mailfilleul.value="";
}            