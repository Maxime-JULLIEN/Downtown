<?php
	require "ressources/bdd/bbd_connect.php" ;
$Name = $_REQUEST['Name'];
$Data1 = $_REQUEST['Data1'];
$pages = $bdd->query("SELECT * FROM link WHERE Name = '".$Name."'");
$result = $pages->fetch();
$Folder = $result['Folder'];
if(!empty($Data1)){
$datapage = $bdd->query("SELECT * FROM ".$Folder." WHERE EscName = '".$Data1."'");
$result1 = $datapage->fetch();
$Link = 'content/'.$Folder.'/details.php';
}
else{
$Link = 'content/'.$Folder.'/index.php';
} 
include $Link;
?>
