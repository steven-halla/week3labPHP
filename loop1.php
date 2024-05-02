<?php
$languages = array("PHP", "JavaScript", "Python");
$courses = array("CIS243", "CIS246", "CIS245");
$sentence = array("Steven Halla", "CIS243", "Week3");

//$arrlength = count($languages);
//for($x = 0; $x < $arrlength; $x++) {
//    echo $languages[$x];
//    echo "<br>";
//}

echo  $sentence[0] . ", " . $sentence[1] . " , " .
    $sentence[2] . "." ;
echo "<br>";



$arrlengthcourses = count($courses);
for($x = 0; $x < $arrlengthcourses; $x++) {
    echo $courses[$x];
    echo "<br>";
}



?>
