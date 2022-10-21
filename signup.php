<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>signup</title>
        <style>
            table {
             width: 300px;
             margin: auto; 
             margin-top:20%;
             border-spacing: 10px 20px;
            }
            td {
             text-align: center; 
             padding: 5px; 
            }
            label{
                color: blue;
            }
            .block1{
                color: red;

            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body>
        <form method="GET" action="signup_index.php" class="form-inline">
            <table>
                <tr>
                    <td colspan="2"> 
                        <div class="block1">
                            <?php
                            session_start();
                            if(isset($_SESSION["msg"])){
                                print($_SESSION["msg"]);
                                session_destroy();
                            }
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <div class="form-group">
                        <td>
                            <label for="login">login</label>
                        </td>
                        <td>
                            <input type="text" name="user" class="form-control"/>
                        </td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td>
                            <label for="secret word">secret word</label>
                        </td>
                        <td>
                            <input type="password" name="secret" class="form-control"/>
                        </td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td>
                            <label for="pwd">password</label>
                        </td>
                        <td>
                            <input type="password" name="pass" class="form-control"/>
                        </td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td>
                            <label for="pwd_repeat">repeat your password</label>
                        </td>
                        <td>
                            <input type="password" name="pass_repeat" class="form-control"/>
                        </td>
                    </div>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="SIGNUP" class="btn btn-primary"/>
                    </td>
        </form>
                    <td>
                        <a href = "login.php">login</href>
                    </td>
                </tr>
        </table>
    </body>
</html>
