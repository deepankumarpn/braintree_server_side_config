<?php
session_start();
require_once("lib/autoload.php");
if(file_exists(__DIR__ . "/../.env"))
{
	$dotenv = new Dotenv\Dotenv(__DIR__ . "/../");
	$dotenv->load();
}
Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('Yours');
Braintree_Configuration::publicKey('Yours');
Braintree_Configuration::privateKey('Yours');
?>
