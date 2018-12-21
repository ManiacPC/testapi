<?php
require "config.php";
$comment =  $_REQUEST['comment'];
$email = $_REQUEST['email'];

try {
    $connection = new PDO("mysql:host=$host", $username, $password, $options);

    $new_comment = array(
        "comment"   => $comment,
        "email"     => $email,
        "date"      => date('Y-m-d h:i:s')
    );

    $sql = sprintf(
        "INSERT INTO comments_db.%s (%s) values (%s)",
        "comments",
        implode(", ", array_keys($new_comment)),
        ":" . implode(", :", array_keys($new_comment))
    );


    $statement = $connection->prepare($sql);
    $statement->execute($new_comment);
    http_response_code(200);
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
    //http_response_code(404);
}
