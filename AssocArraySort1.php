<!DOCTYPE html>
<html>
<body>
<?php
echo "<b>Steven Halla, CIS243</b><br><br>";

// Initial array
$courses = array(
    "CIS243" => "Web Development III: Introduction to PHP",
    "CIS245" => "Web Development V: Introduction to CSS",
    "CIS246" => "Web Development VI: JavaScript Frameworks"
);

// Sort values in ascending order
asort($courses);
echo "Sorted by values in ascending order:<br>";
foreach ($courses as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value . "<br>";
}
echo "<br>";

// Sort values in descending order
arsort($courses);
echo "Sorted by values in descending order:<br>";
foreach ($courses as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value . "<br>";
}
echo "<br>";

// Sort keys in ascending order
ksort($courses);
echo "Sorted by keys in ascending order:<br>";
foreach ($courses as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value . "<br>";
}
echo "<br>";

// Sort keys in descending order
krsort($courses);
echo "Sorted by keys in descending order:<br>";
foreach ($courses as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value . "<br>";
}
?>
</body>
</html>

