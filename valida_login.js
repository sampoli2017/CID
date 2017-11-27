//with(document.login){
	onsubmit = function(e){

		
		ok = true;
		if(ok && username.value==""){
			e.preventDefault();
			ok=false;
			alert("Debe escribir un nombre de usuario");
			username.focus();

		}
		if(ok && password.value==""){
			e.preventDefault();
			ok=false;
			alert("Debe escribir su password");
			password.focus();
		}
		//if(ok){ window.location = "direccion.html" }
	}
//}