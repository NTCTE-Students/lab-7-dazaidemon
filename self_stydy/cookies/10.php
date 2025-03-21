<?php
setcookie("session_id", "", time() - 3600); // Удаляем куку

if (!isset($_COOKIE["session_id"])) {
    echo "Кука 'session_id' успешно удалена.";
} else {
    echo "Кука 'session_id' все еще существует.";
}
?>