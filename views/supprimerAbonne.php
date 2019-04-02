<?PHP
include "../core/abonneC.php";
$abonneC=new abonneC();
if (isset($_POST["cin"])){
	$abonneC->supprimerAbonne($_POST["cin"]);
	header('Location: afficherAbonne.php');
}

?>