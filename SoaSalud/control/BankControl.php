<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once dirname(dirname(__FILE__)) . '/dao/ActiveRecord/BankActiveRecord.php';

$name = $_POST['bank_name'];

$bank = new BankActiveRecord();
$resultBankInsert = $bank->insertBank($name);
echo $resultBankInsert;

?>
