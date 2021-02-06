<?php

require_once "vendor/autoload.php";

use Vander\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('79022210');

print_r($resultado);