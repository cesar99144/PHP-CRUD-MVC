<?php

 namespace App\Model;

 Class Conexao{

    private static $instance;

    public static function getConn(){

        if(!isset(self::$instance)):

            self::$instance = new \PDO('mysql:host=localhost; dbname=agenda; charset=utf8;', "root", "12345");

        endif;

        return self::$instance;
    }
 }