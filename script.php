<?php

declare(strict_types=1);

$servername = "127.0.0.1";
$username = "user";
$password = "password";

try {
    $connect = new PDO("mysql:host=$servername;dbname=db", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    $url_zapis = 'https://jsonplaceholder.typicode.com/posts';
    $url_comment = 'https://jsonplaceholder.typicode.com/comments';

// Read the JSON file in PHP
    $jsondata_zapis = file_get_contents($url_zapis);
    $jsondata_comment = file_get_contents($url_comment);

// Convert the JSON String into PHP Array
    $array_zapis = json_decode($jsondata_zapis, true);
    $array_comment = json_decode($jsondata_comment, true);

// Extracting row by row
    $index_zapis = 0;
    foreach ($array_zapis as $row_zapis) {
        $userId = $row_zapis['userId'];
        $id = $row_zapis['id'];
        $title = $row_zapis['title'];
        $body = $row_zapis['body'];

//insert values into mysql database
        /*$sql="INSERT INTO `zapis`(`userId`, `id`, `title`, `body`)
VALUES ('$userId', '$id', '$title', '$body')";*/
        $sql1 = "INSERT INTO zapis VALUES
                          ('" . $row_zapis["userId"] . "', '" . $row_zapis["id"] . "', '" . $row_zapis["title"] . "', '" . $row_zapis["body"] . "'); ";
        $index_zapis++;

        /*foreach($array as $row) {

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
        */
        $stmt1 = $connect->prepare($sql1);

        $success = $stmt1->execute();
    }

    // Extracting row by row

    $index_comment = 0;
    foreach ($array_comment as $row_comment) {
        $postId = $row_comment['postId'];
        $id = $row_comment['id'];
        $name = $row_comment['name'];
        $email = $row_comment['email'];
        $body = $row_comment['body'];

        $sql = "INSERT INTO comment VALUES
                          ('" . $row_comment["postId"] . "', '" . $row_comment["id"] . "', '" . $row_comment["name"] . "', '" . $row_comment["email"] . "', '" . $row_comment["body"] . "'); ";
        $index_comment++;

        $stmt = $connect->prepare($sql);

        $success = $stmt->execute();
        if ($success) {
            echo "";
        } else {
            echo "Что-то пошло не так...";
        }
    }
    $db = null;
    echo "Загружено $index_zapis записей и $index_comment комментариев";

}
catch
(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}



