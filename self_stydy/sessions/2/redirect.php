<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "Добро пожаловать, " . $_SESSION['username'];
} else {
    header("Location: login.php");
    exit();
}
?>