<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 3;


$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_POST['id']
    ])->fetchOrAbort(); // own fetch method

authorize($note['user_id'] === $currentUserId); 
$db->query('DELETE FROM notes WHERE id = :id', [
    'id' => $_POST['id']
]);
header('Location: /notes');
die();
