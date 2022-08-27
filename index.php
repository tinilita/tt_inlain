<?php

declare(strict_types=1);

require 'script.php';
?>

<!DOCTYPE html>
<html>


<head>

    <script src=

            "https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">

    </script>



    <link rel="stylesheet" href=

    "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />



    <script src=

            "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">

    </script>



    <style>

        .box {

            width: 750px;

            padding: 20px;

            background-color: #fff;

            border: 1px solid #ccc;

            border-radius: 5px;

            margin-top: 100px;

        }

    </style>
</head>


<body>

<div class="container box">

    <h3 align="center">

        data

    </h3><br />



    <?php



    echo $table_data;

    if(mysqli_multi_query($connect, $query)) {

        echo '<h3>Inserted JSON Data</h3><br />';

        echo ' 

                <table class="table table-bordered"> 

                <tr> 

                    <th width="45%">Name</th> 

                    <th width="10%">Gender</th> 

                    <th width="45%">Subject</th>
                    
                    <th width="45%">Subject</th> 

                </tr> 

                ';

        echo $table_data;

        echo '</table>';

    }

    ?>

    <br />

</div>
</body>


</html>