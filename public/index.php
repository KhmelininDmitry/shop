<?php

require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';


new \shop\App();
\shop\App::$app->setProperty('test', 'TEST');

throw new Exception('Страница не найдена', 500);