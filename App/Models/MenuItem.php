<?php

namespace App\Models;
use PDO, PDOException;

class MenuItem
{
    private $menuItemID;
    private $naam = '';
    private $allergeen = '';
    private $prijs = 0.00;
    private $imgPath = '';
    private $categorie = '';

    public function __construct($menuItemID, $naam, $allergeen, $prijs, $imgPath, $categorie)
    {
        $this->menuItemID = $menuItemID;
        $this->naam = $naam;
        $this->allergeen = $allergeen;
        $this->prijs = $prijs;
        $this->imgPath = $imgPath;
        $this->categorie = $categorie;
    }

    public function getAll(): array
    {
        $all = [
            $this->menuItemID,
            $this->naam,
            $this->prijs,
            $this->imgPath,
            $this->categorie
        ];

        return $all;
    }

    // <div onclick="addToCart(&quot;friet oorlog&quot;, &quot; pindas &quot; , &quot;4.50&quot;)" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">

    public function gettWrapper()
    {
        $wrapper = "
            <div onclick='addToCart(&quot;$this->naam&quot;, &quot;$this->allergeen &quot;, &quot;$this->prijs&quot;)' class='block w-full p-6 bg-white border border-gray-200 rounded-lg shadow'>
                <h5 class='mb-2 text-2xl font-bold tracking-tight text-gray-900'>".$this->naam."</h5>
                <p class='font-normal text-gray-700'>". $this->allergeen ."</p>
                <p class='font-normal text-gray-700'>". $this->prijs ."</p>
            </div>
        ";

        return $wrapper;
    }
}