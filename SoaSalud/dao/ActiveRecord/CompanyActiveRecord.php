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

class CompanyActiveRecord extends ADODB_Active_Record{
    private $connection;

    public function __construct() {
        //Invocar al contructor de la clase padre
        //1.Objeto de conexion
        $this->connection = SingletonConnection::getInstance();
        //2.Estableser el objeto de conexion
        //Para la clase ADODB Activ record
        parent::SetDatabaseAdapter($this->connection);
        //3.Indica de que tabla se va a hacer el activrecord
        parent::__construct("company");
    }
    
    public function insertCompany($name, $address, $phone, $ext=NULL){
        $arr = array();
        $arr['name'] = $name;
        $arr['address'] = $address;
        $arr['phone'] = $phone;
        $arr['ext'] = $ext;
        
        $result = $this->connection->AutoExecute('company', $arr, 'INSERT');
        
        if($result){
            return true;
        }else{
            return false;
        }
    }
}
//$a = new CompanyActiveRecord();
////$result = $a->insertCompany("Sucursales LATD", "Calle 34 F 34 34", "34245234");
//$result = $a->insertCompany("Otra company", "calle 54 No 23 - 23", "3342534", "242");
//var_dump($result);

?>
