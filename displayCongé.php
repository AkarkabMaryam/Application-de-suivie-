<?php

//storing database details in variables.
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "trakingdatabase";

    //creating connection to database
    $con = mysqli_connect($hostname, $username, $password, $dbname);
    //checking if connection is working or not
    if(!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
    else 
    {
        echo "Successfully Connected! <br>";
        
    }

  
    //Output Form Entries from the Database
    $sql = "SELECT * FROM demandecongé";
    //fire query
    $result = mysqli_query($con, $sql);
    
    if(mysqli_num_rows($result) > 0)
    {
     while($row = mysqli_fetch_assoc($result)){
       echo "Fname: " . $row["Fname"]. " -Lname: " . $row["Lname"]. " Mail: ". $row["Mail"]. " DateDepart: ". $row["DateDepart"] . " -DateFin: " . $row["DateFin"]."<br>";
    }
    }
    else
    {
      echo "0 results";
    }
 ?>

 
