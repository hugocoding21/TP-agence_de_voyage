<?php

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "agence de voyage");

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);


$dsn = "mysql:dbname=" . DB_NAME . ";host=" . DB_HOST;


try {

    $db = new PDO($dsn, DB_USER, DB_PASS);

    $db->exec("SET NAMES utf8");

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die($e->getMessage());
}