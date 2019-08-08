<?php
if(isset($_GET["filern"]))
{
$filepath = "cias/";
$newfilename = str_replace(" ","_",$_GET["filern"]);
rename($filepath.$_GET["filern"],$filepath.$newfilename);	
header('Location: index.php'); 
}
else
{
	echo "ERREUR: Pas de fichier sélectionné!";
}

 

