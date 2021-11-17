<?php

session_start();

if (!isset($_POST['init']))
    {$_SESSION['a'] = array();}

if (empty($_POST['init']))
{$init=$_POST['init'];}

array_push($_SESSION['a'], $_POST['init']);

if (!empty($_POST['init']))
{print_r($_SESSION['a']);}

if (isset($_POST['reset']))
{unset($_SESSION['a']);
    $_SESSION['a'] = array();}







?>


<html> 
<form method="POST" action="index.php">
<input type="text" name="init" value="0">
<button type="submit" name="valider" >Entrer</button>
<button type="submit" name="reset" >Reset</button>
<?php print_r ($_SESSION['a']); ?>
</html>