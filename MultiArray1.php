<!DOCTYPE html>
<html>
<body>
<?php

$courses = array(
    array("CIS243", "Web Development III: Introduction to PHP", 5),
    array("CIS245", "Web Development V: Introduction to CSS", 5),
    array("CIS246", "Web Dev VI: JavaScript Frameworks", 5)
);

echo $courses[0][0] . ": Title: " . $courses[0][1] . ", Credits: " . $courses[0][2] . ".<br>";
echo $courses[1][0] . ": Title: " . $courses[1][1] . ", Credits: " . $courses[1][2] . ".<br>";
echo $courses[2][0] . ": Title: " . $courses[2][1] . ", Credits: " . $courses[2][2] . ".<br>";
?>
</body>
</html>
