<!DOCTYPE html>
<html>
<head>
    <title>Создание заказа</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
        }

        select, textarea, input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h2>Создание заказа</h2>

    <form method="POST" action="create_order.php" id="orderForm">
        <label for="product_name">Выберите товар:</label><br>
        <select id="product_name" name="product_name" required>
            <option value="">Выберите товар</option>
            <?php
            // Connect to the database and fetch products
            $servername = "localhost:8889";
            $username = "root";
            $password = "root";
            $dbname = "ornament";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Ошибка подключения: " . $conn->connect_error);
            }

            $sql = "SELECT id, name, price FROM products";  // Assuming the price is stored in the database
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row["id"] . '" data-price="' . $row["price"] . '">' . $row["name"] . '</option>';
                }
            }

            $conn->close();
            ?>
        </select><br><br>

        <label for="order_details">Детали заказа:</label><br>
        <textarea id="order_details" name="order_details" required></textarea><br><br>

        <label for="quantity">Количество:</label><br>
        <input type="number" id="quantity" name="quantity" required><br><br>

        <label for="total_price">Цена:</label><br>
        <input type="text" id="total_price" name="total_price" readonly><br><br>

        <input type="submit" value="Создать заказ">
    </form>

    <script>
        document.getElementById('product_name').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var price = selectedOption.getAttribute('data-price');
            if (price) {
                updateTotalPrice(price);
            }
        });

        document.getElementById('quantity').addEventListener('input', function() {
            var selectedOption = document.getElementById('product_name').options[document.getElementById('product_name').selectedIndex];
            var price = selectedOption.getAttribute('data-price');
            if (price) {
                updateTotalPrice(price);
            }
        });

        function updateTotalPrice(price) {
            var quantity = document.getElementById('quantity').value;
            var totalPrice = (parseFloat(quantity) * parseFloat(price)).toFixed(2);
            document.getElementById('total_price').value = totalPrice;
        }
    </script>

</body>
</html>