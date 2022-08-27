<?php

declare(strict_types=1);

$servername = "127.0.0.1";
$username = "user";
$password = "password";

try {
$connect = new PDO("mysql:host=$servername;dbname=db", $username, $password);
$connect ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$query = '';

$table_data = '';

// json file name
$url = 'https://jsonplaceholder.typicode.com/posts';

// Read the JSON file in PHP
$jsondata_stati= file_get_contents($url);


// Convert the JSON String into PHP Array

$array = json_decode($jsondata_stati, true);



// Extracting row by row

foreach($array as $row) {

    // Database query to insert data

    // into database Make Multiple

    // Insert Query

    $query .=

        "INSERT INTO zapis VALUES
                      ('".$row["userId"]."', '".$row["id"]."', '".$row["title"]."', '".$row["body"]."'); ";
    $table_data .= ' 

                <tr> 

                    <td>'.$row["userId"].'</td> 

                    <td>'.$row["id"].'</td> 

                    <td>'.$row["title"].'</td>
                    
                    <td>'.$row["body"].'</td> 

                </tr> 

                ';}
//$stmt = $connect->prepare($query);




