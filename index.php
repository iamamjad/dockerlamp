<?php 

$conn = mysqli_connect("mysql", "root", ".root.", "docker_db");
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
 
$sql = "SELECT * FROM appusers";

$result = $conn->query($sql);

 
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
        echo $row['idAppUser'].'<br>'; 
        echo $row['email'].'<br>';
	}
} 
else {
	echo "0 results";
}
$conn->close();

?>
