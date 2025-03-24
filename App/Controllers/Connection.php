<?php
namespace App\Controllers;
use App\Models\Conn;
use PDO, PDOException;

class Connection
{
    public function __construct()
    {
        Conn::makeCon();
    }

    //admin based functions
    //inserts a user into the users database
    public function insertUser($username, $password, $role)
    {
        $sth = Conn::$conn->prepare("INSERT INTO users (username, password, role)  VALUES (:username, :password, :role)");
        $sth->bindParam('username', $username, PDO::PARAM_STR);
        $sth->bindParam('password', $password, PDO::PARAM_STR);
        $sth->bindParam('role', $role);
        $sth->execute();
    }
    //selects username and password for login
    public function selectFromUsers($username){
        $sth = Conn::$conn->prepare("SELECT username, password, role FROM users WHERE username = :user");
        $sth->bindParam('user', $username, PDO::PARAM_STR);
        $sth->execute();
        $res = $sth->fetchAll(PDO::FETCH_ASSOC);
        
        return $res;
    }
    // selects id, username,role for display in a table
    public function slectAllFromUsers(){
        $sth = Conn::$conn->prepare("SELECT users.userID, users.username, roles.role FROM users JOIN roles on roles.roleID = users.role");
        $sth->execute();
        $res = $sth->fetchAll(PDO::FETCH_ASSOC);
        
        return $res;
    }

    // menu based functions
    //fetch and return the whole menu
    public function getAllMenu()
    {
        $stmt = Conn::$conn->prepare("SELECT menu.menuID, menu.naam, menu.allergeen, menu.img_path, categorien.categorie, menu.prijs FROM `menu` JOIN categorien ON categorien.catID = menu.categorie");
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }

    public function getAllCat(){
        $stmt = Conn::$conn->prepare("SELECT * FROM `categorien`");
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }

    public function getFromMenuIndex($index){
        $stmt = Conn::$conn->prepare("SELECT menu.naam, menu.allergeen, menu.img_path, categorien.categorie, menu.prijs FROM `menu` WHERE menu.menuID = $index JOIN categorien ON categorien.catID = menu.categorie");
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }

    //manmenu based function
    //update menu from manmenu
    public function  updateMenu($id, $naam, $aller, $img, $cat, $prijs){
        try {
            $stmt = Conn::$conn->prepare("UPDATE menu JOIN categorien ON categorien.catID = menu.categorie SET menu.naam = :naam, menu.allergeen = :aller, menu.img_path = :img, categorien.categorie = :cat, menu.prijs = :prijs WHERE menuID = :id");
            $stmt->bindParam("naam", $naam);
            $stmt->bindParam("aller", $aller);
            $stmt->bindParam("img", $img);
            $stmt->bindParam("cat", $cat);
            $stmt->bindParam("prijs", $prijs);
            $stmt->bindParam("id", $id);
            $stmt->execute();
            return true;
        }
        catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    public function addItemToMenu($naam, $aller, $img, $cate, $prijs){
        $stmt = Conn::$conn->prepare("INSERT INTO menu (naam, allergeen, img_path, categorie, prijs) VALUES (:naam, :aller, :img, :cate, :prijs)");
        $stmt->bindParam("naam", $naam);
        $stmt->bindParam("aller", $aller);
        $stmt->bindParam("img", $img);
        $stmt->bindParam("cate", $cate);
        $stmt->bindParam("prijs", $prijs);
        $stmt->execute();
    }

    public function deleteFromMenu($id){
        $stmt= Conn::$conn->prepare("DELETE FROM menu WHERE menuID=:id");
        $stmt->bindParam("id", $id);
        $stmt->execute();
    }

    public function getFiltertResults($searh){
        $stmt = Conn::$conn->prepare("SELECT * FROM menu WHERE naam LIKE :search OR allergeen LIKE :search");
        $stmt->bindParam("search", $searh);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $res;
    }
}

