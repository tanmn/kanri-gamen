<?php

/**
 * Initial constants
 *
 * @package     app.Config
 * @author      Mai Nhut Tan
 * @since       2013-08-16
 */

/**
 * Debug mode will be set in Configure's debug variable
 */
define('DEBUG_MODE', 2);


/**
 * Source path URL to fetch photos, no trailing dash
 */
define('PHOTO_SOURCE_URL', 'http://kango-oshigoto.jp/img_la');


/**
 * Default blank image will be used as place holder
 */
define('DEFAULT_IMAGE', 'blank.gif');


/**
 * Path to cache thumbails
 */
define('SAVED_THUMB_PATH', TMP . 'cache' . DS . 'thumbnails' . DS);


/**
 * Path to images folder, where files will be stored
 */
define('SAVED_PHOTO_DIR', WWW_ROOT . 'images' . DS);


/**
 * Path to store photo that will be fetched, followed by DS
 * This path will be saved to DB with filename
 */
define('SAVED_PHOTO_PATH', 'hospital_photo' . DS);


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
 * Photos per page
 */
define('PHOTO_LIMIT', 200);

/**
 * Enable Photo management on web
 */
define('ENABLE_PHOTO_MANAGEMENT', true);


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
 * CSV extension
 */
define('UPLOAD_FILETYPE_CSV', "csv");


/**
 * Name of session that stores temporary uploaded csv
 */
define('CSV_BUFFER_SESSION_NAME', 'UploadedData');
