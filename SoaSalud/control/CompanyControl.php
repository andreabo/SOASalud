<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once dirname(dirname(__FILE__)) . '/dao/ActiveRecord/CompanyActiveRecord.php';

$name = $_POST['company_name'];
$address = $_POST['company_address'];
$phone = $_POST['company_phone'];
$ext = $_POST['company_ext'];

$company = new CompanyActiveRecord();
$resulCompanyInsert = $company->insertCompany($name, $address, $phone, $ext);
echo $resulCompanyInsert;
?>
