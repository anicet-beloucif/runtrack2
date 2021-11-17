<?php
session_start();
$test="1";

if (isset($_POST['init']))
{$_COOKIE["Testcookie"] = 0;}


if(!isset($_COOKIE["Testcookie"])){
    $_COOKIE["Testcookie"] = 0;
    setcookie("Testcookie", $test); 
}
else{
   $test = ++ $_COOKIE["Testcookie"] ;
   setcookie("Testcookie", $test);
}
echo "Vous avez visité cette page ".$_COOKIE['Testcookie']." fois.";
?>


<html> 
<form method="POST" action="index.php">>
<button type="submit" name="init" >Réinitialiser</button>

</html>