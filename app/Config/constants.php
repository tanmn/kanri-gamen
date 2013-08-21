<?php

/**
 * Initial constants
 *
 * @package     app.Config
 * @author      Mai Nhut Tan
 * @since       2013-08-16
 */


/**
 * Source path URL to fetch photos, no trailing dash
 */
define('PHOTO_SOURCE_URL', 'http://kango-oshigoto.jp/img_la');


/**
 * Path to images folder, where files will be stored
 */
define('SAVED_PHOTO_DIR', WWW_ROOT . 'images' . DS);


/**
 * Path to store photo that will be fetched, followed by DS
 * This path will be saved to DB with filename
 */
define('SAVED_PHOTO_PATH', 'hospital' . DS);


/**
 * Full path of SAVED_PHOTO_PATH
 * This path is used to store files
 */
define('SAVED_PHOTO_FULLPATH', SAVED_PHOTO_DIR . SAVED_PHOTO_PATH);


/**
 * Max thread count allowed when fetching URL
 */
define('MAX_REQUEST_THREAD', 50);


/**
 * Max process timeout for SHELL TASKS in seconds (0 for unlimited)
 */
define('MAX_PROCESS_TIMEOUT', 0);


/**
 * Default photo's target flag
 */
define('DEFAULT_PHOTO_TARGET_FLAG', 1);


/**
 * Default date format
 */
define('DATE_FORMAT', 'Y/m/d');


/**
 * Default time format
 */
define('TIME_FORMAT', 'H:i:s');


/**
 * Default date time format
 */
define('DATETIME_FORMAT', 'Y/m/d H:i:s');


/**
 * path upload CSV
 */
define('CSV_UPLOAD_PATH', TMP);


/**
 * FILE TYPE UPLOAD CSV
 */
define('FILE_TYPE_UPLOAD', "csv");