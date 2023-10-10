<?php error_reporting(0); ?> 

<?php

$servername= "localhost";
$username="root";
$password="";
$dbname="trakingdatabase";

// CREATE CONNECTION 

$conn= new mysqli($servername,$username,$password,$dbname);

// CHEK CONNECTION 

if (!$conn){
    die("Connection faieled:".mysqli_connect_error());

}

// VARIABLE 

$N=$_POST['nom'];
$M=$_POST['email'];
$Me=$_POST['message'];


$sql="INSERT INTO`contactez-nous`(`Non`,`Mail`,`Message`) VALUES ('$N','$M','$Me')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  

  mysqli_close($conn);
  

?>