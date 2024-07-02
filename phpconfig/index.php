<?php

// Hardcoded values
/*
$hostname = "localhost";
$username = "db_username";
$password = "db_password";
$database = "db_name";
$mysqli = new mysqli($hostname,
                     $username,
                     $password,
                     $database);
*/

// Settings defined in PHP - constants and an array
/*
require __DIR__ . "/config.php";
$mysqli = new mysqli(DATABASE_HOSTNAME,
                     DATABASE_USERNAME,
                     DATABASE_PASSWORD,
                     DATABASE_NAME);
$mysqli = new mysqli($config["database"]["hostname"],
                     $config["database"]["username"],
                     $config["database"]["password"],
                     $config["database"]["database"]);
*/

// INI file
// $config = parse_ini_file(__DIR__ . "/config.ini", true);

// .env
require __DIR__ . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
// var_dump($dotenv->load()["DATABASE_HOSTNAME"]);
// exit();

// $mysqli = new mysqli(
//     getenv("DATABASE_HOSTNAME"),
//     getenv("DATABASE_USERNAME"),
//     getenv("DATABASE_PASSWORD"),
//     getenv("DATABASE_NAME")
// );

/*
echo $_ENV["DATABASE_HOSTNAME"]."\n";
echo $_ENV["DATABASE_USERNAME"]."\n";
echo  $_ENV["DATABASE_PASSWORD"]."\n";
echo  $_ENV["DATABASE_NAME"]."\n";
*/ 

$mysqli = new mysqli(
    $_ENV["DATABASE_HOSTNAME"],
    $_ENV["DATABASE_USERNAME"],
    $_ENV["DATABASE_PASSWORD"],
    $_ENV["DATABASE_NAME"]
);
