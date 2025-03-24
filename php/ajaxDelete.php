<?php
require_once "../App/Models/Conn.php";
require_once "../App/Controllers/Connection.php";

use App\Controllers\Connection;

$con = new Connection();

$id = $_POST["id"];

$con->deleteFromMenu($id);