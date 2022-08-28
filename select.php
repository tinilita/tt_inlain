<?php

declare(strict_types=1);


$connect = new PDO("mysql:host=127.0.0.1; dbname=db", "user", "password");


$received_data = json_decode(file_get_contents("php://input"));

$data = array();

if($received_data->query != '')
{
    $query = "
	SELECT title, comment.body
FROM zapis
         LEFT JOIN comment
                   ON zapis.id =comment.postId
WHERE comment.body LIKE '%".$received_data->query."%'
";
}
else
{
    echo '';
}

$statement = $connect->prepare($query);

$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
    $data[] = $row;
}

echo json_encode($data);

?>
