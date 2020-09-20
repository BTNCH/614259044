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
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<link rel="stylesheet" href="style.css" type="text/css"  />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>ยินดีต้อนรับ <?php print($userRow['user_email']); ?></title>
  
  <style>
  p1{
	 background-color: aqua;
    color: white;
    padding: 40px;
	}
h1{
   background-color: orange;
	border-style: solid;
    border-width: 5px;
}
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 400px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>
<hr />
<center><img src="img/h3.jpg" alt="h3" style="width:20%;max-width:150px"></center>
<center><span style="color:#FA8072;"><span style="font-size:18px;"><strong>อาจารย์ประจำสาขาวิศวกรรมซอฟต์แวร์</strong></span></span>
  </p></center>
  <center>
    <table border="0" cellpadding="1" cellspacing="1" style="width:700px;">
      <tbody>
        <tr>
          <td style="text-align: center;">
            <a href="http://pws.npru.ac.th/naruapon" target="_blank"><img alt="" src="img/c_nrp.png" style="width: 200px; height: 200px;"></a>
            <p>
              ประธานสาขาวิชาวิศวกรรมซอฟต์แวร์
            </p>
          </td>
        </tr>
        <tr>
          <td style="text-align: center;">
            <a href="http://pws.npru.ac.th/naruapon" target="_blank"><strong><span style="font-size:16px;">อาจารย์ นฤพล &nbsp;สุวรรณวิจิตร</span></strong></a>
          </td>
        </tr>
        <tr>
          <td style="text-align: center;">
            <a href="http://pws.npru.ac.th/naruapon" target="_blank"><strong><span style="font-size:16px;">Naruapon Suwanwijit</span></strong></a>
          </td>
        </tr>
        <tr>
          <td style="text-align: center;">
            <span style="font-size:16px;">Email : <a href="mailto:naruapon@webmail.npru.ac.th">naruapon@webmail.npru.ac.th </a></span>
          </td>
        </tr>
        <tr>
          <td>
            &nbsp;
          </td>
        </tr>
      </tbody>
    </table>
  </center>
  </hr>
  <center>
    <table border="0" cellpadding="1" cellspacing="1" style="width:700px;">
      <tbody>
        <tr>
          <td style="text-align: center; width: 50%px;">
            <a href="http://pws.npru.ac.th/sutarat/" target="_blank"><img alt="" src="img/c_nuy.png" style="width: 200px; height: 200px;"></a>
            <p>
            รองประธานฯ ฝ่ายกิจการนักศึกษา
            </p>
          </td>
          <td style="text-align: center; width: 50%%;">
            <a href="http://pws.npru.ac.th/wuttha/" target="_blank"><img alt="" src="img/c_nab.png" style="width: 200px; height: 200px;"></a>
            <p>
              รองประธานฯ ฝ่ายวิชาการ
            </p>
          </td>
        </tr>
        <tr>
          <td style="text-align: center; width: 50%px;">
            <strong style="text-align: center;"><span style="font-size: 16px;"><a href="http://pws.npru.ac.th/sutarat/" target="_blank">อาจารย์&nbsp;สุธารัตน์ ชาวนาฟาง</a></span></strong>
          </td>
          <td style="text-align: center; width: 50%%;">
            <strong style="text-align: center;"><span style="font-size: 16px;"><a href="http://pws.npru.ac.th/wuttha/" target="_blank">อาจารย์ ดร. วรเชษฐ์&nbsp; อุทธา</a></span></strong>
          </td>
        </tr>
        <tr>
          <td style="text-align: center; width: 50%px;">
            <span style="font-size: 16px;"><a href="http://pws.npru.ac.th/sutarat/" target="_blank">Sutarat Chaonafang</a></span>
          </td>
          <td style="text-align: center; width: 50%;">
            <span style="font-size:16px;"><a href="http://pws.npru.ac.th/wuttha/" target="_blank">Dr. Worachet&nbsp; Uttha</a></span>
          </td>
        </tr>
        <tr>
          <td style="text-align: center; width: 50%px;">
            <span style="font-size: 16px; text-align: center;">Email :<font size="2"><a href="mailto:sutarat@webmail.npru.ac.th">sutarat@webmail.npru.ac.th</a></font></span>
          </td>
          <td style="text-align: center; width:  50%;">
            <span style="font-size: 16px; text-align: center;">Email :<font size="2"> <a href="mailto:wuttha@webmail.npru.ac.th">wuttha@webmail.npru.ac.th</a></font></span>
          </td>
        </tr>
        <tr>
          <td style="text-align: center; width: 325px;">
            &nbsp;
          </td>
          <td style="width: 362px;">
            &nbsp;
          </td>
        </tr>
      </tbody>
    </table>
  </center>
  </hr>
  <center>
    <table border="0" cellpadding="1" cellspacing="1" style="width:700px;">
      <tbody>
        <tr>
          <td style="text-align: center; width: 30%;">
            <a href="http://home.npru.ac.th/suphitcha/" target="_blank"><img alt="" src="img/c_su.png" style="width: 200px; height: 200px;"></a>
          </td>
          <td style="text-align: center; width: 30%;">
            <a href="http://home.npru.ac.th/tkonpru/" target="_blank"><img alt="" src="img/c_ko.png" style="width: 200px; height: 200px;"></a>
          </td>
          <td style="text-align: center; width: 33%;">
            <a href="http://pws.npru.ac.th/udsanee" target="_blank"><img alt="" src="img/c_nee.png" style="width: 200px; height: 200px;"></a>
          </td>
        </tr>
        <tr>
          <td style="text-align: center; width: 30%;">
            <strong style="text-align: center;"><span style="font-size: 16px;"><a href="http://home.npru.ac.th/suphitcha/" target="_blank">อาจารย์ สุพิฌาย์&nbsp; จันทร์เรือง</a></span></strong>
          </td>
          <td style="text-align: center; width: 30%;">
            <strong style="text-align: center;"><span style="font-size: 16px;"><a href="http://home.npru.ac.th/tkonpru/" target="_blank">อาจารย์&nbsp;สมเกียรติ ช่อเหมือน</a></span></strong>
          </td>
          <td style="text-align: center; width: 33%;">
            <strong style="text-align: center;"><span style="font-size: 16px;"><a href="http://pws.npru.ac.th/udsanee" target="_blank">อาจารย์ ดร.อุษณีย์ &nbsp;ภักดีตระกูลวงศ์</a></span></strong>
          </td>
        </tr>
        <tr>
          <td style="text-align: center; width: 30%;">
            <span style="font-size:16px;"><a href="http://home.npru.ac.th/suphitcha/" target="_blank">Suphitcha&nbsp; Chanrueang</a></span>
          </td>
          <td style="text-align: center; width: 30%;">
            <span style="font-size: 16px;"><a href="http://home.npru.ac.th/tkonpru/" target="_blank">Somkiat Chormuan</a></span>
          </td>
          <td style="text-align: center; width: 33%;">
            <span style="font-size:16px;"><a href="http://pws.npru.ac.th/udsanee" target="_blank">Dr. Udsanee&nbsp; Pakdeetrakulwong</a></span>
          </td>
        </tr>
        <tr>
          <td style="text-align: center; width:  30%;">
            <span style="font-size: 16px; text-align: center;">Email :<font size="2"> <a href="mailto:suphitcha@webmail.npru.ac.th">suphitcha@webmail.npru.ac.th</a></font></span>
          </td>

          <td style="text-align: center; width: 30%;">
            <span style="font-size: 16px; text-align: center;">Email :<font size="2"> <a href="mailto:tko@webmail.npru.ac.th">tko@webmail.npru.ac.th</a></font></span>
          </td>
          <td style="text-align: center; width:  33%;">
            <span style="font-size: 16px; text-align: center;">Email :<font size="2"> <a href="mailto:udsanee@webmail.npru.ac.th">udsanee@webmail.npru.ac.th</a></font></span>
          </td>

        </tr>
        <tr>
          <td style="text-align: center; width: 325px;">
            &nbsp;
          </td>
          <td style="width: 362px;">
            &nbsp;
          </td>
        </tr>
      </tbody>
    </table>
  </center>
  </hr>
  <p style="text-align: center;">
    ติดต่ออาจารย์ได้ที่ :&nbsp;<span helvetica="" style="background-color: transparent; color: rgb(0, 0, 0); font-variant-numeric: normal; font-variant-east-asian: normal;">034-109-300 ต่อ 3297</span>
  </p>
  <p style="text-align: center;">
    <img alt="" src="img/All-SE.jpg" style="width: 50%; height: 50%;">
  </p>
</div>
<br>
<br>
<br>
<br>
<footer class="container-fluid text-center">
  <p1>Copyright © 2014 Nakhon Pathom Rajabhat University. All Rights Reserved.
Nakhon Pathom Rajabhat University 85 Malaiman Road, Muang, Nakhon Pathom 73000 Thailand
Tel : 0 3410 9300 Fax : 0 3426 1048 E-mail : rajabhat@npru.ac.th</p1>
</footer>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>