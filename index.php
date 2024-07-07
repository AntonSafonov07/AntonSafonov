<?php
include 'db.php'; // подключение к БД
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Мои заметки</title>
</head>
<body>
<h1>Мои заметки</h1>
<ul>
    <?php
    $sql = "SELECT * FROM notes ORDER BY created_at DESC";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<li>
                        <h3><a href='delete.php?id={$row['id']}'>{$row['title']}</a></h3>
                        <p>{$row['content']}</p>
                    </li>";
        }
    } else {
        echo "<li>Заметок пока нет.</li>";
    }
    ?>
</ul>

<a href="create.php">Создать новую заметку</a>

</body>
</html>