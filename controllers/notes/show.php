<?php

use Core\DatabaseFacade;

// $db = App::resolve(Database::class);

$currentUserId = 1;

// $note = $db->query('select * from notes where id = :id', [
//     'id' => $_GET['id']
// ])->findOrFail();

$note = DatabaseFacade::query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);
