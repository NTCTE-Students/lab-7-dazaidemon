<?php
// Устанавливаем куки на 1 неделю
setcookie("preferences", "dark_mode", time() + (7 * 86400)); // 7 дней

if(isset($_COOKIE["preferences"])) {
    echo "Кука 'preferences' установлена. Значение: " . $_COOKIE["preferences"];
} else {
    echo "Кука 'preferences' не установлена.";
}
?>