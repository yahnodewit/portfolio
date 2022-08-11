<?php
class DataBase
{
    private static $objInstance;

    public static function getInstance(): object
    {

        if(!self::$objInstance)
        {
            self::$objInstance = new PDO("mysql:host=ID211210_vanillaBlogYDW.db.webhosting.be;dbname=ID211210_vanillaBlogYDW", "ID211210_vanillaBlogYDW", "Yahno123");
            self::$objInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$objInstance;

    }

    final public static function __callStatic( $chrMethod, $arrArguments )
    {

        $objInstance = self::getInstance();

        return call_user_func_array(array($objInstance, $chrMethod), $arrArguments);
    }
}