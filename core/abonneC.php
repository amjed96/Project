<?PHP
include "../config.php";
class AbonneC{
    function afficherAbonne ($abonne)
    {
        echo "Cin: ".$abonne->getCin()."<br>";
        echo "Nom: ".$abonne->getNom()."<br>";
        echo "Prenom: ".$abonne->getPrenom()."<br>";
        echo "Sexe: ".$abonne->getSexe()."<br>";
        echo "Date de naissance: ".$abonne->getDateNaissance()."<br>";
        echo "Longueur: ".$abonne->getLongueur()."<br>";
        echo "Poids: ".$abonne->getPoids()."<br>";
        echo "Numéro de téléphone: ".$abonne->getNumTel()."<br>";
    }
    
    function ajouterAbonne($abonneabonne){
		$sql="insert into abonne (cin,nom,prenom,sexe,datenaissance,longueur,poids,numtel) values (:cin, :nom,:prenom,:sexe,:datenaissance,:longueur,:poids,:numtel)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		//got here

            
            
        $cin = $abonneabonne->getCin();
        $nom = $abonneabonne->getNom();
        $prenom = $abonneabonne->getPrenom();
        $sexe = $abonneabonne->getSexe();
        $dateNaissance = $abonneabonne->getDateNaissance();
        $longueur = $abonneabonne->getLongueur();
        $poids = $abonneabonne->getPoids();
        $numTel = $abonneabonne->getNumTel();
        
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':datenaissance',$dateNaissance);
		$req->bindValue(':longueur',$longueur);
		$req->bindValue(':poids',$poids);
		$req->bindValue(':numtel',$numTel);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
    
    function afficherAbonnes(){
		$sql="SElECT * From abonne";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
    
    function trierAbonne(){
		$sql="SElECT * From abonne ORDER BY cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
    
    function supprimerAbonne($cin){
		$sql="DELETE FROM abonne where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    
    function modifierAbonne($abonne,$cin){
		$sql="UPDATE abonne SET cin=:cinn, nom=:nom, prenom=:prenom, sexe=:sexe, dateNaissance=:dateNaissance, longueur=:longueur, poids=:poids, numtel=:numtel WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cinn=$abonne->getCin();
        $nom=$abonne->getNom();
        $prenom=$abonne->getPrenom();
        $sexe=$abonne->getSexe();
        $dateNaissance=$abonne->getDateNaissance();
        $longueur=$abonne->getLongueur();
        $poids=$abonne->getPoids();
        $numTel=$abonne->getNumTel();
    
		$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':sexe'=>$sexe,':dateNaissance'=>$dateNaissance, ':longueur'=>$longueur, ':poids'=>$poids, ':numtel'=>$numTel);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':dateNaissance',$dateNaissance);
		$req->bindValue(':longueur',$longueur);
		$req->bindValue(':poids',$poids);
		$req->bindValue(':numtel',$numTel);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
    
    //
    function recupererAbonne($cin){
		$sql="SELECT * from abonne where cin=$cin";
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
