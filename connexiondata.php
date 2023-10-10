<?php
include 'Navbar.php';

?>

<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>connexion</title>

<style>
form.form-example {
  display: table;
}

div.form-example {
  display: table-row;
}

label,
input {
  display: table-cell;
  margin-bottom: 10px;
}

label {
  padding-right: 10px;
}


</style>


</head>
<body>
<center>
  <br>  <br>  <br> <br> <br> 
<form method="post" action="createdb.php" class="form-example">
  <div class="form-example">

    <label for="name">Enter your name: </label>
    <input type="text" name="nom" id="name" required />

  </div>

  <div class="form-example">

    <label for="email">Enter your email: </label>
    <input type="email" name="mail" id="email" required />

  </div>

  <div class="form-example">
    <input type="submit" value="Subscribe!" name="envoyer" />
    <input type="reset" value="cancel" name="envoyer2" />


  </div>
  
</form>
</center>
</body>



</html>