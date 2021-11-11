<?php
function leetspeak($str)
{$normal = array("A","B","E","G","L","S","T");
$leet = array("4","8","3","6","1","5","7");
$final=str_ireplace($normal, $leet, $str);
echo $final;}

leetspeak ("SWAGswag")




?>