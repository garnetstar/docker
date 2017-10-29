<?php
require __DIR__ . '/vendor/autoload.php';

error_reporting(E_ALL);
ini_set('display_errors', 'on');

//phpinfo();

$client = new nusoap_client("products.wsdl", true);

$error = $client->getError();
if ($error) {
	echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
}

$result = $client->call("getProd", array("category" => "books"));

if ($client->fault) {
	echo "<h2>Fault</h2><pre>";
	print_r($result);
	echo "</pre>";
}
else {
	$error = $client->getError();
	if ($error) {
		echo "<h2>Error</h2><pre>" . $error . "</pre>";
	}
	else {
		echo "<h2>Books</h2><pre>";
		echo $result;
		echo "</pre>";
	}
}

