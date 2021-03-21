//WorkSheet 4

<?php
$clr = array('white','green','red','blue','black');
echo "<pre><h2>The memory of that scene for me is like a frame of film forever 
frozen at that moment: the ".$clr[2]." carpet, 
the ".$clr[1]." lawn, the ".$clr[0]." house, the leaden sky. 
The new president and his first lady. - MAXI</h2><pre>";

$subject = array("Programming in C"=>"95","Math"=>"90","Java"=>"96","Cloud Computing"=>"93","Operating System"=>"98");

echo "<br><br><br><h1>Subject Marks</h1>";
foreach($subject as $d =>$value){
    echo "<h2>".$d."  :  ".$value."</h2>";
    
}
?>
