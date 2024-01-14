<!DOCTYPE html>
<html>
<head>
    <title>Личный кабинет</title>
    <style>
        /* Ваши стили здесь */
        h2 {
            color: #FF0000;
            font-size: 24px;
        }

        .order {
            background-color: #F5F5F5;
            padding: 10px;
            margin-bottom: 10px;
        }

        .order .name {
            font-weight: bold;
        }

        .order .details {
            font-style: italic;
        }

        .order .status {
            color: #006600;
        }

        .error {
            color: #FF0000;
        }
    </style>
</head>
<body>

    <h2>Мои заказы</h2>

    <?php
    $mysql = new mysqli('localhost:8889', 'root', 'root', 'ornament');

    // Проверяем, есть ли пользователь авторизованным
    if (isset($_COOKIE['user'])) {
        $userName = filter_var(trim($_COOKIE['user']));
        $result = $mysql->query("SELECT * FROM `users` WHERE `name`='$userName'");
        $user = $result->fetch_assoc();
        $userId = $user['id'];

        // Получаем все заказы для данного пользователя
        $ordersResult = $mysql->query("SELECT * FROM `history` WHERE `user_id`='$userId'");
        
        // Выводим информацию о каждом заказе
        while ($order = $ordersResult->fetch_assoc()) {
            $orderId = $order['id'];
            $orderName = $order['order_name'];
            $orderDetails = $order['order_details'];
            $orderStatus = $order['order_status'];

            echo "<div class='order'>";
            echo "<span class='name'>Название заказа: </span>$orderName<br>";
            echo "<span class='details'>Детали заказа: </span>$orderDetails<br>";
            echo "<span class='status'>Статус заказа: </span>$orderStatus<br>";
            echo "</div>";
        }
    } else {
        echo "<p class='error'>Ошибка. Пользователь не авторизован.</p>";
    }

    $mysql->close();
    ?>

</body>
</html>