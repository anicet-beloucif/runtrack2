<!DOCTYPE HTML>
<html>
<body>


<form method="post" action="index.php">
<label for="name">"Zone d'encart de texte"</label>
<input type="text" id="str" name="str">

<label for="cars">Fonctions</label>
<select name="cars" id="cars">
      <option id="gras" value="gras">Gras</option> 
      <option id="cesar"value="Cesar" >Cesar</option>      
      <option id="plaeforme"value="plateforme">Plateforme</option>       
</select>
<input type="submit" value="click" name="submit">
</form>

<?php
$str=$_POST["str"];
function gras($str){
    $str="<b>$str</b>";
    echo $str;}

function cesar($str,$nombre){
    $str=substr_replace($str,$str,$nombre); /* $nombre=2 par défaut */ 
    echo $str;}

function plateforme($str,$end){
    $a=str_ends_with($str,$end);
    substr_replace($str,$str."_");
}




?>

</body>
</html>