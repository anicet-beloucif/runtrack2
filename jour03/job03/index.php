<!DOCTYPE HTML>
<html>
<body>

<?php

$str = "I'm sorry Dave I'm afraid I can't do that";
preg_match_all('/[aouie]/i', $str, $sortie);
echo json_encode($sortie);
?>




</body>
</html>