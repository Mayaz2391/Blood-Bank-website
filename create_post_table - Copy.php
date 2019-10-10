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
$sql = "CREATE TABLE POST (
post_id INT NOT NULL AUTO_INCREMENT,
seeker_phone VARCHAR(13) NOT NULL,
hospital_name VARCHAR(30) NOT NULL,
needed_blood VARCHAR(3) CHECK(blood = 'A+' OR blood = 'A-' OR blood = 'B+' OR blood = 'B-' OR blood = 'O+' OR blood = 'O-' OR blood = 'AB+' OR blood = 'AB-'),
last_date DATE,
PRIMARY KEY (post_id)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table post created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
