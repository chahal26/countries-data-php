<?php
require_once "../vendor/autoload.php";

$countries = \Chahal26\CountriesDataPhp\Countries::getCountries();
echo "<pre>";
print_r($countries);
