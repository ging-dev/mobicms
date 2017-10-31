<?php
/**
 * mobiCMS (https://mobicms.org/)
 * This file is part of mobiCMS Content Management System.
 *
 * @license     https://opensource.org/licenses/GPL-3.0 GPL-3.0 (see the LICENSE.md file)
 * @link        http://mobicms.org mobiCMS Project
 * @copyright   Copyright (C) mobiCMS Community
 */

const DEBUG = true;

chdir(dirname(__DIR__));
require 'system/bootstrap.php';

call_user_func(function () {
    /** @var \Interop\Container\ContainerInterface $container */
    $container = Mobicms\Core\Container::getInstance();

    /** @var \Zend\Expressive\Application $app */
    $app = $container->get(\Zend\Expressive\Application::class);
    $app->run();
});
