<?php
function test($str1)
{
    return five($str1);
}

function five($str1) {
    $n = strlen($str1);
    if($n == 1)  {
        return $str1;
    }
    else {
        $n--;
        return five(substr($str1,1, $n)) . substr($str1, 0, 1);
    }
}
print_r(test('Hello!'));