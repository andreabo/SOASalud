<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once dirname(dirname(__FILE__)) . '/dao/ActiveRecord/AgentActiveRecord.php';

$document = $_POST['agent_document'];
$firstName = $_POST['agent_firstName'];
$secondName = $_POST['agent_secondName'];
$lastName = $_POST['agent_lastName'];
$pass = $_POST['agent_pass'];

$agent = new AgentActiveRecord();
$resulAgentCreate = $agent->createNewAgent($document, ($firstName . ' ' . $secondName), $lastName, sha1($pass));
echo $resulAgentCreate;
?>
