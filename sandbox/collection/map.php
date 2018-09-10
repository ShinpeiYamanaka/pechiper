<?php
function cube($n)
{
    return($n * $n * $n);
}

$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
print_r($b);
echo "</br>";
$c = $a;
print_r($c);
echo "</br>";

echo "--------------------------------";
echo "</br>";
$a = [
    [2, 7, 4, 3, 1, 5, 6],
    ['c', 'a', 'b', 'd'],
];

$x = array_map('sort', $a);
var_dump($x);

echo "</br>";
echo "</br>";

$x = [];
foreach ($a as $i => $v) {
    sort($v);
    $x[$i] = $v;
}

var_dump($x);

echo "</br>";
echo "</br>";

$x = $a;

array_walk($x, function(&$v) { sort($v); });
var_dump($x);

echo "</br>";

echo "--------------------------------";
echo "</br>";

array_push($a, array("test1"=>"val1"));
$a["txt"] = "val2";
print_r($a);

$object = array("c1"=>"val1","c2"=>"val2","c3"=>"val3");
$objects;
for ($i=0; $i < 10; $i++){
    $objects[$i] = $object;
};
echo "</br>";
$object["c1"] = "xxx";
$objects[2] = $object;
echo "<pre>";
print_r($objects);
echo "</pre>";

?>