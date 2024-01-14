<?php
    $login = filter_var(trim($_POST['login']));
    $name = filter_var(trim($_POST['name']));
    $pass = filter_var(trim($_POST['pass']));
    
    $pass=md5($pass."pqweoi341");
    $mysql=new mysqli('localhost:8889','root','root','ornament');

    $result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass'");
    $user=$result->fetch_assoc();
    if($user==0){
        echo "такой пользователь не найден";
        exit();
    }
    setcookie('user', $user['name'], time()+3600, "/");


    
    $mysql->close();
    header('Location: /');

    
    
    
?>