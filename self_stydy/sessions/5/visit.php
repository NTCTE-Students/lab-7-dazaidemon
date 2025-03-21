<?php
session_start();

if (!isset($_SESSION['first_visit_time'])) {
    $_SESSION['first_visit_time'] = date('Y-m-d H:i:s');
}

$_SESSION['last_visit_time'] = date('Y-m-d H:i:s');

echo "Первое посещение: " . $_SESSION['first_visit_time'] . "<br>";
echo "Последнее посещение: " . $_SESSION['last_visit_time'];
?>