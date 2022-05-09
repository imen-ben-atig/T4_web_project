<?PHP
class commande{

	private int  $id_commande;
	private string $commandeDate;
	private int $commandePrix;
	private string $commandeNom;
	

	function __construct($commandeDate,  $commandePrix, $commandeNom){
	
		$this->commandeDate=$commandeDate;
		$this->commandePrix=$commandePrix;
		$this->commandeNom=$commandeNom;	
	
	}

	// function getIdC(){
	// 	return $this->id_commande;
	// }

	function getIdC(){
		return $this->id_commande;

	}
	function getDateC(){
		return $this->commandeDate;
	}

	function getPrixC(){
		return $this->commandePrix;
	}
	function getNomC(){
		return $this->commandeNom;
	}
	
	
	public function setDateC(string $commandeDate):string{
		$this->commandeDate = $commandeDate ;
	}

	public function setPrixC(int $commandePrix):void{
		$this->commandePrix = $commandePrix ;
	}
	
	
	public function setNomc(string $commandeNom):string{
		$this->commandeNom = $commandeNom ;
	}
	
}






?>