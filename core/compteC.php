<?PHP
include "../config.php";
class CompteC{
    function afficherCompte ($compte)
    {
        echo "Id: ".$compte->getId()."<br>";
        echo "Username: ".$compte->getUsername()."<br>";
        echo "Email: ".$compte->getEmail()."<br>";
        echo "Password: ".$compte->getPassword()."<br>";
    }
    
    function ajouterCompte($comptecompte){
		$sql="insert into compte (id,username,email,password) values (:id, :username, :email, :password)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
            
            
        $id = $comptecompte->getId();
        $username = $comptecompte->getUsername();
        $email = $comptecompte->getEmail();
        $password = $comptecompte->getPassword();
        
		$req->bindValue(':id',$id);
		$req->bindValue(':username',$username);
		$req->bindValue(':email',$email);
		$req->bindValue(':password',$password);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
    
    function afficherComptes(){
		$sql="SElECT * From compte";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
    
    function supprimerCompte($id){
		$sql="DELETE FROM compte where id = :id";
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
    
    function modifierCompte($compte,$id){
		$sql="UPDATE compte SET id=:ide, username=:username, email=:email, password=:password WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$ide=$compte->getId();
		$username=$compte->getUsername();
        $email=$compte->getEmail();
        $password=$compte->getPassword();
    
		$datas = array(':ide'=>$ide, ':username'=>$username, ':email'=>$email, ':password'=>$username);
		$req->bindValue(':ide',$ide);
		$req->bindValue(':id',$id);
		$req->bindValue(':username',$username);
		$req->bindValue(':email',$email);
		$req->bindValue(':password',$password);
		
		
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
    function recupererCompte($id){
		$sql="SELECT * from compte where id=$id";
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
