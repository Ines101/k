<?PHP
include "../client.php";
include "../config.php";
class clientC {
function afficherclient ($client){
		echo "nom : ".$client->getnom ()."<br>";
		echo "prenom : ".$client->getprenom()."<br>";
		echo "email: ".$client->getemail()."<br>";
		echo "date: ".$client->getdate()."<br>";
		echo "mdp : ".$client->getmdp()."<br>";
	}
	
	function ajouterclient($client){
		$sql="insert into client (nom,prenom,email,date,mdp) values (:nom,:prenom,:email,:date,:mdp)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        
		$nom=$client->getnom();
        $prenom=$client->getprenom();
		$email=$client->getemail();
		$date=$client->getdate();
		$mdp=$client->getmdp();


		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':email',$email);
		$req->bindValue(':date',$date);
		$req->bindValue(':mdp',$mdp);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherclients(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerclient($email){
		$sql="DELETE FROM client where email= :email";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':email',$email);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	/*function modifierclient($client,$email){
		$sql="UPDATE client SET email=:emaill, nom=:nom,prenom=:prenom,address=:address,companyname=:companyname,town:=town,email=:email,phone=:phone,state=:state,postcode=:postcode,country=:country WHERE email=:email";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		 $lastname=$client->getlastname();
		$address=$client->getaddress();
		$companyname=$client->getcompanyname();
		$town=$client->gettown();
		$email=$client->getemail();
		$phone=$client->getphone();
		$state=$client->getstate();
		$postcode=$client->getpostcode();
		$country=$client->getcountry();
		$datas = array(':email'=>$email, ':email'=>$email, ':firstname'=>$firstname,':lastname'=>$lastname,':address'=>$address,':companyname'=>$companyname,':town'=>$town,':phone'=>$phone,':state'=>$state,':postcode'=>$postcode,':country'=>$country);
		$req->bindValue(':emaill',$emaill);
		$req->bindValue(':firstname',$firstname);
		$req->bindValue(':lastname',$lastname);
		$req->bindValue(':address',$address);
		$req->bindValue(':companyname',$companyname);
		$req->bindValue(':town',$town);
		$req->bindValue(':email',$email);
		$req->bindValue(':phone',$phone);
		$req->bindValue(':state',$state);
		$req->bindValue(':postcode',$postcode);
		$req->bindValue(':country',$country);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}*/
	function recupererclient($email){
		$sql="SELECT * from client where email=$email";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
}

?>