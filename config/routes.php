<?php

/** @var $app Zend\Expressive\Application */

$app->get('/', Johncms\Modules\Homepage\HomepageAction::class, 'home');

//$app->get('/news[/]', Johncms\App\NewsAction::class, 'news');
