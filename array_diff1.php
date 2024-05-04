<!DOCTYPE html>
<html>
<body>
<?php
$a1 = array("a" => "apple", "b" => "banana", "g" => "grape", "o" => "orange");
$a2 = array("b" => "banana", "g" => "grape");
$result = array_diff($a1, $a2);

echo "<br>";
echo "\$a1 array:<br>";
foreach($a1 as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo "<br>";
echo "\$a2 array:<br>";
foreach($a2 as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo "<br>";
echo "\$a1 and \$a2 array difference:<br>";
foreach($result as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo "<br>";
?>
</body>
</html>
