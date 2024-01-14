<?php
$mysql = new mysqli('localhost:8889', 'root', 'root', 'ornament');

// Получаем данные о заказе из формы
$orderName = filter_var(trim($_POST['product_name']));
// Получите имя товара на основе выбранного ID товара
$result = $mysql->query("SELECT name FROM `products` WHERE `id`='$orderName'");
if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
    $orderName = $product['name'];
}
$orderDetails = filter_var(trim($_POST['order_details']));

// Проверяем, есть ли пользователь авторизованным
if (isset($_COOKIE['user'])) {
    $userName = filter_var(trim($_COOKIE['user']));
    $result = $mysql->query("SELECT * FROM `users` WHERE `name`='$userName'");
    $user = $result->fetch_assoc();

    // Добавляем заказ в базу данных, связывая его с конкретным пользователем
    $userId = $user['id'];
    $mysql->query("INSERT INTO `orders` (`user_id`, `order_name`, `order_details`, `order_status`) VALUES ('$userId', '$orderName', '$orderDetails', 'создан')");

    echo "Заказ успешно создан!";
} else {
    echo "Ошибка. Пользователь не авторизован.";
}

$mysql->close();
?>