<!DOCTYPE HTML>
<html>
<body>


<?php
$jour = NULL;
function bonjour($jour) {
    if ($jour == true) {
                echo "Bonjour";}
    if($jour == false) {
                echo "Bonsoir";}
            }

$jour=false;
bonjour($jour);
$jour=true;
bonjour($jour);




?>





</body>
</html>