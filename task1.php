<?php
// структуру кода нашел в инете, подкоректировал под нашу задачу
// Путь к файлу
$file_name = "users.txt";

// Считываем информацию по строкам
$data = file( $file_name );
?>
<table border="1">
    <?php
    // В цикле обходим массив данных
    foreach( $data as $value ) {

        // Разбиваем строку по '\t'
        $value = explode("\t", $value);

        ?>
        <tr>
            <td><?= $value[0] ?></td>
            <td><?= $value[1] ?></td>
        </tr>
        <?php
    }
    ?>
</table>