<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once dirname(dirname(__FILE__)) . '/dao/ActiveRecord/ArlActiveRecord.php';

$name = $_POST['arl_name'];

$arl = new ArlActiveRecord();
$resulArlInsert = $arl->insertARL($name);
echo $resulArlInsert;
?>
