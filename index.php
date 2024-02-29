<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обработка формы на PHP</title>
</head>
<body>
    <form method="post" action="">
        <label for="age">Введите слово:</label>
        <input type="text" name="slovo" id="slovo" required>
        <br>
        <input type="submit" value="Отправить">
    </form>

    <?php
    if (!empty($_POST)) {
        $slovo = $_POST["slovo"];

        if (($slovo = ' ')) {
            echo "Пустая строка недопустима!";
        } else {
            echo "Слово: " . $slovo;
        }
    }
    ?>
</body>
</html>