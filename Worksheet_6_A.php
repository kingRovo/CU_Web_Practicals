<!-- a)	Write a PHP Calculator class which will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request. For example :
$mycalc = new MyCalculator( 12, 6);
echo $mycalc- > add(); // Displays 18
echo $mycalc- > multiply(); // Displays 72  -->

<?php

class Calculator{

    public $num1,$num2;

    function __construct($num1,$num2){
        $this->num1 = $num1;
        $this->num2 = $num2;

        echo "<h3>First Number : $num1 &nbsp;&nbsp;&nbsp;&nbsp; Secound Number : $num2 <br><br>";

    }

    function add(){
        $rs =   $this->num1+$this->num2;
        echo"Addition : $rs <br>";

    }
    function sub(){
        $rs =   $this->num1-$this->num2;
        echo"Subtraction : $rs <br>";

    }
    function Multi(){
   
        $rs =   $this->num1*$this->num2;
        echo"Multiplication : $rs <br>";

    }
    function div(){
 
        $rs =   $this->num1/$this->num2;
        echo"Division : $rs <br></h3>";

    }
    
}
$ob = new Calculator(30,5);
$ob->add();
$ob->sub();
$ob->Multi();
$ob->div();
?>