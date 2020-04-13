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
echo "Connected successfully"."<br>";

//SELECT VALUES

$sql = "SELECT id, Name, Sub1, Sub2, Sub3, Sub4, Sub5, Total, TRUNCATE(Percent,2) as per FROM scores";

if($result = $conn->query($sql)){
	if ($result->num_rows > 0)
	 {
		echo "<table>";
		echo "<tr>";
		echo "<th> id </th>";
		echo "<th>Name </th>";
		echo "<th>Sub1</th>";
		echo "<th>Sub2 </th>";
		echo "<th>Sub3 </th>";
		echo "<th>Sub4 </th>";
		echo "<th>Sub5 </th>";
		echo "<th>Total </th>";
		echo "<th>Percent</th>";
		echo "</tr>";

		while($row = $result->fetch_assoc())
		{
			echo "<tr>";
			echo "<td>" .$row["id"]."</td>";
			echo "<td>" .$row["Name"]."</td>";
			echo "<td>" .$row["Sub1"]."</td>";
			echo "<td>" .$row["Sub2"]."</td>";
			echo "<td>" .$row["Sub3"]."</td>";
			echo "<td>" .$row["Sub4"]."</td>";
			echo "<td>" .$row["Sub5"]."</td>";
			echo "<td>" .$row["Total"]."</td>";
			echo "<td>" .$row["per"]."%"."</td>";
			echo "</tr>";
		}
		echo "</table>"; 
        	$result->free(); 
	}
	 else 
	 { 
        	echo "No matching records are found."; 
    	 } 
}
else { 
    echo "ERROR: Could not able to execute $sql. " conn->error; 
} 
$conn->close();
?>
