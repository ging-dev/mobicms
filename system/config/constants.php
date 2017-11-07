<?php
/**
 * mobiCMS (https://mobicms.org/)
 * This file is part of mobiCMS Content Management System.
 *
 * @license     https://opensource.org/licenses/GPL-3.0 GPL-3.0 (see the LICENSE.md file)
 * @link        http://mobicms.org mobiCMS Project
 * @copyright   Copyright (C) mobiCMS Community
 */

define('START_MEMORY', memory_get_usage());
define('START_TIME', microtime(true));
const DS = DIRECTORY_SEPARATOR;

// System directories
define('PATH_ROOT', dirname(__DIR__, 2) . DS);
const PATH_CACHE = PATH_ROOT . 'system' . DS . 'cache' . DS;
const PATH_LOG = PATH_ROOT . 'system' . DS . 'logs' . DS;
const PATH_CONFIG = __DIR__ . DS;

// Public directories
const PATH_PUBLIC = PATH_ROOT . 'public' . DS;
const PATH_ASSETS = PATH_PUBLIC . 'vendor' . DS;
const PATH_UPLOAD = PATH_PUBLIC . 'uploads' . DS;

// System files
const FILE_CONFIG_CACHE = PATH_CACHE . 'system-config-cache.php';
const FILE_CONFIG_ROUTES = PATH_CONFIG . 'routes.php';
