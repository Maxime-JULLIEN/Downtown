<?php
// connexion avec la base de données
	require "../bdd/bbd_connect.php" ;

$user = $bdd->query("SELECT login, pass, id FROM user WHERE login = '$_POST[login]' AND pass = '$_POST[pass]'");
$membre = $user->fetch();
 
if(($_POST[login]==$membre[login])&&($_POST[pass]==$membre[pass]))
{
	setcookie("id",$membre[id]); // genere un cookie contenant l'id du membre
	setcookie("login",$membre[login]); // genere un cookie contenant le login du membre		
	echo "1"; // on 'retourne' la valeur 1 au javascript si la connexion est bonne
}
else 
{
	echo "0"; // on 'retourne' la valeur 0 au javascript si la connexion n'est pas bonne
}
?>
