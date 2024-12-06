<?php
include "conn.php";

$data_bet = [];
$i = 0;

$csv = fopen("../csv/cafetaria_menu_filled.csv", "r");
while (($data = fgetcsv($csv)) !== false) {
    $data_bet[$i] = $data;

    $name = $data_bet[$i][0];
    $beschrijving = $data_bet[$i][1];
    $prijs = $data_bet[$i][2]; 
    $cat = $data_bet[$i][3];

    print "<pre>";
    print "<p> menu item $i: </p>";
    print_r($name);
    print "<br>";
    print_r($beschrijving);
    print "<br>";
    print_r($prijs);
    print "</pre>";
    

    print "<pre>";
    print "<p> cat van item: $i: </p>";
    print_r($cat);
    print "</pre>";

    $sth = $conn->prepare("INSERT (`naam`, `beschrijving`, `prijs`, `categorie`, `image`) INTO `menu` VALUES (?, ?, ?, 2, null)");
    $sth->bindParam("?", $name);
    $sth->bindParam("?", $beschrijving);
    $sth->bindParam("?", $prijs);
    $sth->execute();

    $i++;
}

print "<pre>";
print "<p> menu items: </p>";
print_r($data_bet);
print "</pre>";



try {
    // $title = $_POST['Title'];
    // $item = $_POST['Item'];
    // $price = $_POST['Price'];
    // $data_add = $conn->prepare(query: "INSERT INTO menu (Title, Item, Price) VALUES ($title, '$item', '$price')");
    // $data_add->execute();
    // header('Location:http://localhost/Tb_site/index.php?page=additem');
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
