<?PHP
include "carteC.php";
$carteC=new carteC();

if (isset($_POST["ref"]) and isset($_POST["new"]) and ( $_POST["modwith"]=="pointt" ) )
{
	$carteC->modifiercarte($_POST["ref"],$_POST["new"],$_POST["modwith"]);
	header('Location: affichercarte.php');
}
else
{
	echo "Vous devez choisir modifier selon quel critere";
}


