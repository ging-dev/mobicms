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
define('MOBICMS_ROOT', dirname(__DIR__, 2) . DS);
const MOBICMS_CACHE = MOBICMS_ROOT . 'system' . DS . 'cache' . DS;
const MOBICMS_CONFIG = __DIR__ . DS;
const MOBICMS_LOGS = MOBICMS_ROOT . 'system' . DS . 'logs' . DS;
const MOBICMS_PUBLIC = MOBICMS_ROOT . 'public' . DS;

// System files
const MOBICMS_CONFIG_CACHE_FILE = MOBICMS_CACHE . 'system-config-cache.php';
const MOBICMS_CONFIG_ROUTES_FILE = MOBICMS_CONFIG . 'routes.php';
