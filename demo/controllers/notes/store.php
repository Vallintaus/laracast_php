<?php

use Core\Validator;

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];


$validator = new Validator();

if(! $validator->string($_POST['note'], 1 , 1000)) {
    $errors['note'] = 'Note must be between 1 and 1000 characters';
} 

if(! empty($errors)) {

    view("notes/create.view.php", [
        'heading' => 'Create new Note',
        'errors' => $errors
    ]);
    die();
}

$db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', [
    'body' => $_POST['note'],
    'user_id' => 3
]);
header('Location: /notes');
die();

