<html>
<head>
</head>
<body>
<?PHP
include "../entities/abonne.php";
include "../core/abonneC.php";
if (isset($_GET['cin'])){
	$abonneC=new abonneC();
    $result=$abonneC->recupererAbonne($_GET['cin']);
	foreach($result as $row){
		$cin=$row['cin'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$sexe=$row['sexe'];
		$dateNaissance=$row['datenaissance'];
		$longueur=$row['longueur'];
		$poids=$row['poids'];
		$numTel=$row['numtel'];
?>
<form method="POST">
<table>
<caption>Modifier Abonne</caption>
<tr>
<td>CIN</td>
<td><input type="number" name="cin" value="<?PHP echo $cin ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>Sexe</td>
<td><input type="text" name="sexe" value="<?PHP echo $sexe ?>"></td>
</tr>
<tr>
<td>Date Naissance</td>
<td><input type="text" name="datenaissance" value="<?PHP echo $dateNaissance ?>"></td>
</tr>
<tr>
<td>Longueur</td>
<td><input type="text" name="longueur" value="<?PHP echo $longueur ?>"></td>
</tr>
<tr>
<td>Poids</td>
<td><input type="text" name="poids" value="<?PHP echo $poids ?>"></td>
</tr>
<tr>
<td>Num Tel</td>
<td><input type="text" name="numtel" value="<?PHP echo $numTel ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$abonne=new abonne($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['sexe'],$_POST['datenaissance'],$_POST['longueur'],$_POST['poids'],$_POST['numtel']);
	$abonneC->modifierAbonne($abonne,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: afficherAbonne.php');
}
?>
</body>
</html>