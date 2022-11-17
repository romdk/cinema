<?php
namespace Model;

abstract class Connect {
    const HOST = 'Localhost';
    const DB = 'cinema_roman';
    const USER = 'root';
    const PASS = '';

    public static function seConnecter() {
        try {
            return new \PDO(
                'mysql:host='.self::HOST.';dbname='.self::DB.';charset=utf8',self::USER,self::PASS);
        } catch(\PDOException $ex) {
            return $ex->getMessage();
        }        
    }
}

?>