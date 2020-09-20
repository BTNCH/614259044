<?php include("model/header.php");?>
<?php

	require_once("class/session.php");

	require_once("class/class.user.php");
	$auth_user = new USER();


	$user_id = $_SESSION['user_session'];

	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));

	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>
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
<title>ยินดีต้อนรับ <?php print($userRow['user_email']); ?></title>
</head>

<body>
<hr />
         <div class="col-sm-2 sidenav">

</div>
       	<hr />
           <center> 
        <p class="h4">ข้อมูลสมาชิก</p>
				<table width="100%" border="3">
	      <tr>
	        <th scope="col"><table width="100%" border="0">
	          <tr>
	            <th width="16%" scope="col">ลำดับที่</th>
	            <th width="34%" scope="col">รหัสประจำตัวประชาชน</th>
	            <th width="34%" scope="col">ชื่อ-นามสกุล</th>
	            <th width="16%" scope="col">เบอร์โทร</th>
	            </tr>
	            <?php

	            $n = new USER();
	            $result = $n->selectallregister();
	            foreach ($result as $row)
	             {
								 $l=$row["Register_id"];

	             ?>
	          <tr>
							<td><?php echo $row["Register_id"];?></td>
	            <td><a href="showuser.php?ID_card=<?php echo $row["ID_card"];?>"><?php echo $row["ID_card"];?></a></td>
	            <td><?php echo $row["First_name"];?></td>
	            <td><?php echo $row["Telephone"];?></td>

	            </tr>
	          <?php } ?>
	        </table></th>
	      </tr>
	    </table>




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