<?php

require dirname(__DIR__).'/vendor/autoload.php';

$config = require dirname(__DIR__).'/config/web.php';

(new Core\App($config))->run();
