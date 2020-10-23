<?php

$user1=$_POST['user1'];
$password1=$_POST['password1'];

if (isset($_POST['user1'])) {
	
	if ($user1=='admin'&& $password1=='admin') {
		echo "<h2 align='center'>Restaurante</h2>
	<form action='Reservar.php' method='POST' id='datos' name='datos'>
		<table align='center'>
			<tr>
				<td>
					<input type='submit' name='Reservar' value='Reservar'>
				</td>
			</tr>
		</table>
	</form>
	<form action='Confirmar.php' method='POST' id='datos' name='datos'>
		<table align='center'>
			<tr>
				<td>
					<input type='submit' name='Confirmar' value='Confirmar'>
				</td>
			</tr>
		</table>
	</form>
	<form action='Cancelar.php' method='POST' id='datos' name='datos'>
		<table align='center'>
			<tr>
				<td>
					<input type='submit' name='Cancelar' value='Cancelar'>
				</td>
			</tr>
		</table>
	</form>
	<form action='Reagendar.php' method='POST' id='datos' name='datos'>
		<table align='center'>
			<tr>
				<td>
					<input type='submit' name='Reagendar' value='Reagendar'>
				</td>
			</tr>
		</table>
	</form>";
	}else{
		echo "<h3>Usuario o contraseña incorrectos </h3>";

	}
}else{
	echo "no enviado";
}

?>
<!---
<!DOCTYPE html>
<html>
<head >
	<title>Restaurante</title>
</head>
<body>
	<h2 align='center'>Restaurante</h2>
	<form action='Reservar.php' method='POST' id='datos' name='datos'>
		<table align='center'>
			<tr>
				<td>
					<input type='submit' name='Reservar' value='Reservar'>
				</td>
			</tr>
		</table>
	</form>
	<form action='Confirmar.php' method='POST' id='datos' name='datos'>
		<table align='center'>
			<tr>
				<td>
					<input type='submit' name='Confirmar' value='Confirmar'>
				</td>
			</tr>
		</table>
	</form>
	<form action='Cancelar.php' method='POST' id='datos' name='datos'>
		<table align='center'>
			<tr>
				<td>
					<input type='submit' name='Cancelar' value='Cancelar'>
				</td>
			</tr>
		</table>
	</form>
	<form action='Reagendar.php' method='POST' id='datos' name='datos'>
		<table align='center'>
			<tr>
				<td>
					<input type='submit' name='Reagendar' value='Reagendar'>
				</td>
			</tr>
		</table>
	</form>

</body>
</html>
-->