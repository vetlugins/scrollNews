<?php

$connectDB = array(
    'db' => array(
        'dsn' => 'mysql:dbname=kaluga-poisk;host=localhost',
        'username' => 'admin',
        'password' => '1'
    ),
    'option' => array(
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ // Данные будут представлены в виде объекта
    )
);

include 'DB.php';

$db = new DB($connectDB);
