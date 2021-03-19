<?php
$arr = array("Seeta"=>"31","Geeta"=>"41","Jeetu"=>"39","Ramesh"=>"40");
asort($arr);
echo "<h3>ascending order sort by value</h3>";
foreach($arr as $x => $x_value) {
    echo "<h4>" . $x . "   :   " . $x_value."</h4>";
    
  }
  echo "<h3>ascending order sort by Key</h3>";
  echo "<br>";
  ksort($arr);
  foreach($arr as $x => $x_value) {
      echo "<h4>" . $x . "   :   " . $x_value."</h4>";
     
    }
    echo "<h3>descending order sorting by Value</h3>";
    arsort($arr);
    foreach($arr as $x => $x_value) {
        echo "<h4>" . $x . "   :   " . $x_value."</h4>";
       
      }
      echo "<h3>descending order sorting by Key </h3>";
  krsort($arr);
  foreach($arr as $x => $x_value) {
      echo "<h4>" . $x . "   :   " . $x_value."</h4>";
     
    }
?>