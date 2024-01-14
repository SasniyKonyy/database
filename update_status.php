<?php
// Подключение к базе данных
$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "ornament";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения с базой данных
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Получение orderId из параметров запроса
if (isset($_GET['orderId'])) {
    $orderId = $_GET['orderId'];

    // Получение текущего статуса заказа из базы данных
    $sql = "SELECT order_status FROM orders WHERE id = $orderId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Извлечение значения статуса заказа
        $row = $result->fetch_assoc();
        $status = $row['order_status'];

        if ($status == 'создан') {
            $sql = "UPDATE orders SET order_status = 'в пути' WHERE id = $orderId";
        } else if ($status == 'в пути') {
            $sql = "UPDATE orders SET order_status = 'завершен' WHERE id = $orderId;
            INSERT INTO history SELECT * FROM orders WHERE id = $orderId;
            DELETE FROM orders WHERE id = $orderId";
        } 
        
        // Подключение к базе данных и выполнение запроса
        $connection = mysqli_connect('localhost:8889', 'root', 'root', 'ornament');
        mysqli_multi_query($connection, $sql);
        

        if ($conn->query($sql) === TRUE) {
            echo "Статус заказа успешно обновлен.";
        } else {
            echo "Ошибка при обновлении статуса заказа: " . $conn->error;
        }
    } else {
        echo "Заказ не найден.";
    }
} else {
    echo "Неверные параметры запроса.";
}

// Закрытие соединения с базой данных
$conn->close();
?>