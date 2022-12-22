<?php 
 class DB{
    static public function connect(){
        $db = new PDO("mysql:host=localhost;dbname=croi","root", "");
        $db->exec("set names utf8");//afficher les noms qui contient des accents
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $db;
    }
    
}
?>