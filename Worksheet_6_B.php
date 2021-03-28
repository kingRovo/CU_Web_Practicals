<!-- b)	Write a PHP class that sorts an ordered integer array with the help of sort() function. Sample array : array(11, -2, 4, 35, 0, 8, -9)
Output : Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 ) -->

<?php
class ArrShort{
    function __construct($Myarray){
        echo "<h3>Array before Sorting <br>";
        print_r($Myarray);
        sort($Myarray);
        echo "<br><br>Array After Sorting <br>";
        print_r($Myarray);
        
    }
}
$Myarray = array(12,5,7,89,-1,10,-10,);
$ob = new ArrShort($Myarray);


?>