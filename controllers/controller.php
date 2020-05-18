<?php

require_once("../models/model.php");

$cliente = new Cliente('prueba', '9zIDkLTMWtSMmlnh');
$tokenString = $cliente->getchallenge();
$accessKey = $cliente->getAccessKey($tokenString);
$Session = $cliente->login($accessKey);
$SessionName = $Session['result']['sessionName'];

$Contactos = $cliente->getContacts($SessionName);

require_once("../views/view.php");

?>