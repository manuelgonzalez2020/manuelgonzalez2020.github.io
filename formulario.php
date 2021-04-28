<!DOCTYPE html>
<html>
	<head>
		<link href="miestilo.css" rel="stylesheet" type="text/css">
		<meta charset="UTF-8">
			<title> </title>
	</head>
			<style type="text/css">
				h2{
					text-decoration-line: underline;
				}
				div{
					width: 25%;
            		margin: 1%;
					float: left;
					color:white;
				}
				body{
					background-color: lightblue;
					text-align: center;
					font-family: Times New Roman;
				}
				h2{
					color: white;
				}
			</style>

		<body>
				
<form action="bbdd.php">
	<div>
	<h2>Tus datos personales</h2>
						Nombre Completo *<br><br><input type="text" name="nombre" maxlength="40" placeholder="Ej. Maria, Rosa, Jose, Juan, Antonio" required><br>
						<br>Apellido *<br><br><input type="text" name="apellido1" maxlength="50" required><br>
						<br>Segundo apellido<br><br><input type="text" name="apellido2" maxlength="50" required><br>
						<br>Sexo: *<br><br>
						<select name="sexo">
		    <option value="hombre">Hombre</option>
		    <option value="mujer">Mujer</option>
		  				</select><br>
						<br>Fecha nacimiento: *<br><br><input type="date" name="nacimiento" required><br>
						<br>Nacionalidad *<br><br><select name="nacionalidad">
		    <option value="españa">España</option>
		    <option value="portugal">Portugal</option>
		    <option value="inglaterra">Inglaterra</option>
		    <option value="francia">Francia</option>
		  				</select><br><br>
						<br>DNI/NIE*<br><br><input type="text" name="dni" placeholder="Ej: 12345678X O X12345678" pattern="(([X-Z]{1})([-]?)(\d{7})([-]?)([A-Z]{1}))|((\d{8})([-]?)([A-Z]{1}))" required>
					</div>
						<div>
						<h2>Tus datos de contacto</h2>

						<br>Correo electronico: *<br><br><input type="text" name="email" maxlength="50" required><br>
						<br>Pais de Residencia: * <br><br><select name="pais"><br>
		    <option value="españa">España</option>
		    <option value="portugal">Portugal</option>
		    <option value="inglaterra">Inglaterra</option>
		    <option value="francia">Francia</option>
		  				</select><br><br>
						<br>Codigo postal: *<br><br><input type="text" name="codigopostal" maxlength="50" required><br>
						<br>Direccion: *<br><br><input type="text" name="direccion" maxlength="50" required><br>
						<br>Pueblo/Ciudad: *<br><br><input type="text" name="ciudad" maxlength="50" required><br>
						<br>Domicilio Fiscal: *<br><br><input type="text" name="domiciliofiscal" maxlength="50" required><br>
						<br>Telefono: *<br><br><input type="text" name="telefono" maxlength="9" max="999999999" title="El campo solo puede contener 9 numeros" required><br>
					</div>
					<div>
						<h2>Informacion de tu cuenta</h2>
						<br>Usuario: *<br><br><input type="text" name="usuario" maxlength="50" required><br>
						<br>Contraseña: *<br><br><input type="password" name="contraseña" maxlength="20" placeholder="Ej: Sportium-1" required><br>
						<br><br>Pregunta secreta: *<br><br><select name="pregunta"  required="">
    					<option value="fecha de nacimiento">fecha de nacimiento</option>
    					<option value="nombre de mascota">nombre de mascota</option>
    					<option value="como estas">como estas</option>
    				</select>
    					<br><br>Respuesta: *<br><br><input type="text" name="respuesta" required=""><br>
						<br>Código de registro(opcional):<br><br><input type="text" name="registro" maxlength="50"><br>
				<br><input class="enviar" type="submit" name="Enviar">
			</div>
			</form>
		</body>
</html>