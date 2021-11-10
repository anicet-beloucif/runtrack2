<!DOCTYPE HTML>
<html>
<body>

<form action="index.php" method="get">
  <div>
    <label for="say">Quelle salutation voulez-vous adresser ?</label>
    <input name="say" id="say" value="Salut">
  </div>
  <div>
    <label for="to">À qui voulez‑vous l'adresser ?</label>
    <input name="to" value="Maman">
  </div>
  <div>
    <button>Envoyer mes salutations</button>
  </div>
</form>

<?php
$a= print_r($_GET["say"]);
echo $_GET["to"];
$a = array_search("Salut",$_GET);
$b = array_search("Maman", $_GET);


?>

<table>
  <tr>
      <th>Key</th>
      <th>Value</th> 
  </tr>
  <tr>
      <td><?php echo $a ?></td>
      <td><?php echo $_GET["say"]?></td> 
  </tr>
  <tr>
    <td><?php echo $b ?></td>
    <td><?php echo $_GET["to"]?></td>
  </tr>
</table>



</body>
</html>