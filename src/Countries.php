<?php
namespace Chahal26\CountriesDataPhp;

Class Countries {

    public static function getCountries(){
        $getData = file_get_contents('../data/countries.json');
        $data = json_decode($getData);
       return collect($data);
    }
}