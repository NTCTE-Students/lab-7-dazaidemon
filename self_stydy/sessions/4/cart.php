<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Добавление товара
if (isset($_GET['add'])) {
    $_SESSION['cart'][] = $_GET['add'];
}

// Удаление товара
if (isset($_GET['remove'])) {
    $key = array_search($_GET['remove'], $_SESSION['cart']);
    if ($key !== false) {
        unset($_SESSION['cart'][$key]);
    }
}

echo "Ваша корзина: <br>";
foreach ($_SESSION['cart'] as $item) {
    echo $item . " <a href='?remove=$item'>[Удалить]</a><br>";
}

// Пример добавления товара в корзину
echo "<br><a href='?add=Товар1'>Добавить Товар1</a><br>";
echo "<a href='?add=Товар2'>Добавить Товар2</a><br>";
?>