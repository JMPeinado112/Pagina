<?php
echo "<!DOCTYPE html>
<html>
<body>";
echo "<h1>hola mundo!</h1>";
$x = 5; //$ es de variable
$y = 8;
$suma = $x + $y; //. concatenar, "hola".1."adios"
echo "la suma de X y Y es: ", $suma;

define('PI',3.141592); //pone un valor al nombre del principio
echo "<br>";
echo "el valor de pi es: ".PI;
echo "<br>";
function saludar($nombre){
    echo "hola ".$nombre."<br>";

}
saludar ("juan");

if($x > $y){
    echo $x." es mayor que ".$y;
}else{
    echo $y." es mayor que ".$x;
}
$p = 0;
while($p<5){
    $p++;
    echo $p;
}
$modulo
echo "</body>
</html>";
?>