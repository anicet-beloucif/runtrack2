<?php

function occurrences ($str,$char)
{$occu = substr_count($str,$char);
 return $occu;}

$str="eeeeeeeee";
$char="e";

 echo occurrences($str,$char)

?>