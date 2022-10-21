<?php
session_start();

$user = $_GET['user'];
$pass = $_GET['pass'];

if($user===""||$pass===""){

    $err = 'Не все поля введены';
    $_SESSION["msg"] = $err;
    header("Location: login.php", true, 303);

}else{

    $pass = md5($pass);
    $link = mysqli_connect("localhost", "root", "", "oh_my_laba");

    if ($link == false){

        print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());

    }

    mysqli_set_charset($link, "utf8");
    $sql = "SELECT password FROM users WHERE login='$user'";
    $result = mysqli_query($link,$sql);
    $row = mysqli_fetch_array($result);


    if ($row === "") {

        $err = "Пожалуйста, сначала зарегистрируйтесь";
        $_SESSION["msg"] = $err;
        mysqli_close($link);
        header("Location: signup.php", true, 303);

    }else{

        if(!strcmp($pass, $row['password'])){

            $_SESSION["user"] = $user;
            $_SESSION["pass"] = $pass;       
            $_SESSION["msg"] = "";
            mysqli_close($link);
            header("Location: hello.php", true, 303);

        }else{

            $err = "Неверный пароль<br>";
            $_SESSION["msg"] = $err;
            mysqli_close($link);
            header("Location: login.php", true, 303);

        }
    }
    
    mysqli_close($link);
}