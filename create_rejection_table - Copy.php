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
$sql = "CREATE TABLE REJECTION (
rejection_id INT NOT NULL AUTO_INCREMENT,
rejector_phone VARCHAR(13) NOT NULL,
post_id INT NOT NULL,
PRIMARY KEY (rejection_id)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table rejection created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
