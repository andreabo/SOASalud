<?php
/**
 * Created by PhpStorm.
 * User: Carito
 * Date: 12/05/14
 * Time: 22:15
 */

//Incuirl el archivo que necesito
include_once "adodb/adodb.inc.php";
include_once 'Config-bd.php';

class SingletonConnection {
    //Almacena el unico objeto al crearse
    private static $instance;

    private function __construct() {
        ;
    }

    public static function getInstance(){
        if (!isset(self::$instance)) {
            self::$instance = ADONewConnection('mysql');
//            self::$instance->debug = true;
            self::$instance->setFetchMode(ADODB_FETCH_ASSOC);
            self::$instance->Connect(SERVER,USER,PASS,BD);
        }
        return self::$instance;
    }
}

//$db = SingletonConnection::getInstance();
//var_dump($db);


?>
