<?php

$config = array();

$config['loadRoutes'] = true;

$config['authentication'] = '\App\Http\Middleware\CustomCKFinderAuth';

$config['licenseName'] = '';
$config['licenseKey']  = '';

$config['privateDir'] = array(
    'backend' => 'laravel_cache',
    'tags'    => 'ckfinder/tags',
    'cache'   => 'ckfinder/cache',
    'thumbs'  => 'ckfinder/cache/thumbs',
    'logs'    => array(
        'backend' => 'laravel_logs',
        'path'    => 'ckfinder/logs'
    )
);

$config['images'] = array(
    'maxWidth'  => 1600,
    'maxHeight' => 1200,
    'quality'   => 80,
    'sizes' => array(
        'small'  => array('width' => 480, 'height' => 320, 'quality' => 80),
        'medium' => array('width' => 600, 'height' => 480, 'quality' => 80),
        'large'  => array('width' => 800, 'height' => 600, 'quality' => 80)
    )
);

$config['backends']['laravel_cache'] = array(
    'name'         => 'laravel_cache',
    'adapter'      => 'local',
    'root'         => storage_path('framework/cache')
);

$config['backends']['laravel_logs'] = array(
    'name'         => 'laravel_logs',
    'adapter'      => 'local',
    'root'         => storage_path('logs')
);

$config['backends']['default'] = array(
    'name'         => 'default',
    'adapter'      => 'local',
    'baseUrl'      => '/storage/post/img',
    'root'         => public_path('storage/post/img'),
    'chmodFiles'   => 0777,
    'chmodFolders' => 0755,
    'filesystemEncoding' => 'UTF-8'
);

$config['defaultResourceTypes'] = '';

$config['resourceTypes'][] = array(
    'name'              => 'Files',
    'directory'         => 'files',
    'maxSize'           => 0,
    'allowedExtensions' => 'bmp,gif,jpeg,jpg,png',
    'deniedExtensions'  => '',
    'backend'           => 'default'
);

$config['resourceTypes'][] = array(
    'name'              => 'Images',
    'directory'         => 'images',
    'maxSize'           => 0,
    'allowedExtensions' => 'bmp,gif,jpeg,jpg,png',
    'deniedExtensions'  => '',
    'backend'           => 'default'
);

$config['resourceTypes'][] = array(
    'name'              => 'Flash',
    'directory'         => 'flash',
    'maxSize'           => 0,
    'allowedExtensions' => 'swf,flv',
    'deniedExtensions'  => '',
    'backend'           => 'default'
);

$config['roleSessionVar'] = 'CKFinder_UserRole';

$config['accessControl'][] = array(
    'role'                => '*',
    'resourceType'        => '*',
    'folder'              => '/',
    'FOLDER_VIEW'         => true,
    'FOLDER_CREATE'       => true,
    'FOLDER_RENAME'       => true,
    'FOLDER_DELETE'       => true,
    'FILE_VIEW'           => true,
    'FILE_UPLOAD'         => true,
    'FILE_RENAME'         => true,
    'FILE_DELETE'         => true,
    'IMAGE_RESIZE'        => true,
    'IMAGE_RESIZE_CUSTOM' => true
);

$config['overwriteOnUpload'] = false;
$config['checkDoubleExtension'] = true;
$config['disallowUnsafeCharacters'] = false;
$config['secureImageUploads'] = true;
$config['checkSizeAfterScaling'] = true;
$config['htmlExtensions'] = array('html', 'htm', 'xml', 'js');
$config['hideFolders'] = array('.*', 'CVS', '__thumbs');
$config['hideFiles'] = array('.*');
$config['forceAscii'] = false;
$config['xSendfile'] = false;

$config['debug'] = false;

$config['plugins'] = array();

$config['cache'] = array(
    'imagePreview' => 24 * 3600,
    'thumbnails'   => 24 * 3600 * 365
);

$config['tempDirectory'] = sys_get_temp_dir();

$config['sessionWriteClose'] = true;

$config['csrfProtection'] = true;

return $config;
