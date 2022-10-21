<?php
session_start();
$user = $_GET['user'];
$pass = $_GET['pass'];
$secret = $_GET['secret'];
$pass_repeat = $_GET['pass_repeat'];


if($user===""||$pass===""||$secret==""||$pass_repeat=""){

    $err = 'Не все поля введены';
    $_SESSION["msg"] = $err;
    header("Location: signup.php", true, 303);

}else if(!strcmp($pass,$pass_repeat)){

    $err = 'Пароли не совпадают';
    $_SESSION["msg"] = $err;
    //header("Location: signup.php", true, 303);

}else if(strlen($user)<2 || strlen($user)>32){

    $err = 'Неправильное имя пользователя';
    $_SESSION["msg"] = $err;
    header("Location: signup.php", true, 303);

}else if(strlen($pass)<6){

    $err = 'Слишком маленький пароль';
    $_SESSION["msg"] = $err;
    header("Location: signup.php", true, 303);

}else{

    $link = mysqli_connect('localhost', 'root', '','oh_my_laba');
    if ($link == false){
        print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
    }
    
    mysqli_set_charset($link, "utf8");
    $pass = md5($pass);

    $sql = "SELECT password FROM users WHERE login='$user'";
    $result = mysqli_query($link,$sql);
    $row = mysqli_fetch_array($result);

    if ($row == "") {

        $sql = "INSERT INTO users (login, password, secret) VALUES ('$user', '$pass', '$secret')";
        $result = mysqli_query($link,$sql);

        if ($result == false) {

            print("Произошла ошибка при выполнении запроса");

        }else{

            $_SESSION["user"] = $user;
            $_SESSION["pass"] = $pass;       
            $_SESSION["msg"] = "";
            mysqli_close($link);
            header("Location: hello.php", true, 303);

            }
    }else{

            $err = "Вы уже зарегистрированы";
            $_SESSION["msg"] = $err;
            mysqli_close($link);
            header("Location: signup.php", true, 303);

    }
        
        mysqli_close($link);
}
?>