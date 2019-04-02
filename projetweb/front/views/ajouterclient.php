<?PHP
include "clientC.php";
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['date']) && isset($_POST['mdp']))
{
$client1=new client($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['date'],$_POST['mdp']);

$client1C=new clientC();
$client1C->ajouterclient($client1);

include "PHPMailer/src/PHPMailer.php";
include "PHPMailer/src/Exception.php";
include "PHPMailer/src/SMTP.php";
$mail = new PHPMailer\PHPMailer\PHPMailer();
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->Port= '465';
            $mail->SMTPAuth = true;
            $mail->Username = 'borjinisyrine@gmail.com';
            $mail->Password = 'I<3dogschien';
            $mail->SMTPSecure = 'ssl';
            $mail->From = 'borjinisyrine@gmail.com';
            $mail->FromName = 'borjin';
            $mail->addAddress('borjinisyrine@gmail.com', 'Clients');
            $mail->WordWrap = 50;
            $mail->IsHtml(true);
            $mail->Subject = 'Nouvel Article dans notre catalogue';
            $mail->Body = 'wellcomeee';
	header('Location: contact.html');
}else
{
	echo "vérifier les champs";
}
//*/
 
 ?>