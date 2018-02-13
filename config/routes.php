<?php

/** @var $app Zend\Expressive\Application */

$app->get('/', [
    Johncms\Checkpoint\AuthenticationMiddleware::class,
    Johncms\Modules\HomePage\HomepageHandler::class,
], 'home');

//$app->get('/news[/]', Johncms\App\NewsAction::class, 'news');
