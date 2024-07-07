<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "INSERT INTO notes (title, content) VALUES ('$title', '$content')";

    if ($conn->query($sql) === TRUE) {
        echo "Новая заметка успешно создана!";
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Создать заметку</title>
</head>
<body>
<h1>Создать новую заметку</h1>
<form method="POST">
    <label for="title">Заголовок:</label>
    <input type="text" name="title" id="title" required><br><br>

    <label for="content">Текст заметки:</label>
    <textarea name="content" id="content" cols="30" rows="10" required></textarea><br><br>

    <button type="submit">Создать</button>
</form>
</body>
</html>
