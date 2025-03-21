<?php
if (!isset($_COOKIE["loggedin"])) {
    header("Location: login.php"); // Перенаправление на страницу логина
    exit();
} else {
    echo "Добро пожаловать!";
}
?>