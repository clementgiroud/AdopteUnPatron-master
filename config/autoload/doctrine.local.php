<?php
return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' =>'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host'     => 'localhost',
                    'port'     => '',
                    'user'     => 'root',
                    'password' => 'root',
                    'dbname'   => 'adopte-un-patron',
                    'charset' => 'utf8',
                )))));
