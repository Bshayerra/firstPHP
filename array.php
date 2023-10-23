<form action="array.php" method="POST">
<input type="text" name="xName">
<input type="submit">

</form>
<?php
$xName = $_GET["xName"];

//Associative array
$F = ["Designer"=>"Ahamas", "Programmer"=>"Fahad", "Gamer"=>"Anas"];
echo $F ["$xName"];


?>