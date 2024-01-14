<?php
    $login = filter_var(trim($_POST['login']));
    $name = filter_var(trim($_POST['name']));
    $pass = filter_var(trim($_POST['pass']));
    if(mb_strlen($login)<5||mb_strlen($login)>90){
        echo "недопустимая длинна логина";
        exit();
    }else if(mb_strlen($name)<3||mb_strlen($name)>50){
        echo "недопустимая длинна имени";
        exit();
    }else if(mb_strlen($pass)<5||mb_strlen($pass)>20){
        echo "недопустимая длинна пароля";
        exit();
    }
    $pass=md5($pass."pqweoi341");
    $mysql=new mysqli('localhost:8889','root','root','ornament');
    $mysql->query("INSERT INTO `users`(`login`, `pass`, `name`) VALUES('$login','$pass','$name')");
    $mysql->close();
    

    
    
    
?>