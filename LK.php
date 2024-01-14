<DOCTYPE html>
    <html lang="eng">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style-lk.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;1,700;1,800&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
        <title Сайт></title>
    </head>
    <header class="hl">
        <div class="hederlogo">
            <img src="logoss.png" alt="" width="100" height="100">
        </div>
        <div class="nav">
            <a class="navitems" href="index.php">ГЛАВНАЯ</a>
            <div class="dropup">
                <button class="dropbtn">О НАС</button>
                <div class="dropup-content">
                  <a href="main.html">о компании</a>
                  <a href="cont.html">контакты</a>
                </div>
              </div>
            <div class="dropup">
                <button class="dropbtn">УСЛУГИ</button>
                <div class="dropup-content">
                  <a href="uslugi3.html">поектные работы</a>
                  <a href="uslugi2.html">ремонтрные работы</a>
                  <a href="uslugi.html">строительные работы</a>
                </div>
              </div>
            
        </div>
              </div>
    </header>
    <body>
        <div class="header-cont">
        
        </div>
        <div class="cards-com">
                    <div class="card-cont">
                       
                        <div class="card-title">
                            КОНТАКТЫ
        
                        </div>
                        <div class="card-disc-cont">
                            <img src="phone.png" width="25" alt="">
                            <a href="new_order.php">заказать</a>
                        
                        

                        </div>
                        <div class="card-disc-cont">
                            <img src="phone.png" width="25" alt="">
                            <a href="see_order.php">история заказов</a>

                        </div>
                        <div class="card-disc-cont">
                            <img src="telegram.png" width="25" alt="">
                            <a href="https://t.me/toxic0mmunity">telegram</a>

                        </div>
                        <div class="card-disc-cont">
                            <img src="free-icon-mail-646094.png" width="25" alt="">
                            <a href="@">ornament1234@orn.com</a>

                        </div>
                        
                    
                    </div>
        </div>
        <div class="karta">
            <h2>Мои заказы</h2>
            <div class="order-scroll">
                <?php
                $mysql = new mysqli('localhost:8889', 'root', 'root', 'ornament');

                // Проверяем, есть ли пользователь авторизованным
                if (isset($_COOKIE['user'])) {
                    $userName = filter_var(trim($_COOKIE['user']));
                    $result = $mysql->query("SELECT * FROM `users` WHERE `name`='$userName'");
                    $user = $result->fetch_assoc();
                    $userId = $user['id'];

                    // Получаем все заказы для данного пользователя
                    $ordersResult = $mysql->query("SELECT * FROM `orders` WHERE `user_id`='$userId'");

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
                    // Удаление завершенных заказов и перемещение их в таблицу истории
                    
                } else {
                    echo "<p class='error'>Ошибка. Пользователь не авторизован.</p>";
                }

                $mysql->close();
                ?>
            </div>
        </div>
        <div class="footer">
            <ul style="list-style-type: none;"> 
                <li><a href="index.php">Главная страница</a></li>
                <li><a href="cont.html">Контакты</a></li>
                <li><a href="main.html">О нас</a></li>
                <li>
                    
                    <ul style="list-style-type: none;">
                        <li><a href="uslugi3.html">Проектные работы</a></li>
                        <li><a href="uslugi2.html">Ремонтные работы</a></li>
                        <li><a href="uslugi.html">Строительные работы</a></li>
                    </ul>
                </li>
                <li><a href="form.html">Форма для записи на консультацию</a></li>
            </ul>
            <div >
            </div> 
            <div class="copy">
                <br>copyright 2023
                <button class="footer-botton">
                    <a href="otziw.html">оставить отзыв</a></button>
                <button class="footer-botton"><a href="main.html">о компании</a></button>
                <button class="footer-botton"><a href="index.php">главная</a></button>
            </div>
            
                
        </div> 
        
               
    </body>
    </html>