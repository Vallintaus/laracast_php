<?php

use Core\App;
use Core\Database;

$db = App::container()->resolve(Database::class);

$currentUserId = 3;


$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_GET['id']
    ])->fetchOrAbort(); // own fetch method

    
authorize($note['user_id'] === $currentUserId); 


view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);