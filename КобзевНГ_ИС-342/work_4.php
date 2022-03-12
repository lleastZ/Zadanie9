<?php
function test($arg1)
{
    return four($arg1);
}

function four($arg1){
    for ($x = 2; $x < $arg1; $x++) {
        if ($arg1 % $x == 0){
            return ("$arg1 - число не является простым");
        }
    }
    return ("$arg1 - является простым числом");;
}
echo(test(15));