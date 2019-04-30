<?php
require '../database.php';
if (isset($_POST)) {
	$Username = verifyInput($_POST['nom']);
	$password = verifyInput($_POST['password']);
}
$db=Database::connect();
$verifi = $db->prepare("SELECT * FROM utilisateurs WHERE nom = ? AND password = ?");
$verifi->execute(array($Username,$password));
if ($exist = $verifi->fetch()) {
	 session_start();
 $_SESSION['use']= $exist['id'];

	header("location:../client.php");
}
else
{
	header("location:../connecter.php");
}

function verifyInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>