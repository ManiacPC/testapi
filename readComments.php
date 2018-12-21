<?php
require "config.php";
$user_email =  $_REQUEST['email'];
//echo $user_email;
try {
    $sql = "SELECT * FROM comments WHERE email = :email";

    $connection = new PDO($dsn, $username, $password, $options);
/*    $db = new mysqli($host,$username,$password,$dbname);
    $stmt = $db->prepare("SELECT * FROM comments where email = ?");
    $stmt->bind_param('s', $user_email);*/

    $statement = $connection->prepare($sql);
    $statement->bindParam(':email', $user_email, PDO::PARAM_STR);
    $statement->execute();

    $result = $statement->fetchAll();
   // die($result);
    $data = [];

    foreach ($result as $row)
    {
        //echo $row;
        $comment = Array(
          $row['id'],
          $row['comment'],
          $row['date']
        );
        array_push($data, $comment);
    }

    echo json_encode($data);
    //http_response_code(200);
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
    http_response_code(403);
}
