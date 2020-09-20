<?php
include("class.user.php");
$ID_card = $_GET['ID_card'];

$dt =new USER();
$dt->delete($ID_card);
$dt->redirect("../home.php");

?>
