<?php
$x = 10;
$y = 10;
$z = 20;
$m = 20;

echo "<h1>PHP Increment / Derement Operators</h1>";
echo "<h1> x = $x, y = $y and z = $z<br /></h1>";
echo "<hr color='red' size='4px' />";

echo "*****Pre +++x = $x *****<br />";
echo "++x : ", ++$x,"<br />";//Pre, 11 = 10 + 1
echo "++x : ", ++$x,"<br />";//Pre, 12 = 11 + 1
echo "++x : ", ++$x,"<br />";//Pre, 13 = 12 + 1

echo "*****Post y++ = $y *****<br />";
echo "y++ : ", $y++,"<br />";//Post, 10 = 10 + y
echo "y++ : ", $y++,"<br />";//Post, 11 = 10 + 1
echo "y++ : ", $y++,"<br />";//Post, 12 = 11 + 1
echo "y++ : ", $y++,"<br />";//Post, 13 = 12 + 1

echo "*****Pre --z = $z *****<br />";
echo "--z : ", --$z,"<br />";//Pre, 19 = 20 - 1
echo "--z : ", --$z,"<br />";//Pre, 18 = 19 - 1
echo "--z : ", --$z,"<br />";//Pre, 17 = 18 - 1

echo "*****Pre m-- = $z *****<br />";
echo "m-- : ", $m--,"<br />";//Pre, 20 = 20
echo "m-- : ", $m--,"<br />";//Pre, 19 = 20 -1
echo "m-- : ", $m--,"<br />";//Pre, 18 = 19 -1
echo "m-- : ", $m--,"<br />";//Pre, 17 = 18 -1