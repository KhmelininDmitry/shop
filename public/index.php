<?php

require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';
require_once CONF . '/routes.php';

new \shop\App();

debug(\shop\Router::getRoutes());

echo '-------';

debug(\shop\Router::getRoute());