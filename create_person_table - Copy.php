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
$sql = "CREATE TABLE PERSON (
name VARCHAR(30) NOT NULL,
address VARCHAR(30) NOT NULL,
city VARCHAR(30) NOT NULL,
blood VARCHAR(3) CHECK(blood = 'A+' OR blood = 'A-' OR blood = 'B+' OR blood = 'B-' OR blood = 'O+' OR blood = 'O-' OR blood = 'AB+' OR blood = 'AB-'),
email VARCHAR(50) UNIQUE,
person_phone VARCHAR(13),
password VARCHAR(50),
last_donation DATE,
gender VARCHAR(8),
PRIMARY KEY (person_phone)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table person created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
