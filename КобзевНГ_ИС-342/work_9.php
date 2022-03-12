<?php
if(!isset ($_POST['submit'])){
    ?>
    <form method="post" >
        <p>Введите значения длины и ширины прямоугольника.</p>
        <p>Длина:  <input type="text" name="length" size="5" />
            Ширина:  <input type="text" name="width" size="5" /></p>
        <input type="submit" name="submit" value="Выполнить" />
    </form>
    <?php
} else {
    $l = $_POST['length'];
    $w = $_POST['width'];
    function recArea($l, $w){
        $area = $l * $w;
        return $area;
    }
    echo "Площадь прямоугольника длиной $l и шириной $w равна " . recArea($l, $w). ".";
}
?>

<br><br>


<?php
$months=array(
    'Январь'=>31,
    'Февраль'=>'28 дней, если високосный год 29',
    'Март'=>31,
    'Апрель'=>30,
    'Май'=>31,
    'Июнь'=>30,
    'Июль'=>31,
    'Август'=>31,
    'Сентябрь'=>30,
    'Октябрь'=>31,
    'Ноябрь'=>30,
    'Декабрь'=>31
);
function option($str){
    echo "<option value=\"$str\">" .ucfirst($str). "</option>\n";
}

if(!isset ($_POST['submit'])){
    ?>
    <form method="post" >
        <p>Выберите месяц</p>
        <select name="month">
            <?php
            foreach ($months as $k => $v){
                option($k);
            }
            ?>
        </select>
        <input type="submit" name="submit" value="Выполнить" />
    </form>
    <?php
} else {
    $month = $_POST['month'];
    if ($month == 'Февраль'){
        echo "Месяц Февраль имеет " . $months['Февраль'] . ".";
    }else{
        echo "Месяц $month имеет $months[$month] дней.";
    }
}
?>
