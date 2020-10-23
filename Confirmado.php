<?php

$nombre=$_GET['nombre'];
$dia=$_GET['dia'];
$hora=$_GET['hora'];
$mesa=$_GET['mesa'];
$personas=$_GET['personas'];
$status=$_GET['status'];
$path="Reservaciones.txt";
//$idRegistro=$_GET['idRegistro'];
$newStatus='on';
if ($status=='off') {
	//$status='on';
	$file=fopen($path,"r");
		$tam=filesize($path);
		$contents=fread($file,$tam);
		$cadenaDiv=strpos($contents,$nombre);
		if($cadenaDiv!==false){
			//echo "<br>Si esta";
			$registro=explode("\n", $contents);
			$longitud=count($registro);
			//echo "longitud: ".$longitud."<br>";
			
			for ($i=0; $i < $longitud ; $i++) { 
				if (strpos($registro[$i], $nombre)===false) {
						//echo "NO ciclo";
				}else  {
					
						//echo "A qui esta el registro: ".$registro[$i]."<br>";
						//ELIMINAR REGISTRO EN ARCHIVO
						$arch=fopen($path, "r");
						//$contenidos=fread($arch, filesize($path));
						//$regis=explode("\n", $contents);
						//$longitud1=count($regis);
						$lineRem=str_replace($status, $newStatus, $registro[$i]);
						fclose($arch);
						$arch=fopen($path, "a+");
						fwrite($arch, $lineRem);
						fclose($arch);
						echo "Desea cambiar el Cofirmar Reservacion: <br>";
						break;
					
					
				}
			}
		}
		else{
			echo "No se encontro registro<br>";
			
		}
	echo "<table align='center'>
			<tr>
				<td><h3>Confirmacion</h3></td>
			</tr>
			<tr>
				<td>Nombre: &nbsp;".$nombre."<br></td>
			</tr>
			<tr>
				<td>Dia: &nbsp;".$dia."</br></td>
			</tr>
			<tr>
				<td>Hora: &nbsp;".$hora."</br></td>
			</tr>
			<tr>
				<td>personas: &nbsp;".$personas."</br></td>
			</tr>
			<tr>
				<td>Mesa: &nbsp;".$mesa."</br></td>
			</tr>
			<tr>
				<td>Estatus: por confirmar</br></td>
			</tr>
		</table>";


		echo "<a href='index.php'><input type='button' value='Regresar'><a href='Confirma2.php?status=$status&nombre=$nombre'><input type='button' value='Confirmar'></a>";


}else{
	echo "La confirmacion se realizo anteriormente";
}

?>