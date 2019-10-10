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
$sql = "CREATE TABLE MESSAGE (
message_id INT NOT NULL AUTO_INCREMENT,
sender_phone VARCHAR(13) NOT NULL,
receiver_phone VARCHAR(13) NOT NULL,
message VARCHAR(100) NOT NULL,
PRIMARY KEY (message_id)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table message created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
