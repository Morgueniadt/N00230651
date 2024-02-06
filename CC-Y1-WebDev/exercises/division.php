<?php
$n = rand(1, 10);
$x = rand(1, 10);
function divisible($x, $n) {
    $remainder = $x %$n;
    if ( $remainder===0) {
        TRUE;
        echo "$x is divisble by $n";
    }
    elseif ($remainder!== 0) {
        FALSE;
        echo "$x is not divisble by $n";
    }
}


divisible($x, $n);


?>