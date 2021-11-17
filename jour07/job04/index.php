<?php

session_start();
setcookie('preno',$prenom);
if (in_array($_POST['prenom'], $prenom))
{echo swag;}





?>


<html> 
<form method="POST" action="index.php">
<input type="text" name="prenom" >
<button type="submit" name="connexion" >Entrer</button>
</html>