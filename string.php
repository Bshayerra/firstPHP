<?php
$string = "Bashayr Rakan";
echo $string;
echo "<br>";
echo strtolower($string);
echo strtoupper($string);
echo strlen($string);
echo $string[0];

echo $string[3] = "G";
echo $string;

echo str_replace("Rakan", "R", $string);
echo substr($string, 3, 2);

?>