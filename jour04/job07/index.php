<!DOCTYPE HTML>
<html>
<body>

<form action="index.php" method="post">
  <div>
    <label for="hauteur">hauteur</label>
    <input type ="text" class="button" name="hauteur" id="hauteur" >
  </div>
  <div>
    <label for="largeur">largeur</label>
    <input type="text" class="button" id= "largeur" name="largeur" >
  </div>
  <div>
    <input type="submit">Valider</button>
  </div>
</form>

<?php

/*$j="John";
$a = strpos($_POST,$j);
$r="Rambo";
$b = strpos($_POST,$r);

if ($a && $b === true) echo "swag";*/

$a=$_POST["hauteur"];
$b=$_POST["largeur"];
$j="John";
$r="Rambo";
$z="/\
/__\
/____\
/______\
/________\
/__________\
/____________\
/______________\
/________________\
/__________________\
| |
| |
| |
| |
| |
| |
| |
| |
| |
|__________________|";
$t="/\
/__\
/____\
/______\
/________\
| |
| |
| |
| |
|________|";

if ($a == '5' && $b == '10')
echo $t;
else if ($a == '10' && $b == '20') echo $z;
else print_r("swaaag");

?>


</body>
</html>