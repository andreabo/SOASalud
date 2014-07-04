<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once dirname(dirname(__FILE__)) . '/dao/ActiveRecord/EpsActiveRecord.php';

$name = $_POST['eps_name'];

$eps = new EpsActiveRecord();
$resulEpsInsert = $eps->insertEPS($name);
echo $resulEpsInsert;

?>
