<?PHP
include "../core/compteC.php";
$compteC=new CompteC();
if (isset($_POST["id"])){
	$compteC->supprimerCompte($_POST["id"]);
	header('Location: afficherCompte.php');
}

?>