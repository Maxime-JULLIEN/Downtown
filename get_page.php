<?php
	require "/bbd_connect.php" ;
$ask = $_REQUEST['Name'];
$pages = $bdd->query("SELECT * FROM link WHERE Name = '".$ask."'");
$result = $pages->fetch();
$Link = $result['Link'];

if (empty($Link)) {

  $Link = $ask;
};

include $Link;
?>
