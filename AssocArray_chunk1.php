<!DOCTYPE html>
<html>
<body>
<?php
$courses = array(
    "CIS241" => "Web Development I",
    "CIS242" => "Web Development II: JavaScript and jQuery",
    "CIS243" => "Web Development III: Introduction to PHP",
    "CIS244" => "Web Development IV: Intro to Joomla! and SEO",
    "CIS245" => "Web Development V: Introduction to CSS",
    "CIS246" => "Web Development VI: JavaScript Frameworks"
);

echo "<h3>Original Array</h3>";
echo "<br>";
foreach($courses as $key => $value) {
    echo "Key=" . $key . ", Value=" . $value;
    echo "<br>";
}
echo "<br>";

echo "<h3>Array in chunks of 2</h3>";
echo "<br>";
foreach(array_chunk($courses, 2, true) as $chunkKey => $chunk) {
    echo "Key=" . $chunkKey;
    echo "<br>";
    foreach($chunk as $key => $value) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;Key=" . $key . ", Value=" . $value;
        echo "<br>";
    }
}

echo "<br>";

echo "<h3>Array in chunks of 3</h3>";
echo "<br>";
foreach(array_chunk($courses, 3, true) as $chunkKey => $chunk) {
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
