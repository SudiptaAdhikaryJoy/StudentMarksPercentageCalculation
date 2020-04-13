<?php
$servername = "localhost";
$username = "dbs";
$password = "12";
$db="student";


// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

//TABLE CREATION
$sql = "CREATE TABLE scores (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(25) NOT NULL,
Sub1 DOUBLE,Sub2 DOUBLE,Sub3 DOUBLE,Sub4 DOUBLE,Sub5 DOUBLE,
Total DOUBLE AS (Sub1+Sub2+Sub3+Sub4+Sub5),
Percent DOUBLE AS ((TOTAL/500)*100)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table scores created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
