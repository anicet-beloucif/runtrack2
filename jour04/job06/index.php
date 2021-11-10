<!DOCTYPE HTML>
<html>
<body>

<form action="index.php" method="GET">
  <div>
    <label for="chiffre">Nombre à checker</label>
    <input type ="text" class="button" name="chiffre" id="chiffre" value="0">
  </div>
  <div>
    <input type="submit">Valider le nombre</button>
  </div>
</form>

<?php

$a=$_GET["chiffre"];

if ($a % 2 === 0 && $a>0)
print_r ("nombre pair");
else print_r ("nombre impair");

?>


</body>
</html>