<?php
/**
 * Created by PhpStorm.
 * User: Carito
 * Date: 15/05/14
 * Time: 14:23
 */
include_once dirname(dirname(__FILE__)) . '/dao/ActiveRecord/ClientActiveRecord.php';

$document = $_POST['client_document'];
$fisrtName = $_POST['client_firstName'];
$secondName = $_POST['client_secondName'];
$lastName = $_POST['client_lastName'];
$birthday = $_POST['client_birthday'];
$maritalStatus = $_POST['client_maritalStatus'];
$arl = $_POST['client_arl'];
$eps = $_POST['client_eps'];
$compensationFund = $_POST['client_compensationFund'];
$company = $_POST['client_company'];
$affiliateDate = $_POST['client_affiliateDate'];
$agentId = $_POST['client_agentId'];
//echo $document;

if($arl == 1){
    $caseClientId = "B00";
}else{
    $caseClientId == "C00";
}

$client = new ClientActiveRecord();
$resultCreateClient = $client->createNewClient($document, ($fisrtName . ' ' . $secondName), $lastName, $birthday, 
                        $maritalStatus, $caseClientId, $arl, $eps, 
                        $compensationFund, $company, $affiliateDate, $agentId);

echo $resultCreateClient;
//$arrClient = $client->findSpecificClientByDocument($document);

//var_dump($arrClient);

//if (isset($arrClient)) {
////    var_dump($arrClient[0]);
//    echo "Documento de identidad: " . $arrClient[0][0] . "<br>
//            Nombres : " . $arrClient[0][1] . " " . $arrClient[0][2] . "<br>
//            Apellidos: " . $arrClient[0][3] . " " . $arrClient[0][4] . "<br>
//            Telefono Fijo: " . $arrClient[0][5] . "<br> Numero de Celular: " . $arrClient[0][6] ."<br>
//            Dirección: ". $arrClient[0][7];
////    echo "No se encontró el cliente";
//}else{
//    echo "Documento de identidad" . $arrClient[0][0] . "<br>
//            Nombres : " . $arrClient[0][1] . " " . $arrClient[0][2] . "<br>
//            Apellidos: " . $arrClient[0][3] . " " . $arrClient[0][4] . "<br>
//            Telefono Fijo" . $arrClient[0][5] . " Numero de Celular" . $arrClient[0][6] ."<br>
//            Dirección". $arrClient[0][7];
//
//}
