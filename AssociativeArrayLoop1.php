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

foreach ($courses as $code => $title) {
    echo "Key=$code, Value=$title<br>";
}
?>
</body>
</html>

