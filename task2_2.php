<?php
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




