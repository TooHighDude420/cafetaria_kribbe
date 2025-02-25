<?php
namespace App\Models;
    use PDO, PDOException;
    class Conn{
        public static $conn;

        public static function makeCon(): PDO
        {
            if (isset(Conn::$conn) == false) {
                $servername = "127.0.0.1";
                $username = "root";
                $password = "";
                $dbname = "tb_site";

                try {
                    Conn::$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    Conn::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    return Conn::$conn;
                } catch (PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                    return null;
                }
            }
        }

         static function getAllMenu(){
            $stmt = Conn::$conn->prepare("SELECT menu.menuID, menu.naam, menu.allergeen, menu.img_path, categorien.categorie, menu.prijs FROM `menu` JOIN categorien ON categorien.catID = menu.categorie");
            $stmt->execute();
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $res;
        }

        public static function getConn()
        {
            return Conn::$conn;
        }

        
    }
