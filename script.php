<?php

declare(strict_types=1);

//подключение к БД через PDO
$dsn = 'mysql:host=mysql;dbname=db;charset=UTF8';
$user = 'user';
$password = 'password';

$url = 'https://jsonplaceholder.typicode.com/posts';
//read the json file contents
$jsondata_stati= file_get_contents($url);

//convert json object to php associative array
$data = json_decode($jsondata_stati, true);

//get the details
$userId = $data['userId'];
$id = $data['id'];
$title = $data['title'];
$body = $data['body'];

//insert into mysql table
$sql = "INSERT INTO zapis(userId, id, title, body)
    VALUES('$userId', '$id', '$title', '$body')";
