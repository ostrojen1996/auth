<?php

return [
    'routes' => [
        '/user-info' => 'user-info',
        '/login'     => 'login',
        '/register'  => 'register',
        '/'          => 'default'
    ],
    'db' => require 'db.php'
];
