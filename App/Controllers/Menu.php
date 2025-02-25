<?php
namespace App\Controllers;

use App\Models\MenuItem as item;
use App\Models\Conn as conn;
use PDO, PDOException;

class Menu
{
    private $result;
    private $menu;
    private $fullMenu;

    public function __construct()
    {
        conn::makeCon();

        $this->result = conn::getAllMenu();
        $this->menu = [];

        foreach ($this->result as $r) {
            array_push($this->menu, new item($r['menuID'], $r['naam'],$r['allergeen'],  $r['prijs'], $r['img_path'], $r['categorie']));
        }

        $this->setFullMenu();
    }

    private function setFullMenu(){
        $menuList = menu::getMenu();
        $menuItem = $menuList[0];
        $data = $menuItem->getAll();
        $this->fullMenu = [];

        foreach ($menuList as $m) {
            $data = $m->getAll();
            array_push($this->fullMenu, $data);
        }
    }

    public function getFullMenu(){
        return $this->fullMenu;
    }

    public function getWrapperFromIndex($index)
    {
        $menu = $this->menu;
        $sel = $menu[$index];

        return $sel->gettWrapper();
    }

    public function getAllWrappers()
    {
        $wrapperList = [];

        foreach ($this->menu as $m) {
            array_push($wrapperList, $m->getWrapper());
        }

        return $wrapperList;
    }

    public function getMenu(): array
    {
        return $this->menu;
    }
}