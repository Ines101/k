<?PHP
class carte{
	private $nom;
	private $prenom;
	private $email;
	private $pointt;
	function __construct($nom,$prenom,$email,$pointt){
	$this->nom=$nom;
	$this->prenom=$prenom;
	$this->email=$email;
	$this->pointt=$pointt;
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
	function getpointt(){
		return $this->pointt;
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
	function setpointt($pointt){
		$this->date=$date;
	}
	
}

?>