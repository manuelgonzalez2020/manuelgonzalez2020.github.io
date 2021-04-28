<!DOCTYPE html>
<html>
	<head>
		<link href="miestilo.css" rel="stylesheet" type="text/css">
		<meta charset="UTF-8">
			<title>Insercciones</title>
	</head>
			<style type="text/css">
				body{
		background-color:blue ;
	}

	.tabla{
		background-color: red;
		color: white;
		width: 99.5%;
		border-radius:8px;
		border:white 3px solid ;
		font-family:sans-serif;
	}

	table{
		font-size: 14px;
	}

	th{
		border-radius:15px;
		border:black 2px solid ;
		border-radius:8px;
		padding:10px;
		font-size: 14px;
	}

	td{
		color:white;
		text-align: center;
		padding:5px;
		border:black 2px solid ;
		border-radius:4px;
	}

	input{
		background-color:yellow;
		padding: 4px;
		border-radius: 6px;
		border:white 2px solid ;
		margin-left:10px;
	}
			</style>
		<body>
			<?php
				function mostrardatos(){
					$server = "localhost";
					$user = "root";
					$pass = "";
					$database = "clientes_49192686x";
	$connect = mysqli_connect($server, $user, $pass, $database);
	if (mysqli_connect_errno()) {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		exit();
	}

	$sql = "SELECT * FROM `clientes_49192686x`";

	$result = mysqli_query($connect, $sql);

	if (mysqli_num_rows($result) > 0) {
		echo "<table class='tabla'>
		<tr>
		<th> Nombre </th>
		<th> Apellido 1</th>
		<th> Apellido 2</th>
		<th> Sexo </th>
		<th> Fecha de Nacimiento</th>
		<th> Nacionalidad </th>
		<th> DNI </th>
		<th> Email</th>
		<th> Residencia </th>
		<th> Codigo Postal </th>
		<th> Direccion</th>
		<th> Ciudad </th>
		<th> Domicilio Fiscal </th> 
		<th> Telefono </th>
		<th> Usuario </th>
		<th> Pregunta </th>
		<th> Respuesta </th>
		<th> Codigo Registro </th>
		</tr>";

	    while($row = mysqli_fetch_assoc($result)) {

	        echo "<tr>
	        <td> " .$row["Nombre"]. "</td>
	        <td> " .$row["Apellido1"]. "</td>
	        <td> " .$row["Apellido2"]. "</td>
	        <td> " .$row["Sexo"]."</td>
	        <td> " .$row["Fechanacimiento"]."</td>
	        <td> " .$row["Nacionalidad"]."</td>
	        <td> " .$row["DNI"]."</td>
	        <td> " .$row["email"]."</td>
	        <td> " .$row["Residencia"]."</td>
	        <td> " .$row["codigopostal"]."</td>
	        <td> " .$row["Direccion"]. " </td>
	        <td> " .$row["Ciudad"]."</td>
	        <td> " .$row["Domfiscal"]."</td>
	        <td> " .$row["Telefono"]. " </td>
	        <td> " .$row["Usuario"]."</td>
	        <td> " .$row["Pregunta"]. "</td>
	        <td> " .$row["Respuesta"]. "</td>
	        <td> " .$row["Codregistro"]. " </td>
	        </tr>";

	    }

	} else {
	    echo "0 results";
	}

	echo "</table>";
	mysqli_close($connect);

} 
					$server = "localhost";
					$user = "root";
					$pass = "";
					$database = "clientes_49192686x";
$connect = mysqli_connect($server, $user, $pass, $database) or die("Problemas con la conexión");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$Nombre=$_REQUEST["nombre"];
$Apellido1=$_REQUEST["apellido1"];
$Apellido2=$_REQUEST["apellido2"];
$Sexo=$_REQUEST["sexo"];
$FechaNac=$_REQUEST["nacimiento"];
$Nac=$_REQUEST["nacionalidad"];
$DNI=$_REQUEST["dni"];
$Correo=$_REQUEST["email"];
$Resi=$_REQUEST["pais"];
$CodPos=$_REQUEST["codigopostal"];
$Direc=$_REQUEST["direccion"];
$Ciu=$_REQUEST["ciudad"];
$DomFis=$_REQUEST["domiciliofiscal"];
$Telef=$_REQUEST["telefono"];
$Usur=$_REQUEST["usuario"];
$Password=$_REQUEST["contraseña"];
$Preg=$_REQUEST["pregunta"];
$Resp=$_REQUEST["respuesta"];
$CodReg=$_REQUEST["registro"];


$sql = "INSERT INTO clientes_49192686x (Nombre, Apellido1, Apellido2, Sexo, Fechanacimiento, Nacionalidad, DNI, email, Residencia, codigopostal, Direccion, Ciudad, Domfiscal, Telefono, Usuario, Contrasena, Pregunta, Respuesta, Codregistro)
VALUES ('$Nombre', '$Apellido1', '$Apellido2', '$Sexo', '$FechaNac', '$Nac', '$DNI', '$Correo', '$Resi', '$CodPos', '$Direc', '$Ciu', '$DomFis', '$Telef', '$Usur', 'Password', '$Preg', '$Resp', '$CodReg')";

if (mysqli_query($connect, $sql)) {
    echo "Realizado correctamente";
} else {
    echo "Error al crear el registro: " . $sql . "<br>" . mysqli_error($connect);
}


mysqli_close($connect);

mostrardatos();
			?>
			
		</body>
</html>