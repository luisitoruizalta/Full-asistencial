<?php 
	$destino= "luisitoruizalta@gmail.com";
	$nombre= $_POST["Unitat"];
	$nombre= $_POST["Tecnics"];
	$nombre= $_POST["Telefon"];
	$contenido= "Unitat: " . $Unitat . "\nTecnics: " . $Tecnics . "\nTelefon: " . $Telefon;
	mail($destino, "Full asistencial", $contenido);
	header("location:asistencial.html");
?>
