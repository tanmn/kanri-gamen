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
 * Path to store photo that fetched, trailing by DS
 * This path will be saved to DB with filename
 */
define('SAVED_PHOTO_PATH', 'images' . DS);

define('PATH_SAVE_FILENAME', 'hospital' . DS . 'images' . DS);


/**
 * Full path of SAVED_PHOTO_PATH
 * This path is used to store files
 */
define('SAVED_PHOTO_FULLPATH', WWW_ROOT . SAVED_PHOTO_PATH);

/**
 * Full path of SAVED_FILE_UPLOAD_CSV_PHOTO
 * This path is used to store upload file csv
 */

define('PATH_FILE_UPLOAD_CSV', WWW_ROOT . "files" . DS );

/**
 * Max thread count allowed when fetching URL
 */
define('MAX_REQUEST_THREAD', 50);

define('TARGET_FLAG', 1);

/**
 * Max process timeout for SHELL TASKS in seconds (0 for unlimited)
 */
define('MAX_PROCESS_TIMEOUT', 0);


define('MAX_FILE_UPLOAD_SCV_PHOTO', 2048);

define('FILE_TYPE_UPLOAD', "csv");

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
