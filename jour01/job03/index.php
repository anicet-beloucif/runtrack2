<?php
$bool = true ;
$int1 = 1; 
$str1 = "En crabe mon pote";
$float1 = 3.14 ;
?>
<br>
<html>

<br>

<table> 
    <thead>
        <tr>
        <th>type</th>
        <th>nom</th>
        <th>valeur</th>
    </tr>
</thead>
<tbody>
<tr>
    <td>String</td>
    <td>$str1</td>   
    <td><?php echo ($str1) ?></td>   
</tr>
<tr>
    <td>Int </td>
    <td>$int1</td>
    <td><?php echo($int1) ?></td>
</tr>
<tr>
    <td>Float </td>
    <td>$float1 </td>
    <td><?php echo($float1)  ?></td>

</tr>
<tr>
    <td>bool </td>
    <td>$bool</td>
    <td><?php echo($bool) ?></td>

</tr>



</tbody>




</table>



</html>

<style>
table {border-style:solid;
        border-color:black;
        border-collapse:collapse;}
td{border-style:solid;
        border-color:black;}
</style>    