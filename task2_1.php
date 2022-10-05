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

    $content .= "<tr><td> $key </td><td>  $value</td></tr>";
}
$content .= "</table>";
echo $content;
