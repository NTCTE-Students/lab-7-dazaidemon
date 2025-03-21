<?php
// Изменяем значение куки
setcookie("user", "guest", time() + 86400); // 86400 секунд = 1 день

if(isset($_COOKIE["user"])) {
    echo "Новое значение куки 'user': " . $_COOKIE["user"];
} else {
    echo "Кука 'user' не установлена.";
}
?>