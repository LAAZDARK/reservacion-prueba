<?php 

$nombre=$_GET['nombre'];
$status=$_GET['status'];
$path="Reservaciones.txt";

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
						$contents=fread($arch, filesize($path));
						$regis=explode("\n", $contents);
						$longitud=count($regis);
						$lineRem=str_replace($registro[$i], '', $contents);
						fclose($arch);
						$arch=fopen($path, "w+");
						fwrite($arch, $lineRem);
						fclose($arch);
						echo "Confirmando...<br>";
						echo "Registro Confirmado.<br>";

						break;
					
					
				}
			}
		}
		else{
			echo "No se encuentra registro<br>";
			
		}
	echo "<table align='center'>
			<tr>
				<td><h3>Confirmacion exitosa</h3></td>
			</tr>
			<tr>
				<td><a href='index.php'><input type='button' value='Regresar'></a><td>
			</tr>
		</table>";


		


}else{
	echo "La confirmacion se realizo anteriormente";
}


 ?>