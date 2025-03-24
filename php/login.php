<?php
    require_once "../App/Controllers/Connection.php";
    require_once "../App/Models/Conn.php";

    use App\Controllers\Connection;
    
    $connection = new Connection();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $results = $connection->selectFromUsers($username);
    
    if (sizeof($results) == 0){
        echo "user not found";
    } else {
        if(password_verify($password, $results[0]['password'])){
            echo "login succesfull";
            setcookie("loggedIn", true, 0 ,"/");
            setcookie("username", $username, 0 ,"/");
            setcookie("role", $results[0]['role'], 0 ,"/");

            header("location:../index.php?page=dashboard");
        } else {
            echo "wrong password";
            // wrong username/password
        }
    }