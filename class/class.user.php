<?php

require_once('dbconfig.php');

class USER
{

	private $conn;

	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }

	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}

	public function register($uname,$umail,$upass)
	{
		try
		{
			$new_password = password_hash($upass, PASSWORD_DEFAULT);

			$stmt = $this->conn->prepare("INSERT INTO users(user_name,user_email,user_pass)
		                                               VALUES(:uname, :umail, :upass)");

			$stmt->bindparam(":uname", $uname);
			$stmt->bindparam(":umail", $umail);
			$stmt->bindparam(":upass", $new_password);

			$stmt->execute();

			return $stmt;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}


	public function doLogin($uname,$umail,$upass)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT user_id, user_name, user_email, user_pass FROM users WHERE user_name=:uname OR user_email=:umail ");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				if(password_verify($upass, $userRow['user_pass']))
				{
					$_SESSION['user_session'] = $userRow['user_id'];
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public function is_loggedin()
	{
		if(isset($_SESSION['user_session']))
		{
			return true;
		}
	}

	public function redirect($url)
	{
		header("Location: $url");
	}

	public function doLogout()
	{
		session_destroy();
		unset($_SESSION['user_session']);
		return true;
	}
	###############################################
	public function addRegister($Register_id,$ID_card,$E_mail,$select2,$First_name,$Last_name,$First_name_E
	,$Last_name_E,$Birthday,$Location,$Nationality,$Faith,$Blood_Type,$House_number
	,$Swine,$Alley,$street,$f_entryid2,$District,$zone,$Postcode,$Telephone){

				try
				{
						$sr = $this->conn->prepare("INSERT INTO register VALUES (:Register_id,:ID_card,:E_mail,:select2,:First_name,:Last_name,:First_name_E,:Last_name_E,:Birthday,
							:Location,:Nationality,:Faith,:Blood_Type,:House_number,:Swine,:Alley,:street,:f_entryid2,:District,:zone,:Postcode,:Telephone)");
						$sr->bindparam(":Register_id",$Register_id);
						$sr->bindparam(":ID_card",$ID_card);
						$sr->bindparam(":E_mail",$E_mail);
						$sr->bindparam(":select2",$select2);
						$sr->bindparam(":First_name",$First_name);
						$sr->bindparam(":Last_name",$Last_name);
						$sr->bindparam(":First_name_E",$First_name_E);
						$sr->bindparam(":Last_name_E",$Last_name_E);
						$sr->bindparam(":Birthday",$Birthday);
						$sr->bindparam(":Location",$Location);
						$sr->bindparam(":Nationality",$Nationality);
						$sr->bindparam(":Faith",$Faith);
						$sr->bindparam(":Blood_Type",$Blood_Type);
						$sr->bindparam(":House_number",$House_number);
						$sr->bindparam(":Swine",$Swine);
						$sr->bindparam(":Alley",$Alley);
						$sr->bindparam(":street",$street);
						$sr->bindparam(":f_entryid2",$f_entryid2);
						$sr->bindparam(":District",$District);
						$sr->bindparam(":zone",$zone);
						$sr->bindparam(":Postcode",$Postcode);
						$sr->bindparam(":Telephone",$Telephone);
						$sr->execute();
					//echo "yeah!";
				}

				catch(PDOException $error)
				{
					echo $sql . "<br>" . $error->getMessage();
				}

			}
			###############################################
			public function updateRegister($ID_card,$E_mail,$First_name,$Last_name,$First_name_E
			,$Last_name_E,$Birthday,$Location,$Nationality,$Faith,$Blood_Type,$House_number
			,$Swine,$Alley,$street,$f_entryid2,$District,$zone,$Postcode,$Telephone){

						try
						{
								$sr = $this->conn->prepare("UPDATE register SET E_mail=:E_mail,First_name=:First_name,Last_name=:Last_name,
									First_name_E=:First_name_E,Last_name_E=:Last_name_E,Birthday=:Birthday,
									Location=:Location,Nationality=:Nationality,Faith=:Faith,Blood_Type=:Blood_Type,House_number=:House_number,Swine=:Swine,Alley=:Alley,street=:street,
									f_entryid2=:f_entryid2,District=:District,zone=:zone,Postcode=:Postcode,Telephone=:Telephone WHERE ID_card = :ID_card");
							  $sr->bindparam(":ID_card",$ID_card);
								$sr->bindparam(":E_mail",$E_mail);
								$sr->bindparam(":First_name",$First_name);
								$sr->bindparam(":Last_name",$Last_name);
								$sr->bindparam(":First_name_E",$First_name_E);
								$sr->bindparam(":Last_name_E",$Last_name_E);
								$sr->bindparam(":Birthday",$Birthday);
								$sr->bindparam(":Location",$Location);
								$sr->bindparam(":Nationality",$Nationality);
								$sr->bindparam(":Faith",$Faith);
								$sr->bindparam(":Blood_Type",$Blood_Type);
								$sr->bindparam(":House_number",$House_number);
								$sr->bindparam(":Swine",$Swine);
								$sr->bindparam(":Alley",$Alley);
								$sr->bindparam(":street",$street);
								$sr->bindparam(":f_entryid2",$f_entryid2);
								$sr->bindparam(":District",$District);
								$sr->bindparam(":zone",$zone);
								$sr->bindparam(":Postcode",$Postcode);
								$sr->bindparam(":Telephone",$Telephone);
								$sr->execute();
							//echo "yeah!";
						}

						catch(PDOException $error)
						{
							echo $sql . "<br>" . $error->getMessage();
						}

					}
			##########################
			public function selectallregister(){
					try
					{
						$sll = $this->conn->prepare("SELECT * FROM register");
						$sll->execute();
						$sell=$sll->fetchAll();
						return $sell;
				}
				catch(PDOException $error)
				{
					echo $sql . "<br>" . $error->getMessage();
				}

			}
			####################################
			public function selectregisterwhereid($ID_card){
					try
					{
						$sll = $this->conn->prepare("SELECT * FROM register WHERE ID_card = :ID_card");
						$sll->bindparam(":ID_card",$ID_card);
						$sll->execute();
						$sell=$sll->fetchAll();
						return $sell;
				}
				catch(PDOException $error)
				{
					echo $sql . "<br>" . $error->getMessage();
				}

			}
			public function delete($ID_card){

				try
				{
						$dem = $this->conn->prepare("DELETE FROM register WHERE ID_card = :ID_card");
						$dem->bindparam(":ID_card",$ID_card);
						$dem->execute();
					//echo "yeah!";
				}

				catch(PDOException $error)
				{
					echo $sql . "<br>" . $error->getMessage();
				}
		}

}
?>
