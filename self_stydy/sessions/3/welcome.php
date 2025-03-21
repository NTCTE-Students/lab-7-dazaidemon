<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "Привет, " . $_SESSION['username'];
    echo '<a href="?logout=true">Выйти</a>';
} else {
    echo "Вы не авторизованы.";
}

if (isset($_GET['logout'])) {
    session_destroy(); // Удаляем сессию
    header("Location: login.php");
}
?>