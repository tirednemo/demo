<?php

use Core\DatabaseFacade;

$currentUserId = 1;

$note = DatabaseFacade::query('select * from notes where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

DatabaseFacade::query('delete from notes where id = :id', [
    'id' => $_POST['id']
]);

header('location: /notes');
exit();
