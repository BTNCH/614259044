<?php
include("class.user.php");
$Register_id =$_POST['Register_id'];
$ID_card =$_POST['ID_card'];
$E_mail =$_POST['E_mail'];
$select2 =$_POST['select2'];
$First_name =$_POST['First_name'];
$Last_name =$_POST['Last_name'];
$First_name_E =$_POST['First_name_E'];
$Last_name_E =$_POST['Last_name_E'];
$Birthday = $_POST['Birthday'];
$Location = $_POST['Location'];
$Nationality = $_POST['Nationality'];
$Faith = $_POST['Faith'];
$Blood_Type = $_POST['Blood_Type'];
$House_number = $_POST['House_number'];
$Swine = $_POST['Swine'];
$Alley = $_POST['Alley'];
$street = $_POST['street'];
$f_entryid2 = $_POST['f_entryid2'];
$District = $_POST['District'];
$zone = $_POST['zone'];
$Postcode = $_POST['Postcode'];
$Telephone = $_POST['Telephone'];


$sst =new USER ();
$sst->addRegister($Register_id,$ID_card,$E_mail,$select2,$First_name,$Last_name,$First_name_E,
$Last_name_E,$Birthday,$Location,$Nationality,$Faith,$Blood_Type,$House_number,
$Swine,$Alley,$street,$f_entryid2,$District,$zone,$Postcode,$Telephone);
$sst->redirect("../register.php");

?>
