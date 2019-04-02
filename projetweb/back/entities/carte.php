<?PHP
class carte{
	private $nom;
	private $prenom;
	private $email;
	private $point;
	function __construct($nom,$prenom,$email,$point){
	$this->nom=$nom;
	$this->prenom=$prenom;
	$this->email=$email;
	$this->point=$point;
	}
	
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}
	function getemail(){
		return $this->email;
	}
	function getpoint(){
		return $this->point;
	}


	function setnom($nom){
		$this->nom=$nom;
	}
	function setprenom($prenom){
		$this->fprenom=$prenom;
	}
	function setemail($email){
		$this->email=$email;
	}
	function setmdp($mdp){
		$this->date=$date;
	}
	
}

?>