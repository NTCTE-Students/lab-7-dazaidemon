<?php
setcookie("font_size", "16px", time() + 86400);
setcookie("layout", "grid", time() + 86400);

if(isset($_COOKIE["font_size"]) && isset($_COOKIE["layout"])) {
    echo "Размер шрифта: " . $_COOKIE["font_size"] . "<br>";
    echo "Макет: " . $_COOKIE["layout"] . "<br>";
} else {
    echo "Некоторые куки не установлены.";
}
?>