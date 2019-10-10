

<?php
// Start the session
session_start();
?>

<?php
class EDITOR{
	public function setEdit($option,$optionValue){
		require "profiledatamanager.php";
		$objEdit = new PROFILEDATAMANAGER;
		echo "?";
		if($option==="name")
			$objEdit->editName($_SESSION["id"],$optionValue);
		else if($option==="address")
			$objEdit->editAddress($_SESSION["id"],$optionValue);
		else if($option==="city")
			$objEdit->editCity($_SESSION["id"],$optionValue);
		else if($option==="mail")
			$objEdit->editMail($_SESSION["id"],$optionValue);
		//else if($option==="date")
			//$objEdit->editDonationDate($_SESSION["id"],$optionValue);
		//else if($option==="password")
			//$objEdit->editPassword($_SESSION["id"],$optionValue);
		return "3";
	}
	
}
?>

<?php
				// define variables and set to empty values
					$optionErr = $optionValueErr= $passwordErr=$lastdonationErr="";
					$option = $optionValue= $password=$lastdonation="";

					if ($_SERVER["REQUEST_METHOD"] == "POST") {
					  	if (empty($_POST["option"])) {
						    $optionErr ="hospitalName is required";
						  } else {
						    $option = test_input($_POST["option"]);
						  }
						  if (empty($_POST["optionValue"])) {
						    $optionValueErr = "bloodGroup is required";
						  } else {
						    $optionValue = test_input($_POST["optionValue"]);
						  }
						  
						  if (empty($_POST["lastDonation"])) {
						    $lastDonationErr = "lastDate name is required";
						  } else {
						    $lastDonation = test_input($_POST["lastDonation"]);
						  }
						  if (empty($_POST["newPassword"])) {
						    $passwordErr = "bloodGroup is required";
						  } else {
						    $password = test_input($_POST["newPassword"]);
						  }
						  
					  
					}

					function test_input($data) {
					  $data = trim($data);
					  $data = stripslashes($data);
					  $data = htmlspecialchars($data);
					  return $data;
					}
			?>
			<?php
				echo "<h2>Your Input:</h2>";
				echo $option;
				echo "<br>";
				echo $optionValue;
				echo "<br>";
				echo $password;
				echo $lastDonation;
				if (!empty($optionValue)){
					//require "editor.php";
					$obj = new EDITOR;
					echo $obj->setEdit($option,$optionValue);
					echo "option";
				}
				if(!empty($lastDonation))
				{
					$person = $_SESSION["id"];
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mayaz2";
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
			   			 die("Connection failed: " . $conn->connect_error);
					}
	
					$sql = "UPDATE PERSON SET last_donation='$lastDonation' WHERE person_phone='$person' ";

					if ($conn->query($sql) === TRUE) {
			    			//return "post Successfull";
					} else {
			    			//echo "Error in post. Retry";
					}
	
					$conn->close();
					
				}
				if(!empty($password))
				{
					$person = $_SESSION["id"];
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mayaz2";
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
			   			 die("Connection failed: " . $conn->connect_error);
					}
	
					$sql = "UPDATE PERSON SET password='$password' WHERE person_phone='$person' ";

					if ($conn->query($sql) === TRUE) {
			    			//return "post Successfull";
					} else {
			    			//echo "Error in post. Retry";
					}
	
					$conn->close();
					
				}
				header("Location:profile.php");
		
				
			?>
