<?php

$num = 0;

while ($num <= 0) {
    $num = (int)readline("Введите любое положительное число:\n");
}

$position = $num - (int)($num / 8) * 8;

switch ($position){
    case 0:
        echo("Указательный палец\n");
        break;
    case 1:
        echo("Большой палец\n");
        break;
    case 2:
        echo("Указательный палец\n");
        break;
    case 3:
        echo("Средний палец\n");
        break;
    case 4:
        echo("Безымянный палец\n");
        break;
    case 5:
        echo("Мизинец палец\n");
        break;
    case 6:
        echo("Безымянный палец\n");
        break;
    case 7:
        echo("Средний палец\n");
        break;
    }