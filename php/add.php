<?php
include "conn.php";

$data_bet = [];
$i = 0;

$csv = fopen("../csv/cafetaria_menu_filled.csv", "r");
while (($data = fgetcsv($csv)) !== false){
   $data_bet[$i] = $data;
   $i++;
}

print "<pre>";
print"<p> menu items: </p>";
print_r($data_bet);
print "</pre>";


try {
    // $title = $_POST['Title'];
    // $item = $_POST['Item'];
    // $price = $_POST['Price'];
    // $sth = $conn->prepare("INSERT (`naam`, `beschrijving`, `prijs`, `categorie`, `image`) INTO `menu` VALUES (`kapsalon kip`, `ftiet, kipdoner, sla en kaas`, 15.50, 2, null)");
    // $sth->execute();
    // $data_add = $conn->prepare(query: "INSERT INTO menu (Title, Item, Price) VALUES ($title, '$item', '$price')");
    // $data_add->execute();
    // header('Location:http://localhost/Tb_site/index.php?page=additem');
} catch (PDOException $e) {
    echo "Error: ". $e->getMessage();
}
