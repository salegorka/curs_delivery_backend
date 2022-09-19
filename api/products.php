<?php

$db = new PDO("mysql:dbname=curs_delivery;host=localhost;charset=utf8mb4;", 'root', '12345');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $sth = $db->prepare("SELECT * FROM `products` ORDER BY `name`");
    $sth->execute();
    $array = $sth->fetchAll(PDO::FETCH_ASSOC);
    $result = json_encode($array);
    echo $result;
}