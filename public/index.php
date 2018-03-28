<?php
/**
 * mobiCMS (https://mobicms.org/)
 * This file is part of mobiCMS Content Management System.
 *
 * @license     https://opensource.org/licenses/GPL-3.0 GPL-3.0 (see the LICENSE.md file)
 * @link        http://mobicms.org mobiCMS Project
 * @copyright   Copyright (C) mobiCMS Community
 */

declare(strict_types=1);

// Enable debug mode
const DEBUG = true;

// Check the current PHP version
if (PHP_VERSION_ID < 70100) {
    die('<h1 style="color: #dd0000">ERROR: outdated version of PHP</h1>');
}

chdir(dirname(__DIR__));

// If there are no dependencies, we stop the script and displays an error
if (! is_file('vendor/autoload.php')) {
    die('<h3 style="color: #dd0000">ERROR: missing dependencies</h3>');
}

require 'config/constants.php';
require 'vendor/autoload.php';

(function () {
    /** @var \Psr\Container\ContainerInterface $container */
    $container = \Mobicms\System\Foundation\ContainerLoader::getContainer();

    /** @var \Zend\Expressive\Application $app */
    $app = $container->get(\Zend\Expressive\Application::class);
    $app->run();
})();
