<?php

$user = 'user1';
$pass = 'user1mdp';

try {
    $data = new PDO('mysql:host=localhost;dbname=blogpost', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br>";
    die();
}

$q = $data->prepare('SELECT * FROM posts');
$q->execute();
$row = $q->fetchAll();
