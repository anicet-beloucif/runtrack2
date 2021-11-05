<!DOCTYPE HTML>
<html>
<body>

<?php

$x="0"; $b="&nbsp";
while ($x<=100) { 
if ($x>="0" && $x<="20") {echo "<i>$x</i> <br/>";}
elseif ($x=="42") {echo "LaPlateforme_ <br/>";}
elseif ($x>="25" && $x<=50 ) {echo "<u>$x</u> <br/>" ;}


else {echo $x . "<br/>";};
$x +=1 ;
}




?>




</body>
</html>