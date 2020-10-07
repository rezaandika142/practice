<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=game","root","",[PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION]);

} catch (Exception $e) {
    echo $e->getMessage();
}

$daftar=$db->query("select * from game"); //prepare statment

$data_daftar=$daftar->fetchAll();  //execetue and get data as array

// var_dump($data_daftar$daftar);