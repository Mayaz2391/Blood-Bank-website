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
$sql = "CREATE TABLE ERROR_TABLE (
    ID INT NOT NULL AUTO_INCREMENT,
    thumb DOUBLE(20,14) NOT NULL,
    height DOUBLE(20,14) NOT NULL,
    width DOUBLE(20,14) NOT NULL,
    thumb_rang DOUBLE(20,14) NOT NULL,
    error_rate DOUBLE(20,14) NOT NULL,
    key_density DOUBLE(20,14) NOT NULL,
    key_stroke DOUBLE(20,14) NOT NULL,
    PRIMARY KEY (ID)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table person created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
