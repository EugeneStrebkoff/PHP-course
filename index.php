<?php

$name = readline("Введите имя: \n");

$todos = [
    [
        "Имя задачи" => readline("Какая задача стоит перед вами сегодня?\n"),
        "Время" => readline("Сколько примерно времени эта задача займет?\n")
    ],
    [
        "Имя задачи" => readline("Какая задача стоит перед вами сегодня?\n"),
        "Время" => readline("Сколько примерно времени эта задача займет?\n")
    ],
    [
        "Имя задачи" => readline("Какая задача стоит перед вами сегодня?\n"),
        "Время" => readline("Сколько примерно времени эта задача займет?\n")
    ]
    ];

$time = $todos[0]['Время'] + $todos[1]['Время'] + $todos[2]['Время'];

echo "{$name}, сегодня у вас запланировано 3 приоритетных задачи на день:
— {$todos[0]['Имя задачи']} ({$todos[0]['Время']}ч)
— {$todos[1]['Имя задачи']} ({$todos[1]['Время']}ч)
— {$todos[2]['Имя задачи']} ({$todos[2]['Время']}ч)
Примерное время выполнения плана = {$time}ч\n";