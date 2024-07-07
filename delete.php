
<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM notes WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Заметка успешно удалена!";
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
