
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>followed</title>
</head>
<body>
   


<form method="post" action="dbconnectTraking.php">
 <fieldset>
  <legend>create a new tache</legend>

  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>

  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>

  <label for="Datedemmarage">DateDemarrage Effective:</label>
  <input type="date" id="Dated" name="Datedemma">

  <label for="CategorieG">CategorieGroup Tache:</label>
  
<select name="catG1" id="cattG1">
  <option value="RABALE ">RABALE</option>
  <option value="calcule de charge COMAC">calcule de charge COMAC</option>
  <option value="Auiguillage">Auiguillage</option>
  <option value="plan GC">plan GC</option>
  <option value="NETGEO">NETGEO</option>
  <option value="APD GC">APD GC</option>
  <option value="TFX">TFX</option>
  <option value="PV DU RECEPTION">PV DU RECEPTION</option>
  <option value="ORANGE">ORANGE</option>
  <option value="APD Poteaux">APD Poteaux</option>
  <option value="Assistance projet">Assistance projet</option>
  <option value="Instruction ENEDIS(IPS)">Instruction ENEDIS(IPS)</option>
</select>


<label for="CategorieG">Categorie Tache:</label>
<select name="catG2" id="cattG2">
  <option value="préparation des donnés d'entrés">préparation des donnés d'entrés</option>
  <option value="vérification des retour terrain ">vérification des retour terrain</option>
  <option value="Réalisation RBAL">Réalisation RBAL</option>
  <option value="Control RBAL">Control RBAL</option>  <Br></Br>
</select>

<Br></Br>

<label for="P">Periode:</label>

<select name="p1" id="pp1">
  <option value="matin">matin</option>
  <option value="aprés-midi">aprés-midi</option>
  <option value="soir">soir</option>
 
</select>





  <input type="submit" value="Submit" name="env">
  <input type="reset" value="Cancel">
 </fieldset>
</form>






</body>
</html>













<?php 
$servename="localhost";
$username="root";
$password="";
$dbname="trakingdatabase";



?>