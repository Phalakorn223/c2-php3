<?php
$x = 10;
$y = 5;
echo "<h1>PHP Logical Operators</h1>";
echo "<h1> x = $x and y = $y<br /></h1>";
echo "<hr color='red' size='4px' />";

if($x == $y){
    echo "x = y ",var_dump($x == $y);
} else {
    echo "x = y", var_dump($x == $y);
}

echo "<br />";

if($x == 10 && $y == 5){
    echo "x , y = true ";
} else {
    echo " x , y = false <br />";
}

echo "<br />";

if($x == 10 && $y == 50){
    echo "x , y = true ";
} else {
    echo " x , y = false <br />";
}