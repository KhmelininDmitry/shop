<?php

use shop\Router;

// default routes
//Более конкретные правила должны распологаться выше. Все пользовательские правила пишут выше.

Router::add('/^admin$/', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);

Router::add('^admin\/(?P<controller>[a-z-]+)\/(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);
Router::add('^(?P<controller>[a-z-]+)\/?(?P<action>[a-z-]+)?$');

