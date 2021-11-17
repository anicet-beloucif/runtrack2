<?php
session_start();

if (isset($_POST['init']))
{session_unset();}


if(!isset($_SESSION['nbvisites'])){
    $_SESSION['nbvisites'] = 0; 
}
else{
    $_SESSION['nbvisites'] ++ ;
}
echo "Vous avez visité cette page ".$_SESSION['nbvisites']." fois.";
?>


<html> 
<form method="POST" action="index.php">>
<button type="submit" name="init" >Réinitialiser</button>

</html>