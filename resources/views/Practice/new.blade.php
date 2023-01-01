
<?php
define("cars",[
    "bmw",
    'volvo',
    'toyoto'
]);
echo cars[2];
 
echo "<br>";

define("bhumi","welcome to enjay");

function hello(){
    echo bhumi;
}
hello();

echo "<br>";

$week = '4';
switch ($week) {
    case '1':
        echo "this is first week";
        break;
    case '2':
        echo "this is 2nd week";
        break;
    case '3':
        echo "this is 3rd week";
        break;
    case '4':
        echo "this is 4th week";
        break;
    
    default:
        echo "enter valid number month";
        break;
}

echo "<br>";

function Family($fname,$lname='patel'){
    echo "my name is $fname $lname <br>";
}
family('bhumi','patel');
family('taksil');
family('mj');

echo "<br>";

// class and objects

class calculation{
    public $a,$b,$c;
    function sum(){
        $this->c = $this->a + $this->b ;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b ;
        return $this->c;
    }
}
$ob = new calculation();
$ob->a = 5;
$ob->b = 10;
echo $ob->sum();
echo "<br>";
echo $ob->sub();
echo "<br>";
//constractor
class person {
    public $name;

        function __Constructor($name){
            $this->name = $name;
        }
        function show(){
            return $this->name;
        }
    }
    $p = new person();
    $p->name = "Bhumi";
    echo "my name is ".$p->show();
echo "<br>";

?>