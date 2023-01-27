<?php
function tab1()
{
?>
        <table style="border: 2px solid black;">
    <tr>
    <th>chatgpt</th>
    <th>ia</th>
    <th>Fromage</th>
  </tr>
  <tr>
    <td>Pomme</td>
    <td>Carotte</td>
    <td>plouf</td>
  </tr>
  <tr>
    <td>Banane</td>
    <td>Aubergine</td>
    <td>toto</td>
  </tr>
  </table>
  <?php
}
?>

<?php
function tab2($colone1,$colone2,$colone3)
{
?>
        <table style="border: 2px solid black;">
    <tr>
    <th><?=$colone1?></th>
    <th><?=$colone2?></th>
    <th><?=$colone3?></th>
  </tr>
  <tr>
    <td>tartine</td>
    <td>violon</td>
    <td>Greg</td>
  </tr>
  <tr>
    <td>frite</td>
    <td>titi</td>
    <td>Fefe</td>
  </tr>
  </table>
  <?php
}
?>

<?php

function tab3($array) {
  
    $sum = array_sum($array);
    $count = count($array);
    $average = $sum / $count;

    return $average;
}

?>

