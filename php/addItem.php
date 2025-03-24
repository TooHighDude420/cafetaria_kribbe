<?php
require_once "../App/Controllers/Connection.php";
require_once "../App/Models/Conn.php";

use App\Controllers\Connection;

$conz = new Connection();

$conz->addItemToMenu($_POST['naam'], $_POST['aller'], $_POST['img_path'], $_POST['cat'], $_POST['prijs']);
header("location: ../index.php?page=menu");
?>