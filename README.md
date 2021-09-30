<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro</title>
  <link rel="stylesheet" type="text/css" href="css.css">
  <script type="text/javascript">
        function comprobarClave(){
          let correcto=true;
           clave1 = document.formulario.clave1.value;
           clave2 = document.formulario.clave2.value;
        
            if (clave1 != clave2){
              document.getElementById("error").classList.add("mostrar");
              correcto=false;
            }
            return correcto;
        }
  function mostrarContrasena1(){
      var tipo = document.getElementById("contrasena1");
      if(tipo.type == "contrasena1"){
          tipo.type = "password";
      }else{
          tipo.type = "contrasena1";
      }
  }
  function mostrarContrasena2(){
      var tipo = document.getElementById("contrasena2");
      if(tipo.type == "contrasena2"){
          tipo.type = "password";
      }else{
          tipo.type = "contrasena2";
      }
  }
</script>
  </script>
  </head>


<body> 
  <div><img src="celeste.jpg" align="right"></div>
<div class="contact_form">

    <div class="formulario">      
      <h1>Inscribirse</h1>
<div id="error" class="ocultar">Las contraseñas no coinciden</div>

          <form action="registrado.php" name="formulario" onsubmit="return comprobarClave()">  
              
                <p>
                  <label for="email">Email
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="email" name="email" id="email" required="obligatorio" placeholder="Escribe tu Email">
                </p>
            
                <p>
                  <label for="contrasena">Contraseña
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="password" name="clave1" id="contrasena1" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!=%*?&])[A-Za-z\d@$!=%*?&]{8,}$" required="obligatorio" placeholder="Escribe tu contraseña">
                    <button type="button" onclick="mostrarContrasena1()">Mostrar Contraseña</button>
                </p>    
              
                <p>
                  <label for="contrasena">Repetir Contraseña
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="password" name="clave2" id="contrasena2" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!=%*?&])[A-Za-z\d@$!=%*?&]{8,}$" required="obligatorio" placeholder="Repite la contraseña">
                    <button type="button" onclick="mostrarContrasena2()">Mostrar Contraseña</button>
                </p>    
              
                <p>
                  <label for="nacimiento">Fecha de nacimiento
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="date" name="nacimiento" id="nacimiento" required="obligatorio" max= "2003-01-01" placeholder="Indique su fecha de nacimiento">
                </p>     
                <br class="aviso">
                  <span class="obligatorio"> * </span>los campos son obligatorios.
                </br>
                <button type="submit" name="enviar_formulario" id="enviar"><p>Registrarse</p></button>

                          
          </form>
          
    </div>  
  </div>

</body>
</html>
