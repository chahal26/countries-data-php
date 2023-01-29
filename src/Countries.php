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
        $data = file_get_contents("../data/$value.json");
        return json_decode($data);
    }

    public static function getNames()
    {
        return self::getData('name');
    }

    public static function getCode3()
    {
        return self::getData('code3');
    }
}