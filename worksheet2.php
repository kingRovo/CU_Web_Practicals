<?php
$distance = 45000;
if($distance>0 and $distance<=90) {
    $cost = 5.00;
}
elseif($distance>90 and $distance<=300) {
    $cost = 8.00;
}
elseif($distance>300 and $distance<9000) {
    $cost = 10.00;
}
elseif($distance>=9000) {
    $cost = 12.00;
}
echo "<h1>Cost : ", $cost."<h1>";


?>