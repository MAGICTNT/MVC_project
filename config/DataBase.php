<?php

class DataBase
{
    private static $connexion ='';
    private static $host ='localhost';
    private static $nomBase ='france';
    private static $userBdd ='root';
    private static $userMdp ='';

    public function __construct()
    {}

    public static function connexionDataBase()
    {
        try
        {
            $connexion = new PDO('mysql:host='.self::$host.';bdname='.self::$nomBase, self::$userBdd, self::$userMdp);
            echo 'connecté';
        
        }
        catch(PDOExeption $error)
        {
            echo $error->getMessage();
        }
        return $connexion;
    }
}