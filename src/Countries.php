<?php
namespace Chahal26\CountriesDataPhp;

Class Countries {

    public static function getCountries(){
        $names = self::getNames();
        $code3 = self::getCode3();

        $countries = [];
        foreach ($names as $code => $name) {
            $countries[$code]['code3'] = $code3->$code;
            $countries[$code]['name'] = $names->$code;
        }

        return $countries;
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