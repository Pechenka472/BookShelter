<?php
    $user_name = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $inst_name = filter_var(trim($_POST['inst_name']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    $password = md5($password."i2fyoul5o5oki2nto15");


    $mysql =  new mysqli('localhost', 'p510104_register-bd', 'bK9jH8tD', 'p510104_register-bd'); # создание бд
    $mysql->query("INSERT INTO `users` (`login`, `inst`, `password`) VALUES('$user_name','$inst_name','$password')"); #отправка данных в бд
    $mysql->close(); #закрытие бд

    header('Location: /'); #переадресация
?>