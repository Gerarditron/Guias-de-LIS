<?php

namespace Model;

class ActiveRecord{
    protected static $db;


    public static function setDB($database){
        self::$db=$database;
    }

}