<?php
    require "vendor/autoload.php";
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    require 'src/config/database.php';

    use Model\ActiveRecord;

    $db=conectarDB();
    ActiveRecord::setDB($db);
?>