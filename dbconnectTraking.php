<!DOCTYPE html>
<html lang="en">
<?php error_reporting(0); ?> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>
<body>


<?php 
$servername= "localhost";
$username="root";
$password="";
$dbname="trakingdatabase";




extract($_POST);

// CREATE CONNECTION 

$conn= new mysqli($servername,$username,$password,$dbname);

// CHEK CONNECTION 

if (!$conn){
    die("Connection faieled:".mysqli_connect_error());
}

$F=$_POST['fname'];
$l=$_POST['lname'];
$m=$_POST['email'];
$dateD=$_POST['Datedemma'];
$CatG=$_POST['catG1'];
$CatGT=$_POST['catG2'];
$P=$_POST['p1'];

//$sql="INSERT INTO user task information(Fname,Lname,mail,Datedemarrage,CategorieGroup,Categorie Tache,Periode) VALUES ('$F','$l','$m','$dateD','$CatG','$CatGT','$P') ";

$sql="INSERT INTO `user task information`(`Fname`, `Lname`, `mail`, `Datedemarrage`, `CategorieGroup`, `Categorie Tache`, `Periode`) VALUES ('$F','$l','$m','$dateD','$CatG','$CatGT','$P')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);



?>

</body>



</html>






























