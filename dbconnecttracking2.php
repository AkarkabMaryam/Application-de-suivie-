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
$dateD=$_POST['Datedemma'];
$CatG=$_POST['catG1'];
$CatGT=$_POST['catG2'];
$P=$_POST['p1'];



$sql="INSERT INTO user task information(Fname,Lname,mail,Datedemarrage,CategorieGroup,Categorie Tache,Periode) VALUES ('$F','$l','$m','$dateD','$CatG','$CatGT','$P') ";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  
  
  mysqli_close($conn);
  
?>