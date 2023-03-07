<?php

require_once "vendor/autoload.php";

use \Joel\BuscaCep\Search;

$busca = new Search();

$resultado = $busca -> getAddressFromZipcode('56332-016');

var_dump($resultado);