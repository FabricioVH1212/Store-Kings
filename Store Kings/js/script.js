/*
	Autor: Fabricio Vindas Hernandez
	Descripción: Este archivo es de todas la funciones
*/
//Efecto del título
var message="Store Kings" 
var message=message+" " 
i="0" 
var temptitle=""
var speed="150"
    function titler(){
        if (!document.all&&!document.getElementById)
            return
            document.title=temptitle+message.charAt(i)
            temptitle=temptitle+message.charAt(i)
            i++ 
                if(i==message.length){
                i="0"
                temptitle=""
                }
                setTimeout("titler()",speed)
    }
window.onload=titler();
window.onload=LazyLoading();

// function respuesta_mantenimiento_estado(respuesta){
// 	var resp = respuesta.split('///')
// 	if(resp[0] == 1){
// 		document.getElementById('table_refresh').innerHTML = resp[1]
// 	}
// }

function validar_datos(tipo){
	switch(tipo){
		case 'registro':
		//validaciones de la identificación
		  var num_ide = $('#txt_num_ide').val()
			if(num_ide == '' ){
				alertify.error('Debe indicar un número de identificación');
				$('#txt_num_ide').focus()
				return false
			}	
          //validaciones del nombre
		  var nombre = $('#txt_nombre').val()
			if(nombre == '' ){
				alertify.error('Debe indicar un nombre');
				$('#txt_nombre').focus()
				return false
			}	
			//validaciones de los apellidos
			var apellidos = $('#txt_apellidos').val()
			if(apellidos == '' ){
				alertify.error('Debe indicar los apellidos ');
				$('#txt_apellidos').focus()
				return false
			}	
			//validaciones del correo electronico
			var correo = $('#txt_correo').val()
			if(correo == ''){
				alertify.error('Debe indicar el correo');
				$('#txt_correo').focus()
				return false;
			}
			//validaciones de contraseñas
			var contrasena = $('#txt_contrasena').val()
			var confirm = $('#txt_confirm').val()
			if(contrasena == '' ){
				alertify.error('Debe proporcionar una contraseña');
				$('#txt_contrasena').focus()
				return false
			}	
			if(confirm == '' ){
				alertify.error('Debe proporcionar una contraseña');
				$('#txt_confirm').focus()
				return false
			}	
			if(contrasena != confirm){
				alertify.error('Ambas contraseñas tienen que ser iguales');
				$('#txt_confirm').focus()
				return false
			}
			//validaciones del código postal
			var postal = $('#txt_postal').val()
			if(postal == ''){
				alertify.error('Debe proporcionar un código postal');
				$('#txt_postal').focus()
				return false
			}
			//validaciones del telefono
			var telefono = $('#txt_telefono').val()
			if(telefono == ''){
				alertify.error('Debe proporcionar un número de teléfono');
				$('#txt_telefono').focus()
				return false
			}
			//validacion de las condiciones
			if(!$('#agreement_checkbox').prop('checked')) {
				alertify.error('Debe aceptar los términos');
				$('#agreement_checkbox').focus()
				return false
			}		
																													
		break;
		case 'login':
			var usuario = $('#txt_num_ide').val()
			if(usuario == ''){
				alertify.error('Debe indicar su número de identificación');
				$('#txt_num_ide').focus()
				return false
			}

			var contrasena = $('#txt_contrasena').val()
			if(contrasena == ''){
				alertify.error('Debe indicar su contraseña');
				$('#txt_contrasena').focus()
				return false
			}					
		break;
		case 'recupera_contrasena':
			var correo = $('#txt_correo').val()
			if(correo == ''){
				alertify.error('Debe indicar su correo');
				$('#txt_correo').focus()
				return false
			}

			var num_ide = $('#txt_num_ide').val()		
			if(num_ide == ''){
				alertify.error('Debe indicar el número de cédula');
				$('#txt_num_ide').focus()
				return false
			}	
			
			if(isNaN(num_ide)){
				alertify.error('El número de cédula no debe tener guiones');
				$('#txt_num_ide').focus()
				return false				
			}							
		break;
	}
}

//Previsualización imagen
function previa_imagen(nb) {        
    var reader = new FileReader();         
    reader.readAsDataURL(document.getElementById('uploadImage'+nb).files[0]);         
    reader.onload = function (e) {             
        document.getElementById('uploadPreview'+nb).src = e.target.result;         
    };     
} 

//Imprimir factura
function imprimir_factura(imp){
	var recuperar = document.body.innerHTML;
	var contenido = document.getElementById('imp').innerHTML;
	document.body.innerHTML = contenido;
	window.print();
	document.body.innerHTML = recuperar;
}

//Intersection Observer API
function LazyLoading(){
	const options = {
	  root: null, 
	  rootMargin: '0px 0px -100px 0px',
	};

	const callback = (entries, observer) => {
	  entries.forEach((entry) => {
	    if (entry.isIntersecting) {
	      entry.target.src = entry.target.dataset.src;// Tomamos el valor de data-src y lo seteamos en el atributo src
	      observer.unobserve(entry.target);// Como la imagen cargará una vez, dejamos de observar el elemento.
	    }
	  });
	};

	const observer = new IntersectionObserver(callback, options);
	document.querySelectorAll('img').forEach((img)=>observer.observe(img));
}

// Back-to-top button
var btn = document.getElementById("back-to-top");
window.onscroll = function(){//Para que empiece a salir el back-to-top
 	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
		btn.style.display = "block";
	} else {
		btn.style.display = "none";
	}
}
btn.addEventListener("click",function(){//Al dar click al back-to-top
	document.body.scrollTop = 0;
 	document.documentElement.scrollTop = 0;
});