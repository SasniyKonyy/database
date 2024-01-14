<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Форма регистрации</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style-reg.css">
</head>
<body>
    <div class="container mt-4">
        
        <form action="auto_admin.php" method="post">
            <h1>панель администратора</h1>
            <input type="text" class="form-control" name="login" id="login" placeholder="введите логин"><br>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="введите пароль"><br>
            <button class="btn btn-success" type="submit">Авторизация</button>
        </form>
    </div>
</body>
</html>