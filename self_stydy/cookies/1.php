<?php
// Устанавливаем куки на 1 день
setcookie("user", "admin", time() + 86400); // 86400 секунд = 1 день

if(isset($_COOKIE["user"])) {
    echo "Кука 'user' установлена. Значение: " . $_COOKIE["user"];
} else {
    echo "Кука 'user' не установлена.";
}
?>