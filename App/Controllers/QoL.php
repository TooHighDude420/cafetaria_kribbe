<?php
namespace App\Controllers;

Class QoL{
    public function setInternalHeaderUrl($value):string{
        $returnString = "index.php?page=" . $value;
        
        return $returnString;
    }

    
}