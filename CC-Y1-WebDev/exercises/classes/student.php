<?php
class studentProfile{
    public $nm;
    public $number;

public function __construct($nm,$num){
    $this -> = $nm
    $this -> = $name
}

public function toString()  {
    $format = "Account number: %s, name: %s"
    $str = sprintf(
        $format
        $this ->number,
        $this ->name
    );
    return $str;
}

}
?>