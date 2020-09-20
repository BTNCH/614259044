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
<!DOCTYPE html>
<html>
<head>
<title>ติดต่อ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
         <div class="col-sm-2 sidenav">
         <button><p><a href="profile.php">รายชื่อผู้ลงทะเบียน</a></p></button>

</div>
<center><div class="col-sm-8 text-left">
<td width="73%" colspan="2" rowspan="2" valign="top">
      <form name="form10" method="post" action="class/insert.php">
        <table width="100%" border="3" align="center" class="table-success">

          <tr>
            <td bgcolor="aqua"  style="font-size:24px"colspan="4">ลงทะเบียนศิษย์เก่า</td>
          </tr>
          <tr>
            <td  class="table-primary" colspan="4">ข้อมูลส่วนบุคคล</td>
          </tr>
          <td>คำนำหน้า</td>
            <td><label for="select"></label>
              <select class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" name="select2" id="select">
                <option>นาย</option>
                <option>นางสาว</option>
                <option>นาง</option>
              </select></td>
              <td>สัญชาติ </td>
            <td><select class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" name="f_entryid">
              <option value="กัมพูชา">กัมพูชา</option>
              <option value="เกาหลี">เกาหลี</option>
              <option value="คูเวต">คูเวต</option>
              <option value="แคนาดา">แคนาดา</option>
              <option value="จีน">จีน</option>
              <option value="ญี่ปุ่น">ญี่ปุ่น</option>
              <option value="โตโก">โตโก</option>
              <option value="ไต้หวัน">ไต้หวัน</option>
              <option value="ไทย" selected="">ไทย</option>
              <option value="นิวซีแลน">นิวซีแลน</option>
              <option value="ปากีสถาน">ปากีสถาน</option>
              <option value="ปานามา">ปานามา</option>
              <option value="เปรู">เปรู</option>
              <option value="โปรแลนด์">โปรแลนด์</option>
              <option value="ฝรั่งเศส">ฝรั่งเศส</option>
              <option value="ฟิลิปปินส์">ฟิลิปปินส์</option>
              <option value="เมียนมาร์">เมียนมาร์</option>
              <option value="เยอรมัน">เยอรมัน</option>
              <option value="ลาว">ลาว</option>
              <option value="เวียดนาม">เวียดนาม</option>
              <option value="สหรัฐอเมริกา">สหรัฐอเมริกา</option>
              <option value="อเมริกา">อเมริกา</option>
              <option value="ออสเตรเลีย">ออสเตรเลีย</option>
              <option value="อังกฤษ">อังกฤษ</option>
              <option value="อินเดีย">อินเดีย</option>
              <option value="โอมาน">โอมาน</option>
              <option value="ไม่ระบุ">ไม่ระบุ</option>
            </select></td>
          </tr>
          <tr>
            <td>ชื่อ</td>
            <td><label for="textfield1"></label>
              <input type="text" name="First_name" id="textfield1"></td>
            <td>นามสกุล</td>
            <td><label for="textfield2"></label>
              <input type="text" name="Last_name" id="textfield2"></td>
          </tr>
          <td>เพศ</td>
            <td><label for="select"></label>
              <select class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" name="select2" id="select">
                <option>ชาย</option>
                <option>หญิง</option>
              </select></td>
              <td>วันเดือนปีเกิด</td>
            <td><label for="textfield3"></label>
            <input type="date" name="Birthday" id="textfield3"></td>
          </tr>
          <tr>
            <td>เลขประจำตัวประชาชน</td>
            <td><label for="textfield29"></label>
              <input type="text" name="ID_card" id="textfield29"></td>
            <td>โทรศัพท์</td>
            <td><label for="textfield5"></label>
            <input type="text" name="Telephone" id="textfield5"></td>
          </tr>
            <td>ภูมิลำเนาเดิมจังหวัด</td>
            <td><label for="textfield6"></label>
            <input type="text" name="Location" id="textfield6"></td>
            <td>เชื้อชาติ</td>
            <td><label for="textfield7"></label>
            <input type="text" name="Nationality" id="textfield7"></td>
            </tr>
          <tr>
            <td>ศาสนา</td>
            <td><label for="textfield8"></label>
            <input type="text" name="Faith" id="textfield8"></td>
            <td>หมู่โลหิต</td>
            <td><label for="textfield9"></label>
            <input type="text" name="Blood_Type" id="textfield9"></td>
          </tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <tr>
            <td bgcolor="aqua"  style="font-size:24px"colspan="4">ข้อมูลที่อยู่ในสำเนาทะเบียนบ้าน</td>
          </tr>
          <tr>
            <td>บ้านเลขที่</td>
            <td><label for="textfield10"></label>
            <input type="text" name="House_number" id="textfield10"></td>
            <td>หมู่</td>
            <td><label for="textfield11"></label>
            <input type="text" name="Swine" id="textfield11"></td>
          </tr>
          <tr>
            <td>ซอย </td>
            <td><label for="textfield12"></label>
            <input type="text" name="Alley" id="textfield12"></td>
            <td>ถนน</td>
            <td><label for="textfield13"></label>
            <input type="text" name="street" id="textfield13"></td>
          </tr>
          <tr>
            <td>จังหวัด  </td>
            <td><select class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" name="f_entryid2">
              <option value=""></option>
              <option value="81">กระบี่</option>
              <option value="10">กรุงเทพมหานคร</option>
              <option value="71">กาญจนบุรี</option>
              <option value="46">กาฬสินธุ์</option>
              <option value="62">กำแพงเพชร</option>
              <option value="40">ขอนแก่น</option>
              <option value="22">จันทบุรี</option>
              <option value="24">ฉะเชิงเทรา</option>
              <option value="20">ชลบุรี</option>
              <option value="18">ชัยนาท</option>
              <option value="36">ชัยภูมิ</option>
              <option value="86">ชุมพร</option>
              <option value="57">เชียงราย</option>
              <option value="50">เชียงใหม่</option>
              <option value="92">ตรัง</option>
              <option value="23">ตราด</option>
              <option value="63">ตาก</option>
              <option value="99">ต่างประเทศ</option>
              <option value="26">นครนายก</option>
              <option value="73" selected="">นครปฐม</option>
              <option value="48">นครพนม</option>
              <option value="30">นครราชสีมา</option>
              <option value="80">นครศรีธรรมราช</option>
              <option value="60">นครสวรรค์</option>
              <option value="12">นนทบุรี</option>
              <option value="96">นราธิวาส</option>
              <option value="55">น่าน</option>
              <option value="38">บึงกาฬ</option>
              <option value="31">บุรีรัมย์</option>
              <option value="13">ปทุมธานี</option>
              <option value="77">ประจวบคีรีขันธ์</option>
              <option value="25">ปราจีนบุรี</option>
              <option value="94">ปัตตานี</option>
              <option value="14">พระนครศรีอยุธยา</option>
              <option value="56">พะเยา</option>
              <option value="82">พังงา</option>
              <option value="93">พัทลุง</option>
              <option value="66">พิจิตร</option>
              <option value="65">พิษณุโลก</option>
              <option value="76">เพชรบุรี</option>
              <option value="67">เพชรบูรณ์</option>
              <option value="54">แพร่</option>
              <option value="83">ภูเก็ต</option>
              <option value="44">มหาสารคาม</option>
              <option value="49">มุกดาหาร</option>
              <option value="58">แม่ฮ่องสอน</option>
              <option value="35">ยโสธร</option>
              <option value="95">ยะลา</option>
              <option value="45">ร้อยเอ็ด</option>
              <option value="85">ระนอง</option>
              <option value="21">ระยอง</option>
              <option value="70">ราชบุรี</option>
              <option value="16">ลพบุรี</option>
              <option value="52">ลำปาง</option>
              <option value="51">ลำพูน</option>
              <option value="42">เลย</option>
              <option value="33">ศรีสะเกษ</option>
              <option value="47">สกลนคร</option>
              <option value="90">สงขลา</option>
              <option value="91">สตูล</option>
              <option value="11">สมุทรปราการ</option>
              <option value="75">สมุทรสงคราม</option>
              <option value="74">สมุทรสาคร</option>
              <option value="27">สระแก้ว</option>
              <option value="19">สระบุรี</option>
              <option value="17">สิงห์บุรี</option>
              <option value="64">สุโขทัย</option>
              <option value="72">สุพรรณบุรี</option>
              <option value="84">สุราษฎร์ธานี</option>
              <option value="32">สุรินทร์</option>
              <option value="43">หนองคาย</option>
              <option value="39">หนองบัวลำภู</option>
              <option value="15">อ่างทอง</option>
              <option value="37">อำนาจเจริญ</option>
              <option value="41">อุดรธานี</option>
              <option value="53">อุตรดิตถ์</option>
              <option value="61">อุทัยธานี</option>
              <option value="34">อุบลราชธานี</option>
            </select></td>
            <td>เขต/อำเภอ</td>
            <td><label for="textfield14"></label>
            <input type="text" name="District" id="textfield14"></td>
          </tr>
          <tr>
            <td>แขวง/ตำบล</td>
            <td><label for="textfield15"></label>
            <input type="text" name="zone" id="textfield15"></td>
            <td>รหัสไปรษณีย์ </td>
            <td><label for="textfield16"></label>
            <input type="text" name="Postcode" id="textfield16"></td>
          </tr>
          <td bgcolor="aqua"  style="font-size:24px"colspan="4">ข้อมูลการศึกษา</td>
          </tr>
          <td>คำนำหน้า</td>
            <td><label for="select"></label>
              <select class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" name="select2" id="select">
                <option>นาย</option>
                <option>นางสาว</option>
                <option>นาง</option>
              </select></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
          </tr>
          <tr>
            <td>ชื่อ</td>
            <td><label for="textfield4"></label>
              <input type="text" name="First_name" id="textfield4"></td>
            <td>นามสกุล</td>
            <td><label for="textfield5"></label>
              <input type="text" name="Last_name" id="textfield5"></td>
          </tr>
            <td>รหัสนักศึกษา</td>
            <td><label for="textfield55"></label>
              <input type="text" name="" id="textfield55"></td>
            <td>อาชีพปัจจุบัน</td>
            <td><label for="textfield20"></label>
            <input type="text" name="Telephone" id="textfield20"></td>
          </tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <tr>
          <td bgcolor="aqua"  style="font-size:24px"colspan="4">ข้อมูลการทำงาน</td>
          </tr>
          <tr>
            <td>ชื่อบริษัท</td>
            <td><label for="textfield9"></label>
            <input type="text" name="House_number" id="textfield9"></td>
            <td>อาชีพปัจจุบัน</td>
            <td><label for="textfield11"></label>
            <input type="text" name="Swine" id="textfield11"></td>
          </tr>
          <tr>
            <td>บ้านเลขที่</td>
            <td><label for="textfield9"></label>
            <input type="text" name="House_number" id="textfield9"></td>
            <td>หมู่</td>
            <td><label for="textfield11"></label>
            <input type="text" name="Swine" id="textfield11"></td>
          </tr>
          <tr>
            <td>ซอย </td>
            <td><label for="textfield10"></label>
            <input type="text" name="Alley" id="textfield10"></td>
            <td>ถนน</td>
            <td><label for="textfield12"></label>
            <input type="text" name="street" id="textfield12"></td>
          </tr>
            <td>เขต/อำเภอ</td>
            <td><label for="textfield13"></label>
            <input type="text" name="District" id="textfield13"></td>
            <td>แขวง/ตำบล</td>
            <td><label for="textfield18"></label>
            <input type="text" name="zone" id="textfield18"></td>
            <tr>
            <td>จังหวัด  </td>
            <td><select class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" name="f_entryid2">
              <option value=""></option>
              <option value="81">กระบี่</option>
              <option value="10">กรุงเทพมหานคร</option>
              <option value="71">กาญจนบุรี</option>
              <option value="46">กาฬสินธุ์</option>
              <option value="62">กำแพงเพชร</option>
              <option value="40">ขอนแก่น</option>
              <option value="22">จันทบุรี</option>
              <option value="24">ฉะเชิงเทรา</option>
              <option value="20">ชลบุรี</option>
              <option value="18">ชัยนาท</option>
              <option value="36">ชัยภูมิ</option>
              <option value="86">ชุมพร</option>
              <option value="57">เชียงราย</option>
              <option value="50">เชียงใหม่</option>
              <option value="92">ตรัง</option>
              <option value="23">ตราด</option>
              <option value="63">ตาก</option>
              <option value="99">ต่างประเทศ</option>
              <option value="26">นครนายก</option>
              <option value="73" selected="">นครปฐม</option>
              <option value="48">นครพนม</option>
              <option value="30">นครราชสีมา</option>
              <option value="80">นครศรีธรรมราช</option>
              <option value="60">นครสวรรค์</option>
              <option value="12">นนทบุรี</option>
              <option value="96">นราธิวาส</option>
              <option value="55">น่าน</option>
              <option value="38">บึงกาฬ</option>
              <option value="31">บุรีรัมย์</option>
              <option value="13">ปทุมธานี</option>
              <option value="77">ประจวบคีรีขันธ์</option>
              <option value="25">ปราจีนบุรี</option>
              <option value="94">ปัตตานี</option>
              <option value="14">พระนครศรีอยุธยา</option>
              <option value="56">พะเยา</option>
              <option value="82">พังงา</option>
              <option value="93">พัทลุง</option>
              <option value="66">พิจิตร</option>
              <option value="65">พิษณุโลก</option>
              <option value="76">เพชรบุรี</option>
              <option value="67">เพชรบูรณ์</option>
              <option value="54">แพร่</option>
              <option value="83">ภูเก็ต</option>
              <option value="44">มหาสารคาม</option>
              <option value="49">มุกดาหาร</option>
              <option value="58">แม่ฮ่องสอน</option>
              <option value="35">ยโสธร</option>
              <option value="95">ยะลา</option>
              <option value="45">ร้อยเอ็ด</option>
              <option value="85">ระนอง</option>
              <option value="21">ระยอง</option>
              <option value="70">ราชบุรี</option>
              <option value="16">ลพบุรี</option>
              <option value="52">ลำปาง</option>
              <option value="51">ลำพูน</option>
              <option value="42">เลย</option>
              <option value="33">ศรีสะเกษ</option>
              <option value="47">สกลนคร</option>
              <option value="90">สงขลา</option>
              <option value="91">สตูล</option>
              <option value="11">สมุทรปราการ</option>
              <option value="75">สมุทรสงคราม</option>
              <option value="74">สมุทรสาคร</option>
              <option value="27">สระแก้ว</option>
              <option value="19">สระบุรี</option>
              <option value="17">สิงห์บุรี</option>
              <option value="64">สุโขทัย</option>
              <option value="72">สุพรรณบุรี</option>
              <option value="84">สุราษฎร์ธานี</option>
              <option value="32">สุรินทร์</option>
              <option value="43">หนองคาย</option>
              <option value="39">หนองบัวลำภู</option>
              <option value="15">อ่างทอง</option>
              <option value="37">อำนาจเจริญ</option>
              <option value="41">อุดรธานี</option>
              <option value="53">อุตรดิตถ์</option>
              <option value="61">อุทัยธานี</option>
              <option value="34">อุบลราชธานี</option>
            </select></td>
            <td>รหัสไปรษณีย์ </td>
            <td><label for="textfield19"></label>
            <input type="text" name="Postcode" id="textfield19"></td>
          </tr>
          <td>โทรศัพท์</td>
            <td><label for="textfield20"></label>
            <input type="text" name="Telephone" id="textfield20"></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="4" align="center"><input type="submit" name="button" id="button" value="ลงทะเบียน"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
    </form></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>

<br>
<br>
<br>
<br>
<br>
<script src="bootstrap/js/bootstrap.min.js"></script>
<footer class="container-fluid text-center">
  <p>Copyright © 2014 Nakhon Pathom Rajabhat University. All Rights Reserved.
Nakhon Pathom Rajabhat University 85 Malaiman Road, Muang, Nakhon Pathom 73000 Thailand
Tel : 0 3410 9300 Fax : 0 3426 1048 E-mail : rajabhat@npru.ac.th</p>
</footer>
</body>
</html>
