<?php
session_start();
require "../bdd/bbd_connect.php" ;
$user = $bdd->query("SELECT * FROM user WHERE login = '".$_POST['login']."' AND pass = '".$_POST['pass']."'");
$membre = $user->fetch();
 
if(($_POST['login']===$membre['Login'])&&($_POST['pass']===$membre['Pass']))
{
	session_regenerate_id();
	$_SESSION['IP']=$_SERVER['REMOTE_ADDR'];
	$_SESSION['id'] = $membre['ID']; // genere un cookie contenant l'id du membre
	$_SESSION['login'] = $membre['Login']; // genere un cookie contenant le login du membre		
	$_SESSION['IsAdmin'] = $membre['Admin']; // genere un cookie contenant le login du membre		
	echo "1"; // on 'retourne' la valeur 1 au javascript si la connexion est bonne
}
else 
{
	echo "0"; // on 'retourne' la valeur 0 au javascript si la connexion n'est pas bonne
}
?>
 