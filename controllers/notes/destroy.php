<?php

use Core\DB;

$currentUserId = 1;

$note = DB::query('select * from notes where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

DB::query('delete from notes where id = :id', [
    'id' => $_POST['id']
]);

header('location: /notes');
exit();
