<?php
//Задача 1
$arr = [1, 2, 3, 4, 5];
$result = 0;
foreach ($arr as $item) {
    $result += $item * $item;
}
echo $result;
