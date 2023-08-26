<?php

namespace Core;

use Core\App;
use Core\Container;
use Core\Database;

$container = new Container();

$container->bind('db', function () {
    $config = require base_path('config.php');

    return new Database($config['database']);
});

// $db = $container->resolve('Core\Database');
// dd($db);
App::setContainer($container);
