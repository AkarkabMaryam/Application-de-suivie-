
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
$F=$_POST['fname'];
$l=$_POST['lname'];
$m=$_POST['email'];
$dateDep=$_POST['Datedeb'];
$dateF=$_POST['Datefiii'];

$sql="INSERT INTO `demandecongé`(`Fname`, `Lname`, `Mail`, `DateDepart`, `DateFin`) VALUES ('$F','$l','$m','$dateDep','$dateF')";




if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  
  
  mysqli_close($conn);
  



?>