<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$file = file_get_contents("products.wsdl");
$xml = simplexml_load_file("products.wsdl");
$xml->registerXPathNamespace("soap", "http://schemas.xmlsoap.org/wsdl/soap/");

$xml->registerXPathNamespace("a", "http://schemas.xmlsoap.org/wsdl/");
//$xml->registerXPathNamespace("xsd", "http://www.w3.org/2001/XMLSchema");

/** @var SimpleXMLElement */
$e = $xml->xpath("//a:types/xsd:schema")[0];
print_r($e->attributes());

//print_r($xml->xpath("//a:types/xsd:schema"));
