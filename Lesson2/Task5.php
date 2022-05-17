<?php

$appleCounter = (String)readline("Сколько яблок вы хотите указать?\n");

$ending = (int)substr($appleCounter, -1);

if ($ending === 1) {
    echo ("У вас {$appleCounter} яблоко!\n");
} elseif ($ending === 2 || $ending === 3 || $ending === 4) {
    echo ("У вас {$appleCounter} яблока!\n");
} else {
    echo ("У вас {$appleCounter} яблок!\n");
}