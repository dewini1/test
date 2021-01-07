<?PHP
class Maladie{
	private $id;
	private $nom;
	private $description;
	private $description2;
	private $media;
	private $media2;
	
	function __construct($nom,$description,$description2,$media,$media2){
		
		$this->nom=$nom;
		$this->description=$description;
		$this->description2=$description2;
		$this->media=$media;
		$this->media2=$media2;
		
	}
	
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getDescription(){
		return $this->description;
	}
	function getDescription2(){
		return $this->description2;
	}
	function getMedia(){
		return $this->media;
	}
	function getMedia2(){
		return $this->media2;
	}
	

	function setNom($nom){
		$this->nom=$nom;
	}
	function setDescription($description){
		$this->description=$description;
	}
	function setDescription2($description2){
		$this->description2=$description2;
	}
	function setMedia($media){
		$this->media=$media;
	}
	function setMedia2($media2){
		$this->media=$media2;
	}
	
}

?>
