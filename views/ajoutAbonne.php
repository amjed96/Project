<?PHP
include "../entities/abonne.php";
include "../core/abonneC.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['sexe']) and isset($_POST['longueur'])and isset($_POST['poids'])and isset($_POST['numtel'])){
$abonne1=new abonne($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['sexe'],$_POST['datenaissance'],$_POST['longueur'],$_POST['poids'],$_POST['numtel']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$abonne1C=new AbonneC();
$abonne1C->ajouterAbonne($abonne1);
header('Location: afficherAbonne.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>