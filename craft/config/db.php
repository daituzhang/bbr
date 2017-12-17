<?php

return array(
    '*' => array(
        'tablePrefix' => 'craft',
    ),
    'localhost' => array(
        'server' => 'localhost',
        'user' => 'root',
        'password' => '',
        'database' => 'bbr',
    ),
    // Treat *.vagrantshare.com the same as localhost
    'vagrantshare.com' => array(
        'server' => 'localhost',
        'user' => 'root',
        'password' => '',
        'database' => 'bbr',
    ),
    'accessdomain.com' => array(
        'server' => 'localhost',
        'user' => 'robbie',
        'password' => 'Robbie+855',
        'database' => 'bbr',
        'initSQLs' => array("SET SESSION sql_mode='STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';")        
    ),
    'eventsbythelab.com' => array(
        'server' => 'localhost',
        'user' => 'the-lab',
        'password' => '@Z4?zDs%',
        'database' => 'bbr',
    )
);