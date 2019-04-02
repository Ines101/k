<?PHP
include "clientC.php";
$clientC=new clientC();

if (isset($_POST["ref"]) and isset($_POST["new"]) and ( $_POST["modwith"]=="nom" or $_POST["modwith"]=="prenom" or $_POST["modwith"]=="email"or $_POST["modwith"]=="mdp")  ) {
	$clientC->modifierclient($_POST["ref"],$_POST["new"],$_POST["modwith"]);
	header('Location: afficherclient.php');
}
else
{
	echo "Vous devez choisir modifier selon quel critere";
}

?>