<?php
$cartella_upload = "upload/";
$f = $_FILES["userfile"];
$caricati = 0;
for($i = 0;$i < count($f["tmp_name"]);$i++)
	if($f["error"][$i] == 0)
	{
		move_uploaded_file($f["tmp_name"][$i],$cartella_upload . $f["name"][$i]);
		$caricati++;
	}
if($caricati > 0)
	echo "UPLOAD ESEGUITO CON SUCCESSO";
else
	echo "ERRORE CARICAMENTO FILE";
	
?>
