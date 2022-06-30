<?php
    if(isset($_POST["age"]) && isset($_POST["surname"]) && isset($_POST["gender"]) && isset($_POST["phone"]) && isset($_POST["name"]) && isset($_POST["middle"]) &&  isset($_POST["login"]) && isset($_POST["password"])):
        require "rab.php";
        $sql = "INSERT INTO users (age, surname, gender, phone_number, name, middle_name,user_login, user_password) VALUES (:age,:surname,:gender,:phone,:name,:middle,:login, :password)";
        $query = $pdo->prepare($sql);
        $query->execute(array(
            "age"=>$_POST["age"],
            "surname"=>$_POST["surname"],
            "gender"=>$_POST["gender"],
            "phone"=>$_POST["phone"],
            "name"=>$_POST["name"],
            "middle"=>$_POST["middle"],
            "login" => $_POST["login"],
            "password" => $_POST["password"]
        ));
        header("Location: http://localhost:8000/login.php");
    else:
?>
<!DOCTYPE html>
<html lang="RU">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Регистрация</title>
    </head>
    <body>
        <header>
        
        </heder>
        <main>
        <form method="post" action="">
                <ul>
                    <li><label for="surname" class="main-text-1">Фамилия:</label> <input type="surname" name="surname" id="surname" placeholder="Ivanov"></li>
                    <br>
                    <li><label for="name" class="main-text-1">Имя:</label> <input type="name" name="name" id="name" placeholder="Ivan"></li>
                    <br>
                    <li><label for="middle" class="main-text-1">Отчество:</label> <input type="middle" name="middle" id="middle" placeholder="Ivanovich"></li>
                    <br>
                    <li><label for="age" class="main-text-1">Возраст:</label> <input type="age" name="age" id="age" placeholder="16=<"></li>
                    <br>
                    <li><label for="gender" class="main-text-1">Пол:</label> <input type="gender" name="gender" id="gender" placeholder="man/women"></li>
                    <br>
                    <li><label for="phone" class="main-text-1">Номер телефона: </label> <input type="phone" name="phone" id="phone" placeholder="79261291420"></li>
                    <br>
                    <li><label for="login" class="main-text-1">Логин:</label> <input type="login" name="login" id="login" placeholder="Ivan123"></li>
                    <br>
                    <li><label for="password" class="main-text-1">Пароль:</label> <input type="password" name="password" id="password" placeholder="12345678"></li>
                    <br>
                    <li><button type="submit" class="button-1">Подтвердить</button></li>
                </ul>
            </form>
        </main>
        <footer>

        </footer>
    </body>
</html>
<?php endif; ?>