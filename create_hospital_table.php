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

// sql to create table
$sql = "CREATE TABLE HOSPITAL (
hospital_name VARCHAR(30) NOT NULL,
hospital_address VARCHAR(30) NOT NULL,
hospital_city VARCHAR(30) NOT NULL,
PRIMARY KEY (hospital_name)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table hospital created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
