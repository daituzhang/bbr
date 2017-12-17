<?php

return array(
    '*' => array(
        'omitScriptNameInUrls' => true,
    ),

    'localhost' => array(
        'devMode' => true,
        'environmentVariables' => array(
            'env' => 'dev',
            'fileSystemPath' => '/vagrant/public/',
            'frontEndAssets' => '/src/',
            'siteName' => 'bbr',
        )
    ),

    'vagrantshare' => array(
        'devMode' => true,
        'environmentVariables' => array(
            'env' => 'dev',
            'fileSystemPath' => '/vagrant/public/',
            'frontEndAssets' => '/src/',
            'siteName' => 'bbr',
        )
    ),

    'accessdomain.com' => array(
        'devMode' => true,
        'environmentVariables' => array(
            'env' => 'dev',
            'fileSystemPath' => '/var/www/bbr/public/',
            'frontEndAssets' => '/src/',
            'siteName' => 'bbr',
            'initSQLs' => array("SET SESSION sql_mode='STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';")            
        ),
        'initSQLs' => array("SET SESSION sql_mode='STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';")        
    ),

    'eventsbythelab.com' => array(
        'devMode' => true,
        'environmentVariables' => array(
            'env' => 'dev',
            'fileSystemPath' => '/var/www/the-lab/public/',
            'frontEndAssets' => '/src/',
            'siteName' => 'the-lab',
        )
    )

);
