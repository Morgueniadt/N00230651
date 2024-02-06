<!-- Random 3 by: Morguen caffrey-->
<?php
$sum = 0;
$x = rand(10, 20)
for ($i = 0; $i < 10; $i++){
    if($i % 3 === 0 or $i % 5 === 0)
    $sum += $i;
}
echo "random number is $x <br>";
echo "the sum of evry number between 1 and $x is $sum"
?> 