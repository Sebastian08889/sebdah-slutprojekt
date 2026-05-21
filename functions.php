<?php

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

session_start();

function connectToDb() {
    $dbHost = 'ostrawebb.se';
    $dbUser = "wsp2526_sebdah";
    $dbPassword = "uburigos11";
    $dbDatabase = "wsp2526_sebdah";
    $db = new mysqli($dbHost, $dbUser, $dbPassword, $dbDatabase);    
    return $db;
}


?>