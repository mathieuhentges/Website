 if(i==1){

    alert("inscription validée");
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
    
function test(){ 
    xhr = createXHR();
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
           
             if(xhr.responseText=="Connecter") {document.getElementById("formulaire").submit();
                 }
             else{   alert(xhr.responseText);}
            
            }
        }
    
     
    var pseudo = encodeURIComponent(document.getElementById("pseudo").value);
    var mdp = encodeURIComponent(document.getElementById("mdp").value);
    
xhr.open("GET", "/Dansledressingde/webroot/js/AjaxTraitementlogin.php?variable1=" + pseudo + "&variable2="+mdp, true);
xhr.send(null);
    }

