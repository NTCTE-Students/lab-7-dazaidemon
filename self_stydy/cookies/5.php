<?php
if(isset($_COOKIE["visited"])) {
    setcookie("visited", $_COOKIE["visited"] + 1, time() + 86400);
    echo "Количество посещений: " . ($_COOKIE["visited"] + 1);
} else {
    setcookie("visited", 1, time() + 86400);
    echo "Это ваше первое посещение.";
}
?>