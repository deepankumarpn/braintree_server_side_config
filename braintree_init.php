<?php
session_start();
require_once("lib/autoload.php");
if(file_exists(__DIR__ . "/../.env"))
{
	$dotenv = new Dotenv\Dotenv(__DIR__ . "/../");
	$dotenv->load();
}
Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('fbqbbsf4c63yj7wp');
Braintree_Configuration::publicKey('cydwhc7j96wp4fcz');
Braintree_Configuration::privateKey('f7e1f428f1457171d475f2344e1a3574');
?>