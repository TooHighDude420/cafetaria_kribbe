<?php

namespace App\Models;

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

    public function getWrapper()
    {
        $wrapper = "
            <div onclick='addToCart([&quot;$this->naam&quot;, &quot;$this->allergeen&quot;, $this->prijs])' class='block w-full p-6 bg-white border border-gray-200 rounded-lg shadow'>
                <h5 class='mb-2 text-2xl font-bold tracking-tight text-gray-900'>".$this->naam."</h5>
                <p class='font-normal text-gray-700'>". $this->allergeen ."</p>
                <p class='font-normal text-gray-700'>". $this->prijs ."</p>
            </div>
        ";

        return $wrapper;
    }

    function getCategorie(){
        return $this->categorie;
    }

    function getNaam(){
        return $this->naam;
    }

    function getID(){
        return $this->menuItemID;
    }

    function getPrijs(){
        return $this->prijs;
    }

    function getPath(){
        return $this->imgPath;
    }

    function getAllergeen(){
        return $this->allergeen;
    }
}