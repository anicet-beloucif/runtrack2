<!DOCTYPE HTML>
<html>
<body>

<form action="index.php" method="post">
  <div>
    <label for="id">Identifiant de connexion</label>
    <input type ="text" class="button" name="id" id="id" >
  </div>
  <div>
    <label for="mdp">Mot de passe</label>
    <input type="text" class="button" id= "mdp" name="mdp" >
  </div>
  <div>
    <input type="submit">Se connecter</button>
  </div>
</form>

<?php

/*$j="John";
$a = strpos($_POST,$j);
$r="Rambo";
$b = strpos($_POST,$r);

if ($a && $b === true) echo "swag";*/

$a=$_POST["id"];
$b=$_POST["mdp"];
$j="John";
$r="Rambo";
$z="votre pire cauchemar";
$t="c'est pas ma guerre";

if ($a == $j)
echo $t;
else echo $z;

?>


</body>
</html>