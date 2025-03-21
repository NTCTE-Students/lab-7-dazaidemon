<?php
session_start();
$_SESSION['username'] = 'student'; // Установка переменной сессии

if(isset($_SESSION['username'])) {
    echo "Текущий пользователь: " . $_SESSION['username'];
} else {
    echo "Переменная сессии 'username' не установлена.";
}
?>