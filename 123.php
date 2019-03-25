<?php
$dayOfWeek = [
    'Понедельник',
    'Вторник',
    'Среда',
    'Четверг',
    'Пятница',
    'Суббота',
    'Воскресенье'
];
$day = $dayOfWeek[ date ("w") - 1 ];
foreach ($dayOfWeek as $i){
    echo setText ($i, $day) . '<br>';
}
function setText($text, $currentDay){
    if ($text != $currentDay) {
        return $text;
    } else {
        return '<em>' . $text . '</em>';
    }
}
echo '<br>';
