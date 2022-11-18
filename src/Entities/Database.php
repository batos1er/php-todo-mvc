<?php

class Database
{
    private PDO $db;
    use SingletonTrait;
    private function __construct()
    {
        //creation pdo
        try{
            $db = new PDO("mysql:host=3306;dbname=todo", "root","root");
            // Set the PDO error mode to exception
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            die("ERROR: Could not connect. " . $e->getMessage());
        }
    }

    public static function get() : PDO
    {
        return self::getInstance()->db;

    }
}