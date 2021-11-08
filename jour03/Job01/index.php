<!DOCTYPE HTML>
<html>
<body>

<?php

$tableau = [
0 => "200",
1 => "204",
2 => "173",
3 => "98",
4 => "171",
5 => "404",
6 => "459",
];
print_r ($tableau);

for ($i=0;$i<count($tableau);++$i)
if ($i%2 == 1)
    echo "$tableau[$i] est impair <br/>";
   else
    echo "$tableau[$i] est pair <br/>";



?>




</body>
</html>