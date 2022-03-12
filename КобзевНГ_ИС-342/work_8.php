<?php
function test($string)
{
    return eight($string);
}

function eight($string) {
    if ($string == strrev($string))
        return ("$string -  является палиндром");
    else
        return ("$string - не является палиндром");
}
echo test('hello');