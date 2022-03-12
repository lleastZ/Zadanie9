<?php

function test($l, $w)
{
    return one($l, $w);
}

function one($l, $w)
{
    $area = $l * $w;
    return ("Прямоугольник длиной $l и шириной $w имеет площадь $area");
}

echo(test(5, 45));