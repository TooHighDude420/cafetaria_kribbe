<?php
require_once("../App/Models/Conn.php");
require_once("../App/Controllers/Connection.php");

use App\Models\Conn;
use App\Controllers\Connection;

$c = new Connection();

$c->sendMessage($_POST['email'], $_POST['subject'], $_POST['message']);

header("location: ../index.php?page=home");