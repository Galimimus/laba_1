
<?php
session_start();
if (!isset($_SESSION["user"]) || !isset($_SESSION["pass"])){
    $_SESSION["msg"] = "У вас нет прав доступа";
    header("Location: login.php", true, 303);
}
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <?php 
            function endSession(){
                session_destroy();
            }
        ?>
    </head>
    <body>
        <h1>Hello, <?php echo $_SESSION["user"]; ?>!</h1>
        <a href = "signup.php" onclick="endSession()">logout</href>
    </body>
</html>