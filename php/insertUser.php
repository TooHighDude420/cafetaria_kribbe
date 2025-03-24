<?php
    require_once "../App/Controllers/Connection.php";
    require_once "../App/Models/Conn.php";

    use App\Controllers\Connection;
    
    $connection = new Connection();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $hashedPass = password_hash($password, PASSWORD_DEFAULT);

    $connection->insertUser($username,$hashedPass,$role);

    setcookie("addeduser", true, 0, "/");

    header("location: ../index.php?page=adduser");