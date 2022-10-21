<?php
session_start();
$user = $_GET['user'];
$pass = $_GET['pass'];
$secret = $_GET['secret'];
$pass_repeat = $_GET['pass_repeat'];


if($user===""||$pass===""||$secret==""||$pass_repeat=""){

    $err = 'Не все поля введены';
    $_SESSION["msg"] = $err;
    header("Location: recovery.php", true, 303);

}else if(!strcmp($pass,$pass_repeat)){

    $err = 'Пароли не совпадают';
    $_SESSION["msg"] = $err;
    header("Location: recovery.php", true, 303);

}else if(strlen($user)<2 || strlen($user)>32){

    $err = 'Неправильное имя пользователя';
    $_SESSION["msg"] = $err;
    header("Location: recovery.php", true, 303);

}else if(strlen($pass)<6){

    $err = 'Слишком маленький пароль';
    $_SESSION["msg"] = $err;
    header("Location: recovery.php", true, 303);

}else{

    $link = mysqli_connect('localhost', 'root', '','oh_my_laba');
    if ($link == false){
        print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
    }
    
    mysqli_set_charset($link, "utf8");
    $pass = md5($pass);

    $sql = "SELECT secret FROM users WHERE login='$user'";
    $result = mysqli_query($link,$sql);
    $row = mysqli_fetch_array($result);

    if ($row == "") {

        $err = "Пользователь не зарегистрирован";
        $_SESSION["msg"] = $err;
        mysqli_close($link);
        header("Location: recovery.php", true, 303);

    }else{

        if(!strcmp($row['secret'], $secret)){

            $sql = "UPDATE users SET password='$pass' WHERE login='$user' and secret='$secret'";
            $result = mysqli_query($link,$sql);

            if ($result == false) {

                print("Произошла ошибка при выполнении запроса");
    
            }else{
    
                $_SESSION["user"] = $user;
                $_SESSION["pass"] = $pass;       
                $_SESSION["msg"] = "Пароль успешно обновлен";
                mysqli_close($link);
                header("Location: login.php", true, 303);
    
            }

        }else{
            $err = "Неправильное тайное слово";
            $_SESSION["msg"] = $err;
            mysqli_close($link);
            header("Location: recovery.php", true, 303);
        }
    }
        
        mysqli_close($link);
}
?>