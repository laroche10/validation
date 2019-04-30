
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="http//:fonts.googleapis.com/css?familly=lato" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
<link rel="stylesheet" href="css1/style.css">
<link href="../animate.css" rel="stylesheet">
    <title></title>
</head>
<body style="background-image: url(../image/f.png);">
    <?php
include'../entete.php'

    ?>
    <div class="container">

    <div style="margin: 0 auto; margin-top: 50px;">
<p style=" font-size: 50px; color: orange;text-align: center; background:rgba(31,63,37,1); " >bienvenue
<?php

require '../database.php';
if (isset($_POST)) {

$nom=verifyInput($_POST['nom']);
$prenom=verifyInput($_POST['prenom']);
$email=verifyInput($_POST['email']);
$phone=verifyInput($_POST['phone']);
$age=verifyInput($_POST['age']);
$password=verifyInput($_POST['password']);

}
echo  "$prenom";
?>
</p>
</div>
<div style="margin-bottom: 50px">
<h1 class="animated zoomIn" style="animation-delay: 0.30s;"><a href="../connecter.php" class="btn btn-primary btn-lg" style="text-align: center; width: 100%;">conneter vous ici</a></h1>
</div>
<div style="margin-bottom: 50px"> 
<h1 class="animated zoomIn" style="animation-delay: 1.30s;"><a href="../inscription.php" class="btn btn-warning btn-lg" style="text-align: center; width: 100%;">modifier les infos</a></h1>
</div>
<div style="margin-bottom: 50px">
<h1 class="animated zoomIn" style="animation-delay: 2.30s;"><a href="../index.php" class="btn btn-success btn-lg" style="text-align: center; width: 100%;">retour à la page d'acceuil</a></h1>
</div>*
<div style="margin-bottom: 50px">
<h1 class="animated zoomIn" style="animation-delay: 3s;"><a href="../connecter.php" class="btn btn-info btn-lg" style="text-align: center; width: 100%;">faites vos commande facilement</a></h1>
</div>






<?php



$db=Database::connect();
$insert=$db->prepare("INSERT INTO utilisateurs( `nom`, `prenom`, `email`, `telephone`, `naissance`, `password`) VALUES (?,?,?,?,?,?)");
$insert->execute(array($nom,$prenom,$email,$phone,$age,$password, ));
Database::disconnect();

 function verifyInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }


?>
</div>
</body>
</html>

