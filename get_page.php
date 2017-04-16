<?php
session_start();

$Name = $_REQUEST['Name'];
if (isset($_REQUEST['Data1'])) {
$Data1  = $_REQUEST['Data1'];
};

if (isset($_SESSION['IP'])) {
    if ($_SESSION['IP'] != $_SERVER['REMOTE_ADDR']) {
        $Name = "Identification";
		$Data1= "";
		include 'ressources/user/deconnexion.php';
}
}

if ($Name == "Identification") {
    $Link = 'ressources/user/identification.php';
    echo "Identification";
} elseif ($Name == "Deconnexion") {
    $Link = 'ressources/user/deconnexion.php';
    echo "Déconnexion";
    include 'content/index.php';
    
}
elseif ($Name == "Espace membre") {
    $Link = 'content/users/index.php';    
}
 elseif ($Name == "Dialog") {
	$Link = 'content/evenements/dialog.php';
}
elseif ($Name == "Hoover_button") {
	    require "ressources/bdd/bbd_connect.php";

	$Link = 'ressources/hoover_button/hoover_button.php';
}
else {
    require "ressources/bdd/bbd_connect.php";
    $pages  = $bdd->query("SELECT * FROM link WHERE Name = '" . $Name . "'");
    $result = $pages->fetch();
    $Folder = $result['Folder'];
    if (!empty($Data1)) {
        $datapage = $bdd->query("SELECT * FROM " . $Folder . " WHERE EscName = '" . $Data1 . "'");
        $result1  = $datapage->fetch();
        $Link     = 'content/' . $Folder . '/details.php';
    } else {
        $Link = 'content/' . $Folder . '/index.php';
    }
}
include $Link;
?>