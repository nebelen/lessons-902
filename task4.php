<?php
$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
foreach ($arr as $key=>$color) {
    $en[] = $key;
    $ru[] = $color;
}


var_dump($en);
var_dump($ru);
