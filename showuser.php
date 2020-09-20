<?php

	require_once("class/session.php");

	require_once("class/class.user.php");
	$auth_user = new USER();


	$user_id = $_SESSION['user_session'];

	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));

	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<?php include("model/header.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
p{
	 background-color: aqua;
    color: white;
    padding: 40px;
	}
h4{
   background-color: aqua;
	border-style: solid;
    border-width: 5px;
}
	</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<link rel="stylesheet" href="style.css" type="text/css"  />
<title>ยินดีต้อนรับ</title>
</head>

<body>
<hr />
         <div class="col-sm-2 sidenav">

</div>
<center>     <p class="h4">ข้อมูลสมาชิก</p>

	            <?php
              if (isset($_GET['ID_card'])) {
                $ID_card = $_GET['ID_card'];}
	            $n = new USER();
              $result = $n->selectregisterwhereid($ID_card);
	            foreach ($result as $row)
	             {

	             ?>

	           <label>Register_id :: <?php echo $row["Register_id"];?></label><br>
	           <label>รหัสประจำตัวประชาชน :: <?php echo $row["ID_card"];?></label><br>
	           <label>E-mail ::<?php echo $row["E_mail"];?></label><br>
             <label>ชื่อ ::<?php echo $row["First_name"];?></label><br>
             <label>นามสกุล ::<?php echo $row["Last_name"];?></label><br>
             <label>ชื่อ-ภาษาอังกฤษ ::<?php echo $row["First_name_E"];?></label><br>
             <label>นามสกุล-ภาษาอังกฤษ ::<?php echo $row["Last_name_E"];?></label><br>
             <label>วัน/เดือน/ปี เกิด ::<?php echo $row["Birthday"];?></label><br>
             <label>เชื้อชาติ ::<?php echo $row["Nationality"];?></label><br>
             <label>ศาสนา ::<?php echo $row["Faith"];?></label><br>
             <label>หมู่โลหิต ::<?php echo $row["Blood_Type"];?></label><br>
             <label>บ้านเลขที่	 ::<?php echo $row["House_number"];?></label><br>
             <label>หมู่ ::<?php echo $row["Swine"];?></label><br>
             <label>ซอย ::<?php echo $row["Alley"];?></label><br>
             <label>ถนน  ::<?php echo $row["street"];?></label><br>
             <label>จังหวัด   ::<?php echo $row["f_entryid2"];?></label><br>
             <label>แขวง/ตำบล ::<?php echo $row["zone"];?></label><br>
             <label>รหัสไปรษณีย์  ::<?php echo $row["Postcode"];?></label><br>
             <label>โทรศัพท์ ::<?php echo $row["Telephone"];?></label><br><br>
             <button><p><a href="edituser.php?ID_card=<?php echo $row["ID_card"];?>">แก้ไขข้อมูล</a></p></button>
             <button> <p><a href="class/Delete_Description.php?ID_card=<?php echo $row["ID_card"];?>">ลบข้อมูล</a></p></button>
	          <?php } ?>





    </div>

</div></center> 
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer class="container-fluid text-center">
  <p>Copyright © 2014 Nakhon Pathom Rajabhat University. All Rights Reserved.
Nakhon Pathom Rajabhat University 85 Malaiman Road, Muang, Nakhon Pathom 73000 Thailand
Tel : 0 3410 9300 Fax : 0 3426 1048 E-mail : rajabhat@npru.ac.th</p>
</footer>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>