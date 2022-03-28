<?php

$user = 'user1';
$pass = 'user1mdp';

try {
    $data = new PDO('mysql:host=localhost;dbname=blogpost', $user, $pass);
    foreach ($data->query('SELECT * FROM posts') as $row) {
        echo $row['titre'];
        echo "<br>";
        echo $row['contenu'];
        echo "<br>";
    }
    $data = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br>";
    die();
}
