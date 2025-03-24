<?php
namespace App\Controllers;

use App\Models\MenuItem as item;
use App\Controllers\Connection;

class Menu
{
    private $result;
    private $menu;
    private $connection;
    private $filterdResultsAsItems = [];
    public function __construct()
    {
        if (isset($connection) == false) {
            $this->connection = new Connection();
        }
        $this->result = $this->connection->getAllMenu();
        $this->menu = [];

        foreach ($this->result as $r) {
            array_push($this->menu, $this->newItem($r));
        }
    }


    private function makeCatSet()
    {
        $catArray = [];

        for ($i = 0; $i < sizeof($this->menu); $i++) {
            array_push($catArray, $this->menu[$i]->getCategorie());
        }

        $categorien = array_unique($catArray);

        return $categorien;
    }

    public function displayFullMenu()
    {
        $uniqueCats = $this->makeCatSet();
        foreach ($uniqueCats as $categorie) {
            echo "
                <div class='flex flex-col gap-y-5 block w-[85%] p-6 bg-[#F8F7F3] border border-gray-200 rounded-lg shadow ml-5'>
                    <h1 class='mb-2 text-2xl font-bold tracking-tight text-gray-900'> $categorie </h1>"
            ;

            foreach ($this->menu as $item) {
                $comp = $item->getCategorie();

                if ($categorie == $comp) {
                    echo $item->getWrapper();
                }
            }

            echo "</div>";
        }
    }

    public function getFilterdMenuAsItems($searchString)
    {
        $search = "%" . $searchString . "%";
        $results = $this->connection->getFiltertResults($search);
        foreach ($results as $r) {
            array_push($this->filterdResultsAsItems, $this->newItem($r));
        }

        echo "
                <div class='flex flex-col gap-y-5 block w-[85%] p-6 bg-[#F8F7F3] border border-gray-200 rounded-lg shadow ml-5'>
                    <h1 class='mb-2 text-2xl font-bold tracking-tight text-gray-900'> results </h1>"
        ;
        foreach ($this->filterdResultsAsItems as $filterd) {
            echo $filterd->getWrapper();
        }

        echo "</div>";

    }

    public function getMenu(): array
    {
        return $this->menu;
    }

    private function newItem($array)
    {
        $item = new Item($array['menuID'], $array['naam'], $array['allergeen'], $array['prijs'], $array['img_path'], $array['categorie']);
        return $item;
    }
}