<?php
function add($x, $y){
    return $x + $y;
}
function hello($x){
     $user = $x;
     if($user ==="Nour"){
        echo "Hello World" . $user;
     }else{
        echo "Bye" . $user;
     }

}

hello("Noha");
echo "<br>";
hello("Ray");

echo"<br>";
echo add(23,5);
echo"<br>";
echo add(4,0);

?>

