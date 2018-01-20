<?php

/** @var $app Zend\Expressive\Application */

$app->get('/', [
    Johncms\Checkpoint\AuthenticationMiddleware::class,
    Johncms\Modules\HomePage\HomepageAction::class,
], 'home');

//$app->get('/news[/]', Johncms\App\NewsAction::class, 'news');
