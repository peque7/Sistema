function goLogin(){
	var conect, form, response, result, user, pass, session;
	
	user    = __('user_login').value;
	pass    = __('pass_login').value;
	session = __('session_login').value;

    form = 'varible=contenido';

	conect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	
	conect.onreadystatechange = function(){
		//   ESTADOS DE  AJAX
		//   1 :   cuando se activa
	    //   2 :   cundo se envia los datos a php
		//   3 :   cundo php recive los datos
		//   4 :   cuando php devuelve los datos a javascritp

       if (conect.readyState == 4 && conect.status == 200) {
	        if (conect.responseText == 1) {
	        	result =   '<div class="alert alert-dismissible alert-success">';
	       	result +=  '<button type="button" class="close" data-dismiss="alert">X</button>';
	       	result +=  '<h4>Conectado/h4>';
	       	result +=  '<p><strong>Estas Conectado</strong></p>';
	       	result +=  '</div>';
	       	alert("si entre");
	       	__("_AJAX_LOGIN_").innerHTML = result;
	       	location.reload();
	       }else{
	           __("_AJAX_LOGIN_").innerHTML = conect.responseText;
	       }
	    }else if(conect.readyState != 4){
	    	result =   '<div class="alert alert-dismissible alert-warning">';
	       	result +=  '<button type="button" class="close" data-dismiss="alert">X</button>';
	       	result +=  '<h4>Procesando...<h4>';
	       	result +=  '<p><strong>Estamos intentando Logearte</strong></p>';
	       	result +=  '</div>';
	       	__("_AJAX_LOGIN_").innerHTML = result;
	    }
    }
	conect.open('POST','ajax.php/mode=login',true);
	conect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	conect.send(form);
}

function runScriptLogin(e) {
	 // tecla entre e intro #13
	 if (e.keyCode == 13) {
	 	 goLogin()
	 }
}