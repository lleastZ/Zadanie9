<?php
function test($str1)
{
    return seven($str1);
}
function seven($str1) {
    for ($sc = 0; $sc < strlen($str1); $sc++) {
        if (ord($str1[$sc]) >= ord('A') &&
            ord($str1[$sc]) <= ord('Z')) {
            return ("$str1 - не все буквы в строке в нижнем регистре");
        }
    }
    return ("$str1 - все буквы в строке в нижнем регистре");
}
echo test('Hello');