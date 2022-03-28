<?php

$user = 'user1';
$pass = 'user1mdp';

try {
    $data = new PDO('mysql:host=localhost;dbname=blogpost', $user, $pass);
    foreach ($data->query('SELECT * FROM articles') as $row) {
        print_r($row);
    }
    $data = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br>";
    die();
}
