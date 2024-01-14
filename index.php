<!DOCTYPE html>
<html lang="eng">
    <?php
    if($_COOKIE['user']==''):
    ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <title Сайт></title>
    <link>
    <script src="js.js"></script>
</head>
<header class="hl">
    <div class="hederlogo">
        <img src="logoss.png" alt="" width="100" height="100">
    </div>
    <div class="nav">
        <a class="navitems" href="index.html">ГЛАВНАЯ</a>
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
    <div class="regnav">
        <a class="reg" href="autoreg.html">вход</a> 
        <a class="reg" href="registr.html">регистрация</a> 
    </div>
  
    
</header>
<body>
    <script src="js.js"></script>

    <div class="header">
        <div class="container">
            <div class="headerline">
                <div class="hederlogo">
                </div>
                
            </div>
        
        <div class="header-down">
            <div  class="header-title"> 
                ОРНАМЕНТ
            </div>
                <div class="header-posttitle">
                    Управляй Мечтой
                </div>
            <div class="btn">
                <a class="button" href="form.html">запись на консультацию</a>
            </div>
        </div>
        <div class="carousel">
            <h1>наши проекты </h1>
            <div class="slide">
              <img src="i.png" alt="Photo 1">
            </div>
            <div class="slide">
              <img src="i2.png" alt="Photo 2">
            </div>
            <div class="slide">
              <img src="i3.png" alt="Photo 3">
            </div>
          </div>
    <div class="sidebar">
        <h2>Новости</h2>
        <ul>
          <li><a href="news.html#img1">"ОРНАМЕНТ" успешно завершает строительство жилого комплекса "Эмпайр Тауэрс" высотой 50 этажей</a></li>
          <li><a href="news.html#img2">ОРНАМЕНТ" выбрана для строительства нового международного аэропорта</a></li>
          <li><a href="news.html#img3">ОРНАМЕНТ" запускает новую линию экологически чистых строительных материалов</a></li>
          <li><a href="news.html#img4">ОРНАМЕНТ" получает престижную награду за вклад в развитие строительной отрасли</a></li>
        </ul>
        </div>
        </div>  
    </div>
    <div class="sidebar2">
        <a href='https://www.pik.ru/'>Группа ПИК</a>
        <ul>
          <li><a href="https://www.pik.ru/"><img src="PIK_logo.jpg" width="200"></a></li>
          <li><a href="https://www.pik.ru/">Лучший застройщик современности</a></li>
          
        </ul>
        </div>
        </div>  
    </div>
    
    <div class="footer">
        <ul style="list-style-type: none;"> 
            <li><a href="index.html">Главная страница</a></li>
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
            <button class="footer-botton"><a href="index.html">главная</a></button>
        </div>
        
            
    </div> 
    <?php endif;?>
    <?php
    if($_COOKIE['user']!=''):
    ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <title Сайт></title>
    <link>
    <script src="js.js"></script>
</head>
<header class="hl">
    <div class="hederlogo">
        <img src="logoss.png" alt="" width="100" height="100">
    </div>
    <div class="nav">
        <a class="navitems" href="index.html">ГЛАВНАЯ</a>
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
    <div class="regnav"> 
        
        <?=$_COOKIE['user']?>
        

        
    </div>
    <a class="reg2" href="exit.php">выход</a>
    <a class="reg1" href="LK.php">личный кабинет</a>
    
</header>
<body>
    <script src="js.js"></script>

    <div class="header">
        <div class="container">
            <div class="headerline">
                <div class="hederlogo">
                </div>
                
            </div>
        
        <div class="header-down">
            <div  class="header-title"> 
                ОРНАМЕНТ
            </div>
                <div class="header-posttitle">
                    Управляй Мечтой
                </div>
            <div class="btn">
                <a class="button" href="form.html">запись на консультацию</a>
            </div>
        </div>
        <div class="carousel">
            <h1>наши проекты </h1>
            <div class="slide">
              <img src="i.png" alt="Photo 1">
            </div>
            <div class="slide">
              <img src="i2.png" alt="Photo 2">
            </div>
            <div class="slide">
              <img src="i3.png" alt="Photo 3">
            </div>
          </div>
    <div class="sidebar">
        <h2>Новости</h2>
        <ul>
          <li><a href="news.html#img1">"ОРНАМЕНТ" успешно завершает строительство жилого комплекса "Эмпайр Тауэрс" высотой 50 этажей</a></li>
          <li><a href="news.html#img2">ОРНАМЕНТ" выбрана для строительства нового международного аэропорта</a></li>
          <li><a href="news.html#img3">ОРНАМЕНТ" запускает новую линию экологически чистых строительных материалов</a></li>
          <li><a href="news.html#img4">ОРНАМЕНТ" получает престижную награду за вклад в развитие строительной отрасли</a></li>
        </ul>
        </div>
        </div>  
    </div>
    <div class="sidebar2">
        <a href='https://www.pik.ru/'>Группа ПИК</a>
        <ul>
          <li><a href="https://www.pik.ru/"><img src="PIK_logo.jpg" width="200"></a></li>
          <li><a href="https://www.pik.ru/">Лучший застройщик современности</a></li>
          
        </ul>
        </div>
        </div>  
    </div>
    
    <div class="footer">
        <ul style="list-style-type: none;"> 
            <li><a href="index.html">Главная страница</a></li>
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
            <button class="footer-botton"><a href="index.html">главная</a></button>
        </div>
        
            
    </div> 
    <?php endif;?> 
    
           
</body>
</html>