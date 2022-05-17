<?php

$count = (int)readline("Сколько задач запланировано на сегодня?\n");
$taskList = "";
$totalTime = 0;

for ($i = 0; $i < $count; $i++){
    $task = readline("Какая задача стоит перед вами сегодня?\n");
    $time = (int)readline("Сколько примерно времени эта задача займет?\n");
    $taskList .= "— " . $task . " " . $time . " ч.\n";
    $totalTime += $time;
}

echo "Cегодня у вас запланировано {$count} приоритетных задачи на день:
{$taskList}
Примерное время выполнения плана = {$totalTime} ч.\n";