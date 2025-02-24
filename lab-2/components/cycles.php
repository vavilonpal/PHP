<?php

$a = 0;
$b = 0;

echo "'For-cycle' \n";
for ($i = 0; $i <= 5; $i++) {
    echo " $i -round,  a: $a, b: $b \n";

   $a += 10;
   $b += 5;
}
echo "End of the loop: a = $a, b = $b \n";
echo "'While-cycle' \n";
$i = 0;
$a = 0;
$b = 0;
while($i <= 5) {
    echo " $i -round,  a: $a, b: $b \n";

   $a += 10;
   $b += 5;
   $i++;
}
echo "End of the loop: a = $a, b = $b \n";
echo "'Do-while-cycle' \n";

$i = 0;
$a = 0;
$b = 0;
do{
    echo " $i -round,  a: $a, b: $b \n";
   $a += 10;
   $b += 5;
   $i++;
}while($i <= 5);
echo "End of the loop: a = $a, b = $b";

?>