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
$a=count($_GET);
echo "nombre d'arguments GET : $a";

?>




</body>
</html>