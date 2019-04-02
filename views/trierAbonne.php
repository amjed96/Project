<?PHP
include "../core/abonneC.php";
$abonneC=new abonneC();
if (isset($_POST["cin"])){
	$abonneC->trierAbonne();
	header('Location: afficherAbonne.php');
}

?>