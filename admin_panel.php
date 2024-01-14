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

// Получение всех заказов из базы данных
$sql = "SELECT * FROM orders";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Административная панель</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>Административная панель</h1>

    <table>
        <tr>
            <th>Номер заказа</th>
            <th>Имя клиента</th>
            <th>Статус</th>
            <th>Действия</th>
        </tr>
        <?php
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['user_id']."</td>";    
                echo "<td>".$row['order_status']."</td>";
                echo '<td><button onclick="';
                echo "var xhr = new XMLHttpRequest();";
                echo 'xhr.open(\'GET\', \'update_status.php?orderId='.$row['id'].'\', true);';
                echo 'xhr.send();';
                echo '">Изменить статус</button></td>';
                echo "</tr>";
                
            }
        } else {
            echo "<tr><td colspan='4'>Нет доступных заказов.</td></tr>";
        }
        
        ?>
    </table>

    <script>
        function updateStatus(id) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "update_status.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log(xhr.responseText);
                    
                }
            };
            xhr.send("id=" + orderId);
        }
    </script>
</body>
</html>

<?php
// Закрытие соединения с базой данных
$conn->close();
?>