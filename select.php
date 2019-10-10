<?php
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

		$sql = "SELECT * FROM person ";
		$result = $conn->query($sql);
                //return $result;
		if ($result->num_rows > 0) {
		    // output data of each row
                    
			$checker="1";
		    while($row = $result->fetch_assoc()) {
			echo $row["name"]."<br>".$row["person_phone"]."<br>".$row["password"]."<br>"."<br>";
				
		    }
                    
                  
		} else {
		    
		}

		//return "false";
		$conn->close();
                
                echo "<br>"."!!!!!!!!!!!!store!!!!!!!!!!!!!!"."<br>"."<br>";
                $servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mayaz2";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM new_person ";
		$result = $conn->query($sql);
                //return $result;
		if ($result->num_rows > 0) {
		    // output data of each row
                    
			$checker="1";
		    while($row = $result->fetch_assoc()) {
			echo $row["name"]."<br>".$row["person_phone"]."<br>".$row["password"]."<br>"."<br>";
				
		    }
                    
                  
		} else {
		    
		}

		//return "false";
		$conn->close();

?>