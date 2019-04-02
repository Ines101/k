<?PHP
include "carteC.php";
if (isset($_POST['email']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['pointt']))
{
$carte1=new carte($_POST['email'],$_POST['nom'],$_POST['prenom'],$_POST['pointt']);

$carte1C=new carteC();
$carte1C->ajoutercarte($carte1);


      header('Location: ajouter.html');
}else
{
      echo "vérifier les champs";
}
//*/
 
 ?>