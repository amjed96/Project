<?PHP
include "../entities/compte.php";
include "../core/compteC.php";

if (isset($_POST['id']) and isset($_POST['username']) and isset($_POST['email']) and isset($_POST['password'])){
$compte1=new Compte($_POST['id'],$_POST['username'],$_POST['email'],$_POST['password']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$compte1C=new CompteC();
$compte1C->ajouterCompte($compte1);
header('Location: afficherCompte.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>