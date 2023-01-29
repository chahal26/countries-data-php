<?php
namespace Chahal26\CountriesDataPhp;

Class Countries {

    public static function getCountries(){
        $getData = file_get_contents('../data/name.json');
        $data = json_decode($getData);
        
        return $data;
    }

    private static function getData($value)
    {
        $getData = file_get_contents("../data/$value.json");
        $data = json_decode($getData);
        
        return $data;
    }

    public static function getNames()
    {
        return self::getData('name');
    }
}