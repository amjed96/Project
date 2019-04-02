<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Oxygen ++</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                 <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.jpg" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Inscription </a>
                    </li>
                     <li>
                        <a  href="activite.html"><i class="fa fa-desktop fa-3x"></i> Activité</a>
                    </li>
                    <li>
                        <a  href="produits.html"><i class="fa fa-qrcode fa-3x"></i> Produits </a>
                    </li>
						   <li  >
                        <a   href="commandeetpanier.html"><i class="fa fa-bar-chart-o fa-3x"></i> Commandes & Panier </a>
                    </li>	
                      <li  >
                        <a  href="employers.html"><i class="fa fa-table fa-3x"></i> Employers </a>
                    </li>
                    <li  >
                        <a  href="sav.html"><i class="fa fa-edit fa-3x"></i> Services Aprés vente </a>
                    </li>				
					
                </ul>
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Blank Page</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                <div class="col-md-9 col-sm-12 col-xs-12">
               
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Table des comptes
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table border="1" class="table table-striped table-bordered table-hover">
                                    <?PHP
include "../core/compteC.php";
$compte1C=new CompteC();
$listeComptes=$compte1C->afficherComptes();

//var_dump($listeEmployes->fetchAll());
?>
<tr>
<td>Id</td>
<td>Username</td>
<td>Email</td>
<td>Password</td>
    <td>Supprimer</td>

    <td>Modifier</td>

</tr>

<?PHP
foreach($listeComptes as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['username']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
	<td><?PHP echo $row['password']; ?></td>
	<td><form method="POST" action="supprimerCompte.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierCompte.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
               
    </div>
        
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        
    
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>

