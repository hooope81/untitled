<?php
$name = readline("Укажите Ваше имя ");
$question1 = "Какая задача стоит перед вами сегодня? ";
$question2 = "Сколько примерно времени эта задача займет? ";
$item1 = readline($question1);
$time1 = (int)readline($question2);
$item2 = readline($question1);
$time2 = (int)readline($question2);
$item3 = readline($question1);
$time3 = (int)readline($question2);
$sum = $time1 + $time2 + $time3;

echo "$name, сегодня у вас запланировано 3 приоритетныx задачи на день:
- $item1 ({$time1}ч)
- $item2 ({$time2}ч)
- $item3 ({$time3}ч)
Примерное время выполнения плана = {$sum}ч
";