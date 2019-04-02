<html>
<head>
</head>
<body>
<?PHP
include "../entities/compte.php";
include "../core/compteC.php";
if (isset($_GET['id'])){
	$compteC=new CompteC();
    $result=$compteC->recupererCompte($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$username=$row['username'];
		$email=$row['email'];
		$password=$row['password'];
?>
<form method="POST">
<table>
<caption>Modifier Compte</caption>
<tr>
<td>Id</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" name="username" value="<?PHP echo $username ?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" value="<?PHP echo $email ?>"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="text" name="password" value="<?PHP echo $password ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$compte=new compte($_POST['id'],$_POST['username'],$_POST['email'],$_POST['password']);
	$compteC->modifierCompte($compte,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: afficherCompte.php');
}
?>
</body>
</html>