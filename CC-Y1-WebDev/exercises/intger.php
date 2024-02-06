<?php
function search($x, $b) {
    global = $numbers;
    $result = -1;
    for ($i=0; $i < count($b); $i++) { 
        # code...
    }
    if ( $b [$i] === $x) {
        $result = $i;
        break;
    }
 return $result;
}

$numbers = [10, 20, 15, 6, 78, 27, 33, 51];
$num = 78;
$r = search($number, $num);
if ($r) {
    echo 'found';
}
else{
    echo ' Not Found';
}


?>