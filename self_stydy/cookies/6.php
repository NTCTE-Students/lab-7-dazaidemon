<?php
setcookie("country", "Russia", time() + 86400); // Устанавливаем на 1 день

if(isset($_COOKIE["country"])) {
    echo "Привет, пользователь из " . $_COOKIE["country"];
} else {
    echo "Кука 'country' не установлена.";
}
?>