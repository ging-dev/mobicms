<?php

/** @var $app Zend\Expressive\Application */

$app->get('/', [
    Johncms\Checkpoint\AuthenticationMiddleware::class,
    Johncms\Modules\HomePage\HomepageHandler::class,
], 'home');

$app->get('/test[/]', [
    Mobicms\Modules\Test\TestPageHandler::class
], 'test');

//$app->get('/test[/]', Mobicms\Modules\Test\TestPageHandler::class, 'test');
