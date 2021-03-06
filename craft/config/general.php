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
            'cache' => false,
            'siteUrl' => 'http://localhost:8080'
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
            'siteUrl' => 'http://v2vw-5tdb.accessdomain.com/'
        )
    ),

    '72.10.32.174' => array(
        'environmentVariables' => array(
            'env' => 'dev',
            'fileSystemPath' => '/var/www/bbr/public/',
            'frontEndAssets' => '/src/',
            'siteName' => 'bbr',
            'siteUrl' => 'http://72.10.32.174/'
        )
    ),


    'bodybyrobbie.com' => array(
        'environmentVariables' => array(
            'env' => 'dev',
            'fileSystemPath' => '/var/www/bbr/public/',
            'frontEndAssets' => '/src/',
            'siteName' => 'bbr',
            'siteUrl' => 'http://bodybyrobbie.com/'
        )
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
