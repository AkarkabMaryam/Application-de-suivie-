
<?php error_reporting(0); ?> 


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="trakingdatabase";

$conn = new mysqli($servername, $username, $password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $Fn=$_POST['nom'];
  $Em=$_POST['mail'];
  $PAS=$_POST['pass1'];
  
//$sql="INSERT INTO namemail(	nom,mail) VALUES ('$Nom','$Mail') ";
$sql="INSERT INTO `sfr employee account creation`(`Fulname`, `Email`,`PASS`) VALUES ('$Fn','$Em','$PAS')";

if (mysqli_query($conn, $sql)) {
  echo "Account created successfully";

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);

?>