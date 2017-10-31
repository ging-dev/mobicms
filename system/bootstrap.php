<?php
/**
 * mobiCMS (https://mobicms.org/)
 * This file is part of mobiCMS Content Management System.
 *
 * @license     https://opensource.org/licenses/GPL-3.0 GPL-3.0 (see the LICENSE.md file)
 * @link        http://mobicms.org mobiCMS Project
 * @copyright   Copyright (C) mobiCMS Community
 */

// Check the current PHP version
if (version_compare(PHP_VERSION, '7.0', '<')) {
    die('<div style="text-align: center; font-size: xx-large">'
        . '<h3 style="color: #dd0000">ERROR: outdated version of PHP</h3>'
        . 'Your needs PHP 7.0 or higher'
        . '</div>');
}

// If there are no dependencies, we stop the script and displays an error
if (! is_file(__DIR__ . '/../vendor/autoload.php')) {
    die('<div style="text-align: center; font-size: xx-large">'
        . '<h3 style="color: #dd0000">ERROR: missing dependencies</h3>'
        . 'Please run: <strong>composer install</strong>'
        . '</div>');
}

require_once __DIR__ . '/constants.php';
require __DIR__ . '/../vendor/autoload.php';
