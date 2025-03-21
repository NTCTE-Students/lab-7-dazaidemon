<?php
// Устанавливаем куки на 2 часа
setcookie("language", "English", time() + 7200); // 7200 секунд = 2 часа

if(isset($_COOKIE["language"])) {
    echo "Кука 'language': " . $_COOKIE["language"];
} else {
    echo "Кука 'language' не установлена.";
}
?>