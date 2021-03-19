<?php
function unique_names($arr1,$arr2){
    $c = array_merge($arr1,$arr2);
    print_r(array_unique($c));

}
$arr1 = array('Vikram', 'Updesh', 'Ram','Geeta','Ram');
$arr2 = array('Updesh','Raj','Ram','Raman','Krishna');
unique_names($arr1,$arr2);

?>