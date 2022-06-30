<?php
    require "bd.php";
    session_start();
    function saveAuth($id) {
        global $pdo;
        $_SESSION["id"] = $id;
        $sql = "SELECT id_users, user_login, rules FROM users JOIN groups WHERE users.id_group = groups.id_group AND ID_Customers = :id";
        $query = $pdo->prepare($sql);
        $query->execute(array("id" => $id));
        $user = $query->fetch(PDO::FETCH_ASSOC);
        $_SESSION["rule"] = $user["rules"];
        $_SESSION["login"] = $user["user_Login"];
    }
    function checkRule() {
        global $pdo;
        if(isset($_SESSION["id"]) && isset($_SESSION["rule"]) && isset($_SESSION["login"])) {
            $sql = "SELECT id_users, user_login, rules FROM users JOIN groups WHERE users.id_group = groups.id_group AND ID_Customers = :id";
            $query = $pdo->prepare($sql);
            $query->execute(array("id" => $_SESSION["id"]));
            $user = $query->fetch(PDO::FETCH_ASSOC);
            if($_SESSION["rule"] == $user["rules"]) {
                return $_SESSION["rule"];
            }
            else {
                $_SESSION["rule"] = $user["rules"];
                return $user["rules"];
            }
        }
        else {
            return 5;
        }
    }
?>