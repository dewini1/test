<?PHP
include "config.php";

class MaladieCont {

	function ajouterMaladie($maladie){
		$sql="insert into department (idCategorie,nom,description,media,description2,media2) values ( 5,:nom, :description, :media, :description2, :media2)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $nom=$maladie->getNom();
        $description=$maladie->getDescription();
        $media=$maladie->getMedia();
        $description2=$maladie->getDescription2();
		$media2=$maladie->getMedia2();
        
        
		$req->bindValue(':nom',$nom);
		$req->bindValue(':description',$description);
		$req->bindValue(':media',$media);
		$req->bindValue(':description2',$description2);
		$req->bindValue(':media2',$media2);
		
		

            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficherMaladie(){
		
		$sql="SElECT * From department where idCategorie = 5";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimerMaladie($id){
		$sql="DELETE FROM department  where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function recupererMaladie($id){
		$sql="SELECT * from department where id=$id";
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
