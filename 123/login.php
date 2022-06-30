<!DOCTYPE html>
<html lang="RU">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Авторизация</title>
    </head>
    <body>
        <header>
        
        </header>
        <main>
            <?php
                require "rab.php";
                if(isset($_POST["login"]) && isset($_POST["password"])) {
                $sql = "SELECT * FROM users WHERE user_login = :login AND BINARY user_password = :password";
                $query = $pdo->prepare($sql);
                $query->execute(array(
                    "login" => $_POST["login"],
                    "password" => $_POST["password"]
                ));
                    if($query->rowCount() == 1) {
                        $user = $query->fetch(PDO::FETCH_ASSOC);
                        saveAuth($user["id_users"]);
                        header("Location: http://localhost:8000/index.php");/*index.php-это главная страница твоя*/
                    }   
                    else {
                        include("auth.php");
                        echo "<p>Имя пользователя или пароль указаны неверно.</p>";
                    }
                }
                else {
                    include("auth.php");
                }
            ?>
        </main>
        <footer>
        
        </footer>
    </body>
</html>