   var PSEUDO=document.getElementById('pseudo');
    var code = document.getElementById('codePostal');  
    var email=document.getElementById('email');  
    var nom=document.getElementById('nom');
    var prenom=document.getElementById('prenom');
    var adresse=document.getElementById('adresse');
    var ville=document.getElementById('ville');
    var telephone=document.getElementById('telephone');
    var remail=document.getElementById('remail');
    var mdp=document.getElementById('mdp');
    var rmpd=document.getElementById('rmpd');
    var marque=document.getElementById('marque');

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

function test(){

     
     xhr = createXHR();

xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
        
        if(xhr.responseText=="pseudo deja utilisé"){
           
                alert(xhr.responseText);
                
                PSEUDO.value="";
                }
                
        }
    };
    
     var pseudo = encodeURIComponent(document.getElementById("pseudo").value);

xhr.open("GET", "/Dansledressingde/webroot/js/ajaxTraitement.php?variable1="+pseudo, false);
xhr.send(null);

}

function sub(){
   
    
    if(code.value>100000 || code.value<10000 || isNaN(code.value)){    
     code.value = "";alert('code postal non valide');return false;}
    
    else{
         if (!(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-z]{2,6}$/.test(email.value))) {
email.value = "";  alert("Adresse e-mail invalide !");return false;} 

    else {
         if(remail.value!=email.value) {
    remail.value = "";  alert("confirmation mail invalide !");return false;}
    
    else{ 
        if  (!(/[a-zA-Z]+/.test(mdp.value)) || !(/[0-9]+/.test(mdp.value))|| !(/[a-zA-Z0-9]{7}/.test(mdp.value)))  {
  mdp.value = "";  alert("le mot de passe doit contenir au moins un chiffre et une lettre et contenir au moins 7 caracteres ");return false;}
  
  
   else{ if(rmpd.value!=mdp.value) {
    rmpd.value = "";  alert("confirmation mot de passe invalide !");return false;}
  

  else{ if(/['"<>]+/.test(nom.value)) {
    nom.value = "";  alert("Nom invalide pas de caracteres speciaux ");return false;}

  else{ if(/['"<>]+/.test(prenom.value)) {
    prenom.value = "";  alert("prenom invalide pas de caracteres speciaux ");return false;}

   else{ if(/['"<>]+/.test(adresse.value)) {
    adresse.value = "";  alert("adresse invalide pas de caracteres speciaux ");return false;}

   else{ if(/['"<>]+/.test(ville.value)) {
    ville.value = "";  alert("ville invalide pas de caracteres speciaux ");return false;}
  
   else{  if(!(/[0-9]{10}/.test(telephone.value))) {
    telephone.value = "";  alert("telephone invalide ");return false;}

     else{  if(!(/[0-9]{10}/.test(marque.value))) {
    marque.value = "";  alert("marque invalide pas de caracteres speciaux");return false;}

   else{return true;}
                                  }
                               }
                            }
                         }
                      }
                   }
                }
            }
        }
    }
}


function Telephone(){
   
    if(!(/[0-9]{10}/.test(telephone.value))){    
        document.getElementById("Telephone").innerHTML="X";
        document.getElementById("Telephone").style.color='rgb(255, 0, 0)';
    }
     else{document.getElementById("Telephone").innerHTML="V";
          document.getElementById("Telephone").style.color='rgb(0, 255, 0)';}
}


function Ville(){
   
    if(/['"<>]+/.test(ville.value)){    
        document.getElementById("Ville").innerHTML="X";
        document.getElementById("Ville").style.color='rgb(255, 0, 0)';
    }
     else{document.getElementById("Ville").innerHTML="V";
          document.getElementById("Ville").style.color='rgb(0, 255, 0)';}
}



function Adresse(){
   
    if(/['"<>]+/.test(adresse.value)){    
        document.getElementById("Adresse").innerHTML="X";
        document.getElementById("Adresse").style.color='rgb(255, 0, 0)';
    }
     else{document.getElementById("Adresse").innerHTML="V";
          document.getElementById("Adresse").style.color='rgb(0, 255, 0)';}
}



function Nom(){
   
    if(/['"<>]+/.test(nom.value)){    
        document.getElementById("Nom").innerHTML="X";
        document.getElementById("Nom").style.color='rgb(255, 0, 0)';
    }
     else{document.getElementById("Nom").innerHTML="V";
          document.getElementById("Nom").style.color='rgb(0, 255, 0)';}
}

function Prenom(){
   
    if(/['"<>]+/.test(prenom.value)){    
        document.getElementById("Prenom").innerHTML="X";
        document.getElementById("Prenom").style.color='rgb(255, 0, 0)';
    }
     else{document.getElementById("Prenom").innerHTML="V";
          document.getElementById("Prenom").style.color='rgb(0, 255, 0)';}
}

function CP(){
   
    if(code.value>100000 || code.value<10000 || isNaN(code.value)){    
        document.getElementById("CP").innerHTML="X";
        document.getElementById("CP").style.color='rgb(255, 0, 0)';
    }
     else{document.getElementById("CP").innerHTML="V";
          document.getElementById("CP").style.color='rgb(0, 255, 0)';}
}

function M(){
   
          if (!(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-z]{2,6}$/.test(email.value))) {
        document.getElementById("m").innerHTML="X";
        document.getElementById("m").style.color='rgb(255, 0, 0)';
    } 
    else{document.getElementById("m").innerHTML="V";
         document.getElementById("m").style.color='rgb(0, 255, 0)';}
}

function RM(){
   
            if(remail.value!=email.value) {
        document.getElementById("rm").innerHTML="X";
        document.getElementById("rm").style.color='rgb(255, 0, 0)';
    }
    else{document.getElementById("rm").innerHTML="V";
         document.getElementById("rm").style.color='rgb(0, 255, 0)';}
}
 
 function MD(){
   
            if (!(/[a-zA-Z]+/.test(mdp.value)) || !(/[0-9]+/.test(mdp.value))|| !(/[a-zA-Z0-9]{7}/.test(mdp.value)))  {
        document.getElementById("md").innerHTML="X";
        document.getElementById("md").style.color='rgb(255, 0, 0)';
    }
     else{document.getElementById("md").innerHTML="V";
          document.getElementById("md").style.color='rgb(0, 255, 0)';}
}  

function RMD(){
   
            if(rmpd.value!=mdp.value) {
        document.getElementById("rmd").innerHTML="X";
        document.getElementById("rmd").style.color='rgb(255, 0, 0)';
    } 
     else{document.getElementById("rmd").innerHTML="V";
          document.getElementById("rmd").style.color='rgb(0, 255, 0)';}
}

function Marque  (){
   
            if(/['"<>]+/.test(marque.value)) {
        document.getElementById("Marque").innerHTML="X";
        document.getElementById("Marque").style.color='rgb(255, 0, 0)';
    } 
     else{document.getElementById("Marque").innerHTML="V";
          document.getElementById("Marque").style.color='rgb(0, 255, 0)';}
}