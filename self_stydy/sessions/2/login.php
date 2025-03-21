<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['username'] = $_POST['username'];
    header("Location: redirect.php");
    exit();
}
?>

<form method="post">
    Имя пользователя: <input type="text" name="username" required>
    <input type="submit" value="Войти">
</form>