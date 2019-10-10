<?php
class DATABASEMANAGER{


	public function memberRegistration($name,$address,$city,$blood,$email,$person_phone,$person_password,$last_donation,$gender){

		$servername = "localhost";
		$username = "id6772783_faruk";
		$password = "faruk";
		$dbname = "id6772783_faruk";
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
   			 die("Connection failed: " . $conn->connect_error);
		}
	
		$sql = "INSERT INTO PERSON (name, address, city,  blood,   email, person_phone, password, last_donation, gender)
		VALUES ('$name', '$address', '$city', '$blood', '$email', '$person_phone', '$person_password','$last_donation','$gender')";

		if ($conn->query($sql) === TRUE) {
    			return "Registration Successfull";
		} else {
    			return "Error in registration. Retry";
		}
	
		$conn->close();
	}
	public function authentication($contact, $password)
	{
		$servername = "localhost";
		$username = "id6772783_faruk";
		$password = "faruk";
		$dbname = "id6772783_faruk";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT person_phone, password FROM PERSON";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    // output data of each row
			
		    while($row = $result->fetch_assoc()) {
			if($row["person_phone"]===$contact && $row["password"]===$password){
				return "true";
			}
				
		    }
		} else {
		    return "0 results";
		}
		
		$conn->close();
		
	}
        public function backup($name,$address,$city,$blood,$email,$person_phone,$person_password,$last_donation,$gender,$bdate,$profession,$layout, $age, $time){

		$servername = "localhost";
		$username = "id6772783_faruk";
		$password = "faruk";
		$dbname = "id6772783_faruk";
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
   			 die("Connection failed: " . $conn->connect_error);
		}
	
		$sql = "INSERT INTO NEW_PERSON (name, address, city, dob, age, profession, blood,   email, person_phone, password, last_donation, gender, layout, time)
		VALUES ('$name', '$address', '$city', '$bdate', '$age','$profession','$blood', '$email', '$person_phone', '$person_password','$last_donation','$gender','$layout','$time')";

		if ($conn->query($sql) === TRUE) {
    			return "full Registration Successfull";
		} else {
    			return "Error in full registration. Retry";
		}
	
		$conn->close();
	}
	
}
?>
