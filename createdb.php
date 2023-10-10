<?php error_reporting(0); ?> 

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="mydb";

extract($_POST);

// Create connection


$conn = new mysqli($servername, $username, $password,$dbname);


// Check connection


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$Nom=$_POST['nom'];
$Mail=$_POST['mail'];


//$sql="INSERT INTO namemail(	nom,mail) VALUES ('$Nom','$Mail') ";
$sql="INSERT INTO `namemail`(`nom`, `mail`) VALUES ('$Nom','$Mail')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);


?>




