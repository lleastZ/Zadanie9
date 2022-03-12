<?php
function test($l, $w)
{
    return two($l, $w);
}

function two($l, $w)
{
    $area = $l * $w;
    return $area;
}
echo "Прямоугольник имеет площадь " . two(4, 6) ;
