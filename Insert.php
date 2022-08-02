<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DirectionControl";
$Direction = $_POST['Direction'];

//Set button value
if($Direction=="Front")
	{	 
	 echo "Front";
	}
	elseif($Direction=="Back")
	{
	 echo "Back";
	}
	elseif($Direction=="Right")
	{
	 echo "Right";
	}
	elseif($Direction=="Left")
	{
	 echo "Left";
	}
	elseif($Direction=="Stop")
	{
	 echo "Stop";
	}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Directions (Direction) VALUES ('$Direction')";

if ($conn->query($sql) === TRUE) {
  echo ".";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>