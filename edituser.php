<?php
    include('class/dbconfig.php');
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
h1{
   background-color: orange;
	border-style: solid;
    border-width: 5px;
}
	</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<link rel="stylesheet" href="style.css" type="text/css"  />
<title>ยินดีต้อนรับ<?php print($userRow['user_email']); ?></title>
</head>

<body>
<hr />
         <div class="col-sm-2 sidenav">

</div>
<hr />
     <center>   <p class="h4">ข้อมูลสมาชิก</p>

	            <?php
              if (isset($_GET['ID_card'])) {
                $ID_card = $_GET['ID_card'];}
	            $n = new USER();
              $result = $n->selectregisterwhereid($ID_card);
	            foreach ($result as $row)
	             {

	             ?>
							 <form name="form10" method="post" action="class/Edit_Description.php?ID_card=<?php echo $row["ID_card"];?>">
	           <label>Register_id :: <?php echo $row["Register_id"];?></label><br>
	           <label>รหัสประจำตัวประชาชน :: </label>
						 <input type="text" name="ID_card" value="<?php echo $row["ID_card"];?>"></input><br>
	           <label>E-mail :: </label>
						 <input type="text" name="E_mail" value="<?php echo $row["E_mail"];?>"></input><br>
             <label>ชื่อ ::</label>
						 <input type="text" name="First_name" value="<?php echo $row["First_name"];?>"></input><br>
             <label>นามสกุล ::</label>
						 <input type="text" name="Last_name" value="<?php echo $row["Last_name"];?>"></input><br>
             <label>ชื่อ-ภาษาอังกฤษ ::</label>
						 <input type="text" name="First_name_E" value="<?php echo $row["First_name_E"];?>"></input><br>
             <label>นามสกุล-ภาษาอังกฤษ ::</label>
						 <input type="text" name="Last_name_E" value="<?php echo $row["Last_name_E"];?>"></input><br>
             <label>วัน/เดือน/ปี เกิด ::</label>
						 <input type="text" name="Birthday" value="<?php echo $row["Birthday"];?>"></input><br>
             <label>เชื้อชาติ ::</label>
						 <input type="text" name="Nationality" value="<?php echo $row["Nationality"];?>"></input><br>
             <label>ศาสนา ::</label>
						 <input type="text" name="Faith" value="<?php echo $row["Faith"];?>"></input><br>
             <label>หมู่โลหิต ::</label>
						 <input type="text" name="Blood_Type" value="<?php echo $row["Blood_Type"];?>"></input><br>
             <label>บ้านเลขที่	 ::</label>
						 <input type="text" name="House_number" value="<?php echo $row["House_number"];?>"></input><br>
             <label>หมู่ ::</label>
						 <input type="text" name="Swine" value="<?php echo $row["Swine"];?>"></input><br>
             <label>ซอย ::</label>
						 <input type="text" name="Alley" value="<?php echo $row["Alley"];?>"></input><br>
             <label>ถนน  ::</label>
						 <input type="text" name="street" value="<?php echo $row["street"];?>"></input><br>
             <label>จังหวัด   ::</label>
						 <input type="text" name="f_entryid2" value="<?php echo $row["f_entryid2"];?>"></input><br>
             <label>แขวง/ตำบล ::</label>
						 <input type="text" name="zone" value="<?php echo $row["zone"];?>"></input><br>
             <label>รหัสไปรษณีย์  ::</label>
						 <input type="text" name="Postcode" value="<?php echo $row["Postcode"];?>"></input><br>
             <label>โทรศัพท์ ::</label>
						 <input type="text" name="Telephone" value="<?php echo $row["Telephone"];?>"></input><br>
                         <tr>
						 <button><p>บันทึก</p></button>
          </tr>
                           <button>  <p><a href="class/Delete_Description.php?ID_card=<?php echo $row["ID_card"];?>">ลบข้อมูล</a></p></button>
					 </form>
	          <?php } ?>



    

    </div>

</div></center> 
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