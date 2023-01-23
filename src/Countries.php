<?php
namespace Chahal26\CountriesDataPhp;

Class Countries {

    /**
     * Path to json file
     */
    public static $file_path = '../data/countries.json';

    /**
     * Get all data
     */
    public static function getCountries()
    {
        $getData = file_get_contents(static::$file_path);
        $data = json_decode($getData);
       return collect($data);
    }
}