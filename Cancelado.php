<?php 

$nombre=$_POST['nombre'];
$path="Reservaciones.txt";
$file=fopen($path,"r");
		$tam=filesize($path);
		$contents=fread($file,$tam);
		$cadenaDiv=strpos($contents,$nombre);
		if($cadenaDiv!==false){
			echo "<br>Si esta";
			$registro=explode("\n", $contents);
			$longitud=count($registro);
			echo "longitud: ".$longitud."<br>";
			
			for ($i=0; $i < $longitud ; $i++) { 
				if (strpos($registro[$i], $nombre)===false) {
						//echo "NO ciclo";
				}else  {
					
						echo "A qui esta el registro: ".$registro[$i]."<br>";
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
						echo "Borrando...<br>";
						echo "El registro se borro corectamente.<br>";

						break;
					
					
				}
			}
		}
		else{
			echo "no esta";
			
		}

		
		
		echo "<a href='index.php'><input type='button' value='Regresar'></a>";


?>