//Ejecutamos el código cuando se pulsa el botón
document.getElementById("formulario").addEventListener("submit", function(event) {
    event.preventDefault(); //Hacemos que no se envíe el formulario
    
    //Obtenemos los valores introducidos por el usuario
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var email = document.getElementById("email").value;
    
    //Creamos un objeto FormData para enviar los datos del formulario
    var formData = new FormData();
    formData.append("nombre", nombre);
    formData.append("apellido", apellido);
    formData.append("email", email);
    
    //Solicitud AJAX para enviar los datos del formulario
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "post.php", true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) { //Comprobamos que no haya ningún error
        console.log("Formulario enviado correctamente");
        alert("Usuario registrado correctamente");
        location.reload();
      }
    };
    xhr.send(formData);
});
  