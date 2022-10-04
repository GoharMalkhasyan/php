<?php

echo "<h1>task_1</h1> <br>";
$color1 = ['white', 'green', 'red', 'blue', 'black'];
echo "The memory of that scene for me is like a frame
 of film forever frozen at that moment: the $color1[2] carpet,
  the $color1[1] lawn, the $color1[0] house, the leaden sky. 
  The new president and his first lady. - Richard M. Nixon";
echo "<br> <br> <br> <br> <br>";


echo "<h1>task_2</h1> <br>";
$color2 = ['white', 'green', 'red'];

foreach ($color2 as $color) {
    echo $color . ', ';
}

echo implode(', ', $color2);//returns string from the elements an array
$content = '<ul>';
foreach ($color2 as $color) {
    echo $content .= '<li>' . $color . '</li>';
}
echo $content .= '</ul>';
echo "
    <ul>
        <li>$color2[0]</li>
        <li>$color2[1]</li>
        <li>$color2[2]</li>
    </ul>";
echo "<br> <br> <br> <br> <br>";


echo "<h1>task_3</h1> <br>";
$ceu = ["Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw"];

asort($ceu);
foreach($ceu as $x => $x_value) {
    echo "The capital of  " . $x . "  is  " . $x_value;
    echo "<br>";
}


echo "<h1>task_4</h1> <br>";
$x = [1, 2, 3, 4, 5];
unset($x[1]);
var_dump($x);
$y = array_values($x);
var_dump($y);

echo "<h1>task_5</h1> <br>";
$color5 = [4 => 'white', 6 => 'green', 11=> 'red'];
echo "The result  is " . $color5[4] . "<br>";
echo array_shift($color5) . "<br>"; // return the first element of array
echo array_pop($color5) . "<br>"; // return the last elemant of array



echo "<h1>task_6</h1> <br>";
$obj = '{
    "Title": "The Cuckoos Calling",
    "Author": "Robert Galbraith",
    "Detail": {
        "Publisher": "Little Brown"
        }
}';
$obj1 = json_decode($obj, true);
foreach($obj1 as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $key1 => $val) {
            echo  $key1 . " => " . $val . "<br>";
        }
    } else {
        echo $key . " => " . $value . "<br>";
    }


}

echo "<h1>task_7</h1> <br>";
$arr = [1, 2, 3, 4];
$arr1 = [1];
array_splice($arr, 3, 0, '$');
echo '<pre>';
print_r($arr);



echo "<h1>task_8</h1> <br>";
$array = ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"] ;
asort($array);
echo "a <br>";
foreach($array as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
ksort($array);// by key
echo "b <br>";
foreach($array as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo arsort($array);// by value
echo "c <br>";
foreach($array as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
krsort($array);
echo "d <br>";
foreach($array as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}


echo "<h1>task_9</h1> <br>";
$temperature = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
                73, 68, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$sum = array_sum($temperature);
$count = count($temperature);
echo "Average Temperature is  " . $Average = $sum / $count . "<br>";

sort($temperature);
echo "List of seven lowest temperatures <br>";
for($i = 0; $i <= 4; $i ++){
     echo $temperature[$i] . "    <br>";
}

rsort($temperature);
echo "List of seven highest temperature <br>";
for($i = 0; $i <= 4; $i ++){
    echo $temperature[$i] . "   <br>";
}


echo "<h1>task_11</h1> <br>";
$array1 = [ [77, 87], [23, 45]];
$array2 = ["w3resource", "com"];
foreach ($array1 as $key => &$arr1_1) {
    array_push($arr1_1, $array2[$key]);
}
echo '<pre>';
print_r($array1);




echo "<h1>task_12</h1> <br>";
function to_uppercase(){
    $Color12 = ['A' => 'Blue', 'B' => 'Green', 'c' => 'Red'];
    foreach ($Color12 as $x => $x_value){
        $x_value =  strtoupper($x_value);
       echo($x . " => " . $x_value . " , ");
    }
    echo "<br>";
}
to_uppercase();

function to_lowercase(){
    $Color12 = ['A' => 'Blue', 'B' => 'Green', 'c' => 'Red'];
    foreach ($Color12 as $x => $x_value){
        $x_value =  strtolower($x_value);
        echo($x . "=>" . $x_value . " , ");
    }
    echo "<br>";

}
to_lowercase();



echo "<h1>task_13</h1> <br>";
$str = "HEllO world";
//all leters to lowercase
echo strtolower($str) . "<br>";
//all leters to uppercase
echo strtoupper($str) . "<br>";
//first character uppercase
strtolower($str);
echo ucfirst($str) . "<br>";
//
echo ucwords($str);



echo "<h1>task_14</h1> <br>";
$string = 'The quick brown fox jumps over the lazy dog.';
if (strpos($string,'The') !== false)
{
    echo 'The specific word is present.';
}
else
{
    echo 'The specific word is not present.';
}


echo "<h1>task_15</h1> <br>";
$str15 = 'www.example.com/public_html/index.php';
echo substr($str15, 28, 36) . "<br>";
$norarray = explode('/', $str15);
print_r($norarray[2]);


echo "<h1>task_16</h1> <br>";
$str16 =  'rayy@example.com';
echo substr($str16, 0, 3) . "<br>";



echo "<h1>task_17</h1> <br>";
echo substr($str16, strlen($str16) - 3, strlen($str16)) . "<br>";




echo "<h1>task_18</h1> <br>";
$str18_1 = 'the quick brown fox jumps over the lazy dog.';
$str18_2 = "/the/";
echo preg_replace($str18_2, 'That', $str18_1);
str_replace('the', 'That', $str18_1);


echo "<h1>task_19</h1> <br>";
$str19_1 = 'football';
$str19_2 = 'footboll';
$dif =  strspn($str19_1 , $str19_2);
echo "First difference between two strings at position  " . $dif . ":  " . $str19_1[$dif] . "  vs  " . $str19_2[$dif];

echo "<h1>task_20</h1> <br>";
$str_20 = '2,543.12';
echo str_replace(",","",$str_20);



















