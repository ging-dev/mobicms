<?php
/**
 * mobiCMS (https://mobicms.org/)
 * This file is part of mobiCMS Content Management System.
 *
 * @license     https://opensource.org/licenses/GPL-3.0 GPL-3.0 (see the LICENSE.md file)
 * @link        http://mobicms.org mobiCMS Project
 * @copyright   Copyright (C) mobiCMS Community
 */

// Profiling
define('START_MEMORY', memory_get_usage());
define('START_TIME', microtime(true));

// System directories
define('MOBICMS_ROOT_DIR', dirname(__DIR__) . DIRECTORY_SEPARATOR);
const MOBICMS_CACHE_DIR = MOBICMS_ROOT_DIR . 'data' . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR;
const MOBICMS_LOGS_DIR = MOBICMS_ROOT_DIR . 'data' . DIRECTORY_SEPARATOR . 'logs' . DIRECTORY_SEPARATOR;
const MOBICMS_PUBLIC_DIR = MOBICMS_ROOT_DIR . 'public' . DIRECTORY_SEPARATOR;
const MOBICMS_CONFIG_DIR = __DIR__ . DIRECTORY_SEPARATOR;

// System files
const MOBICMS_CONFIG_CACHE_FILE = MOBICMS_CACHE_DIR . 'system-config-cache.php';
const MOBICMS_CONFIG_ROUTES_FILE = MOBICMS_CONFIG_DIR . 'routes.php';

//TODO: Разобраться, если не нужно - удалить
const MOBICMS_SYSTEM_DIR = MOBICMS_ROOT_DIR . 'system' . DIRECTORY_SEPARATOR;
