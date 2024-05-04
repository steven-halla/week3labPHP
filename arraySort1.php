<!DOCTYPE html>
<html>
<body>
<?php
echo "<b>Steven Halla, CIS243</b><br><br>";
$courses = array("CIS243", "CIS246", "CIS245");

rsort($courses);

$clength = count($courses);

for ($x = 0; $x < $clength; $x++) {
    echo $courses[$x];
    echo "<br>";
}
?>
</body>
</html>
