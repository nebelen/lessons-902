<?php ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Php-forms</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
<form method="post" action="task2.php">
    <div class="row">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <?= !empty($errors['email']) ? $errors['email'] : '' ?>
    </div>


    <button>Подписаться</button>
</form>
</body>

</html>