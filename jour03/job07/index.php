<!DOCTYPE HTML>
<html>
<body>

<?php
$str="Certaines choses changent, et d'autres
ne changeront jamais";
$nstr = substr($str, 1);
$firstletter = substr ($str,0,-58);
$nnstr = substr_replace($nstr, $firstletter, 58);
echo $nnstr;
?>




</body>
</html>