<?php
function test($a)
{
    return six($a);
}
function six($a) {
    for($x=0;$x< count($a);++$x) {
        $min = $x;
        for($y=$x+1;$y< count($a);++$y) {
            if($a[$y] < $a[$min] ) {
                $temp = $a[$min];
                $a[$min] = $a[$y];
                $a[$y] = $temp;
            }
        }
    }
    return $a;
}
print_r(test(array(33,22,11,55,'wm-school')));

