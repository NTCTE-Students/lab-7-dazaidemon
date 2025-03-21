<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $theme = $_POST['theme'];
    setcookie("theme", $theme, time() + 86400); // Устанавливаем на 1 день
    echo "Текущая тема: " . $theme;
} else {
    $currentTheme = isset($_COOKIE["theme"]) ? $_COOKIE["theme"] : 'light';
    echo "Текущая тема: " . $currentTheme;
}
?>

<form method="post">
    <select name="theme">
        <option value="light">Light</option>
        <option value="dark">Dark</option>
    </select>
    <input type="submit" value="Сохранить тему">
</form>