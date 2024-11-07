<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 3;


$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_GET['id']
    ])->fetchOrAbort(); // own fetch method

    
authorize($note['user_id'] === $currentUserId); 


view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);