<?php
function test($arg1) {
    return three($arg1);
}

function three($arg1){
    $fact =1;
    for($i=$arg1; $i>=1;$i--) {
        $fact = $fact * $i;
    }
    return ("Факториал числа $arg1 равен $fact");
}
echo (test(6));