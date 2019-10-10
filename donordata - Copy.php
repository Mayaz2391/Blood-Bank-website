<?php


    

	/* @var $name type */
	$username= trim($_POST['username']);
	echo $username;
	echo "<br>";
	//$name= trim($_POST["name"]);
	//$hospital = trim($_POST['hospital']);
	//echo $hospital;
	//echo "<br>";

	$address = trim($_POST['address']);
	echo $address;
	echo "<br>";

	$blood = trim($_POST['blood']);
	echo $blood;
	echo "<br>";

	$contact = trim($_POST['contact']);
	echo $contact;
	echo "<br>";

	$email = trim($_POST['email']);
	echo $email;
	echo "<br>";

	/* @var $blood type */
	//$blood = trim($_POST['blood']);
	//echo $blood;
	//echo "<br>";

	$date = trim($_POST['date']);
	echo $date;
	echo "<br>";

	$groupcode = trim($_POST['groupcode']);
	echo $groupcode;
	echo "<br>";
  
				require "databasemanager.php";
				$obj = new DATABASEMANAGER;
				echo $obj->submitDonor($username, $address, $contact, $email, $blood, $date, $groupcode);

?>

