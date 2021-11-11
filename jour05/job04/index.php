<?php


function calcule(int $a, $operation, int $b) 
{switch ($operation){
    case '+':
    $result=$a+$b;
    break;
    case '-':
    $result=$a-$b;
    break;
    case '*';
    $result=$a*$b;
    break;
    case '/';
    $result=$a/$b;
    break;
    case '%';
    $result=$a%$b;
    break;
}
return $result;
}
echo(calcule(1,'+',1));

?>