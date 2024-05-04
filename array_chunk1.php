<!DOCTYPE html>
<html>
<body>
<?php
$courses = array("CIS241", "CIS242", "CIS243", "CIS244", "CIS245", "CIS246");

echo "<h3>Original array:</h3>";
echo "<br>";
foreach($courses as $key => $value) {
    echo "Key=" . $key . ", Value=" . $value;
    echo "<br>";
}
echo "<br>";

echo "<h3>Array broken in chunks of 2:</h3>";
echo "<br>";
foreach(array_chunk($courses, 2) as $chunkKey => $chunk) {
    echo "Key=" . $chunkKey;
    echo "<br>";
    foreach($chunk as $key => $value) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;Key=" . $key . ", Value=" . $value;
        echo "<br>";
    }
}

echo "<br>";

echo "<h3>Array broken in chunks of 3:</h3>";
echo "<br>";
foreach(array_chunk($courses, 3) as $chunkKey => $chunk) {
    echo "Key=" . $chunkKey;
    echo "<br>";
    foreach($chunk as $key => $value) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;Key=" . $key . ", Value=" . $value;
        echo "<br>";
    }
}
?>
</body>
</html>
