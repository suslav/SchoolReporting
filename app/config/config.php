<?php

defined('APP_PATH') || define('APP_PATH', realpath('.'));

return new \Phalcon\Config(array(
    'database' => array(
        'adapter'     => 'Mysql',
       // 'host'        => 'localhost',
         'host'        => 'mariadb138029-filecabinet.j.layershift.co.uk',
        'username'    => 'root',
       // 'password'    => '',
         'password'    => 'RDTdfz69275',
        'dbname'      => 'schoolreporting',
        'charset'     => 'utf8',
    ),
    'application' => array(
        'controllersDir' => APP_PATH . '/app/controllers/',
        'modelsDir'      => APP_PATH . '/app/models/',
        'migrationsDir'  => APP_PATH . '/app/migrations/',
        'viewsDir'       => APP_PATH . '/app/views/',
        'pluginsDir'     => APP_PATH . '/app/plugins/',
        'libraryDir'     => APP_PATH . '/app/library/',
        'cacheDir'       => APP_PATH . '/app/cache/',
        'formsDir'       => APP_PATH  .'/app/forms/',
//        'baseUri'        => '/SchoolReporting/',
        'baseUri'        => '/',
    ),
    'UserTypes' => array(
        'Admin' => '1',        
        'User' => '2')
));
