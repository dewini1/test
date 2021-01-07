<?PHP
include "maladieEntity.php";
include "maladieCont.php";

if ( isset($_POST['nom']) and isset($_POST['description']) and isset($_POST['media']) and isset($_POST['description2']) and isset($_POST['media2']) ){
$maladie1=new Maladie($_POST['nom'],$_POST['description'] ,$_POST['description2'] ,$_POST['media']  ,$_POST['media2'] );





$maladie1C=new maladieCont();
$maladie1C->ajouterMaladie($maladie1);
header('Location: affichage.php');
	
}else{
	echo "verifier les champs";
	
}
//*/

?>
