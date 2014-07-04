<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once dirname(dirname(__FILE__)) . '/dao/ActiveRecord/CompensationFundActiveRecord.php';

$name = $_POST['compensationFund_name'];

$compensationFund = new CompensationFund();
$resulcompensationFundInsert = $compensationFund->insertCompensationFund($name);
echo $resulcompensationFundInsert;

?>
