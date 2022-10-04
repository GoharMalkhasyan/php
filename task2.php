<?php

echo "<h1>Task_1</h1> <br>";
$arr = [];
for ($i = 0; $i <= rand(1, 20); $i ++) {
    array_push($arr, rand(1, 100));

}
echo "<pre>";
print_r($arr);
$arr = array_unique($arr);
rsort($arr);
$content = "<table border='1' style='width: 100px; height: auto; border-collapse: collapse;'>";
foreach ($arr as $key => $value) {
//    $content .= "<td>" . $key . "</td><td>" . $value . "</td>";
    $content .= "<tr><td> $key </td><td>  $value</td></tr>";
}
$content .= "</table>";
echo $content;




echo "<h1>Task_2</h1> <br>" ;
$array1 = ["a", "b","c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p",
    "q", "r", "s", "t", "u", "v", "w", "x", "u", "z", "A", "B", "C", "D", "E", "F", "G", "H",
    "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "U", "Z"];
$array2 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$length = $_POST["length"];
$select = $_POST["select"];
$array3 = array_merge($array1, $array2);
function createStr($length, $select, $array1, $array2, $array3)
{
    $string = [];
    if(!$length){
        echo "<h1>error</h1>";
    }
    if ($select == "only number") {
        $string = array_rand(array_flip($array2), $length);
    } elseif ($select == "only letter") {
        $string = array_rand(array_flip($array1), $length);
    } elseif ($select == "number and letter") {
        $string = array_rand(array_flip($array3), $length);
    } else {
        echo "invalid value";
    }
    echo implode('', $string);
}
createStr($length, $select, $array1, $array2, $array3);
?>

<div style='border: 1px solid gray; width: 250px; height: auto;'>
    <form action='index.php' method='POST'>
        <input type='number' name='length' placeholder='enter line length'><br><br>
        <label>The line in</label><br><br>
        <select name="select">
            <option>only letter</option>
            <option>only number</option>
            <option>number and letter</option>
        </select><br><br><br><br><br><br>
        <button type="submit">Send</button>
    </form>
</div>
<?php

echo "<h1>Task_3</h1> <br>" ;

abstract class Car
{
    public $name;
    public $year;
    public $color;
    public function __construct($name, $year, $color)
    {
        $this->name = $name;
        $this->year = $year;
        $this->color = $color;
    }
    abstract public function intro();
}


class Audi extends Car
{
    public function intro()
    {
        return "The care name is $this->name the year is $this->year the color is $this->color";
    }
}

class Volvo extends Car
{
    public function intro()
    {
        return "The care name is $this->name the year is $this->year the color is $this->color";
    }
}

$audi = new Audi("Audi", 2000, "red");
echo $audi->intro();
echo "<br>";

$volvo = new Volvo("Volvo", 2004, "blue");
echo $volvo->intro();
echo "<br>";

?>









