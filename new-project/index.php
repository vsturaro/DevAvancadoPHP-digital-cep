<?php

require_once "vendor/autoload.php";

use \Vander\DigitalCep\Search;

$busca = new Search;

print_r($busca->getAddressFromZipcode('79021000'));
