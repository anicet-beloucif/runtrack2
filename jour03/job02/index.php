<!DOCTYPE HTML>
<html>
<body>

<?php

$str='Tous ces instants seront
perdus dans le temps comme les larmes sous la pluie.';

$encrabe = $str ;

for($i = 1; $i < strlen($str); $i += 2) {
    $encrabe[$i] = ' ';
  }
  echo $encrabe;



?>




</body>
</html>