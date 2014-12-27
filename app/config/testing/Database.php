<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 18.12.14
 * Time: 19:08
 */

return array(

    'default' => 'sqlite',

    'connections' => array(
        'sqlite' => array(
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => ''
        ),
    )
);