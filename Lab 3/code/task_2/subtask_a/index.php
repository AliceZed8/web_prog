<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subtask A</title>
</head>
<body>

    <form method="post">
        <label>Введите текст:</label><br>            <!-- Возвращаем тект в текстареа  -->
        <textarea name="text" rows="4" cols="50"><?php echo isset($_POST['text']) ? $_POST['text'] : "";?></textarea><br><br>
        <input type="submit" value="Посчтитать кол-во символов и слов">
    </form>
    
    <?php
    if (isset($_POST['text'])) {
        $text = $_POST['text'];
        $characters = mb_strlen($text,'utf-8'); //Cчитаем кол-во символов

        $str = preg_replace("/ {2,}/", ' ', $text); // Заменяем несколько пробелов на один
        $str = trim($str); // убираем пробелы в начале и в конце
        $words = count(explode(' ', $str)); //Сплит

        echo "Количество слов: " . $words . "<br>Количество символов:" . $characters;
    }
    ?>

</body>
</html>