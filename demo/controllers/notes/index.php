<?php

use Core\App;
use Core\Database;

$db = App::container()->resolve(Database::class);


$notes = $db->query('SELECT * FROM notes where user_id = 3')->fetchAll();


view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);