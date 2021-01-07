<?PHP
include "maladieCont.php";
$maladieCont=new MaladieCont();
if (isset($_POST["id"])){
	$maladieCont->supprimerMaladie($_POST["id"]);
	header('Location: affichage.php');
}

?>
