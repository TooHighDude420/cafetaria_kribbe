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

    $sth = $conn->prepare("INSERT INTO menu (naam, allergeen, prijs)  VALUES ('$name', '$beschrijving', $prijs)");
    $sth->execute();

    print "<pre>";
    print "<p> cat van item: $i: </p>";
    print_r($data_bet);
    print "</pre>";

    $i++;
}

echo "done";
