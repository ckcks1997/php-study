<?php
#declare(strict_types=1);

$x=1;
$y= 5;
# global, local, static
function myTest() {
    global $x, $y;
    $y = $x + $y;
}

function myTest3() {
    global $x; #글로벌 객체를 쓸때는 선언을 먼저 해야 사용할 수 있다.
    $x=1;
}
myTest();
echo $y."<br>"; // outputs 6

myTest3();
echo $x." ".$y."<br>"; // outputs 1 6

function myTest4() {
    static $x;

    $x=$x+1;

    echo $x."<br>";
}
myTest4();
myTest4();
myTest4();
myTest4();

#Array
$cars = array("Volvo","BMW","Toyota");

#클래스 및 객체 생성/사용
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();

echo "<br>";
echo "<br>";
echo "<br>";

# String 관련 기능

echo strlen("Hello world!")."<br>";
echo strrev("Hello world!"); // outputs !dlrow olleH
echo strpos("Hello world!", "world"); // outputs 6
echo str_replace("world", "Dolly", "Hello world!")."<br>"."<br>"."<br>"; // outputs Hello Dolly!

#Casting

$x = "1234";
$x_cast = (int)$x;

#math

##minmax
echo(min(0, 150, 30, 20, -8, -200))."<br>";  // returns -200
echo(max(0, 150, 30, 20, -8, -200))."<br>";  // returns 150

##absolute
echo(abs(-6.7))."<br>";  // returns 6.7

##random
echo(rand())."<br>";
echo(rand(10,100))."<br>";//경계값 포함 랜덤함수 생성



#Constant define(name, value, case-insensitive)
define("GREETING", "Welcome to W3Schools.com!");
const GREETING2 = "welcome BLABLA"."<br>";
const ANIMALS = array(
    'dog',
    'cat',
    'bird'
);
echo GREETING."<br>";
echo GREETING2."<br>";
foreach(ANIMALS as $value){
    echo $value."<br>";
}
echo  "<br>";

#if-else
date_default_timezone_set('Asia/Seoul');
$t = date("H");
$t2 = date("h:i:s");
echo $t2."<br>";

if ($t < "10") {
    echo "Have a good morning!"."<br>";
} elseif ($t < "20") {
    echo "Have a good day!"."<br>";
} else {
    echo "Have a good night!"."<br>";
}

#Loop
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
    echo "$x = $val<br>";
}


#Functions
//PHP is a Loosely Typed Language
function familyName($fname) {
    echo "$fname Refsnes.<br>";
}
familyName("Jani");

/*
 *
 * In PHP 7, type declarations were added.
 * This gives us an option to specify the expected data type when declaring a function,
 * and by adding the strict declaration,
 * it will throw a "Fatal Error" if the data type mismatches.
 *
 * */

function addNumbers( $a,  $b) {
    return (int)$a + (int)$b;
}
//echo addNumbers(5, "22sdad");  error!
//echo addNumbers(5, "3일")."<br>"; //declare(strict_types=1); 비 선언시 에러는 발생하나 8로 반환됨
echo addNumbers(5, 3)."<br>";

#true/false
$a = 123;
echo gettype($a) === "integer"."<br>";
echo 0===null;

echo "<br>";
#reference
echo "reference"."<br>";
echo "num(2)에 숫자 더하기"."<br>";
function add_five(&$value) {
    $value += 5;
}
function add_five2($value) {
    $value += 5;
}
$num = 2;
add_five($num);
echo "reference(&):".$num."<br>";
add_five2($num);
echo "not reference:".$num."<br>"."<br>";


#Arrays
echo "Array"."<br>";
## 1. index array
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "."."<br>";

#2. Associative Array
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old."."<br>";

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

#3.Two-dimensional Arrays
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);
for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}

#4. Sorting Arrays

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
rsort($cars); //반대로 정렬

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

##Sort Array (Ascending Order), According to Value - asort()
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

##According to Key - ksort()
ksort($age);
##Descending Order
arsort($age);


echo ord("A");




