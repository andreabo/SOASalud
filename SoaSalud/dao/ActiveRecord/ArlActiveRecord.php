<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of epsActiveRecord
 *
 * @author Carito
 */

include_once dirname(dirname((__FILE__))) . '/adodb/adodb-active-record.inc.php';
include_once dirname(dirname((__FILE__))) . '/SingletonConnection.php';

class ArlActiveRecord extends ADODB_Active_Record{
    private $connection;

    public function __construct() {
        //Invocar al contructor de la clase padre
        //1.Objeto de conexion
        $this->connection = SingletonConnection::getInstance();
        //2.Estableser el objeto de conexion
        //Para la clase ADODB Activ record
        parent::SetDatabaseAdapter($this->connection);
        //3.Indica de que tabla se va a hacer el activrecord
        parent::__construct("arl");
    }
    
    public function insertARL($arlName){
        $arr = array();
        $arr['name'] = $arlName;
        
        $result = $this->connection->AutoExecute('arl', $arr, 'INSERT');
        
        if($result){
            return true;
        }else{
            return false;
        }
        
    }
    
}

?>
