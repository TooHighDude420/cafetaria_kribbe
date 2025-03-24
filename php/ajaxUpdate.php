<?php
require_once "../App/Models/Conn.php";
require_once "../App/Controllers/Connection.php";

use App\Controllers\Connection;

$con = new Connection();

$id = $_POST["id"];
$naam = $_POST["naam"];
$aller = $_POST["aller"];
$img = $_POST["img"];
$cat = $_POST["cat"];
$prijs = $_POST["prijs"];


$status = $con->updateMenu($id, $naam, $aller, $img, $cat, $prijs);

echo $status;