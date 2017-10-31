<?php

/** @var $app Zend\Expressive\Application */
$app->get('/', Johncms\App\Homepage\HomepageAction::class, 'home');
//$app->get('/news[/]', Johncms\App\NewsAction::class, 'news');
