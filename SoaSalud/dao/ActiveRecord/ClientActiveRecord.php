<?php

/**
 * Created by PhpStorm.
 * User: Carito
 * Date: 12/05/14
 * Time: 22:23
 */
include_once dirname(dirname((__FILE__))) . '/adodb/adodb-active-record.inc.php';
include_once dirname(dirname((__FILE__))) . '/SingletonConnection.php';

class ClientActiveRecord extends ADODB_Active_Record {
    private $connection;

    public function __construct() {
        //Invocar al contructor de la clase padre
        //1.Objeto de conexion
        $this->connection = SingletonConnection::getInstance();
        //2.Estableser el objeto de conexion
        //Para la clase ADODB Activ record
        parent::SetDatabaseAdapter($this->connection);
        //3.Indica de que tabla se va a hacer el activrecord
        parent::__construct("client");
    }

//    public function getClients() {
//        $arrClient = array();
//        $result = $this->connection->execute('select document,
//                                                     firstName,
//                                                     secondName,
//                                                     firstLastName,
//                                                     secondLastName,
//                                                     phone,
//                                                     cellPhone,
//                                                     address
//                                               from client');
//        $arrResult = $result->getarray();
//
//        foreach ($arrResult as $key => $value) {
//            $arrClient[$key] = array(
//                $value["document"],
//                $value["firstName"],
//                $value["secondName"],
//                $value["firstLastName"],
//                $value["secondLastName"],
//                $value["phone"],
//                $value["cellPhone"],
//                $value["address"]
//            );
//        }
//        return $arrClient;
//    }

  
    public function createNewClient($document, $name, $lastname, $birthday, $maritalStatus, $caseClientId, $arl, $eps, $compensationFund, $company, $affiliateDate, $agentId) {

        $arr = array();
        $arr['agent_id'] = $agentId;
        $arr['document'] = $document;
        $arr['name'] = $name;
        $arr['last_name'] = $lastname;
        $arr['birthday'] = $birthday;
        $arr['marital_status_id'] = $maritalStatus;
        $arr['case_client_id'] = '004';
        $arr['arl_id'] = $arl;
        $arr['eps_id'] = $eps;
        $arr['company_id'] = $company;
        $arr['compensation_fund_id'] = $compensationFund;
        $arr['affiliate_date'] = $affiliateDate;
        $arr['status_id'] = 1;

        $result = $this->connection->AutoExecute('client', $arr, 'INSERT');

        if ($result) {
//            $resultUpdateCaseClientId = $this->findIdToClient($document);
            $resultUpdateCaseClientId = $this->updateClient($document, $caseClientId);
            if($resultUpdateCaseClientId){
                return $resultUpdateCaseClientId;
            }
            else{
                return false;
            }
        } else {
            return false;
        }
    }

    public function updateClient($document, $caseClientId) {

        $clientId = $this->findIdToClient($document);
        $record["case_client_id"] = $caseClientId . $clientId;

        $resul = $this->connection->AutoExecute('client', $record, 'UPDATE', 'document="'.$document.'"');

         if ($resul) {
             
            return true;
        } else {
            return false;
        }
    }
    
    public function findIdToClient($document){
        $sql = 'SELECT * FROM client WHERE document = ' . $document . '';
        $resultConsult =  $this->connection->Execute($sql);
        $arrResult = $resultConsult->getarray();

        foreach ($arrResult as $key => $value) {
            $arrClient[$key] = array(
                $value["client_ID"]
            );
        }
        
        return $arrClient[0][0];
        
    }

}

//$a = new ClientActiveRecord();
//$result =$a->createNewClient('265462', 'Carmen', 'Ramos', '2004-06-22', 1, "C00", 1, 1, 1, 1, "2014-06-22", 1);
////var_dump($a);
////$result =$a->updateClient('134234243', 'B00');
//var_dump($result);

?>