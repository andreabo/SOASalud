<?php

include_once dirname(dirname((__FILE__))) . '/adodb/adodb-active-record.inc.php';
include_once dirname(dirname((__FILE__))) . '/SingletonConnection.php';

class AgentActiveRecord extends ADODB_Active_Record{

    private $connection;

    public function __construct() {
        //Invocar al contructor de la clase padre
        //1.Objeto de conexion
        $this->connection = SingletonConnection::getInstance();
        //2.Estableser el objeto de conexion
        //Para la clase ADODB Activ record
        parent::SetDatabaseAdapter($this->connection);
        //3.Indica de que tabla se va a hacer el activrecord
        parent::__construct("agent");
    }

  
    public function createNewAgent($document, $name, $lastname, $pass) {

        $arr = array();
        $arr['document'] = $document;
        $arr['name'] = $name;
        $arr['last_name'] = $lastname;
        $arr['pass'] = $lastname;
        

        $result = $this->connection->AutoExecute('agent', $arr, 'INSERT');

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

}

$a = new AgentActiveRecord();
$result =$a->createNewAgent('265462', 'Carmen', 'Ramos', 'lalalalalal');
//var_dump($a);
//$result =$a->updateClient('134234243', 'B00');
var_dump($result);
        
?>