<?php 

return [

    'default' => 'test',

    'connections' => [
        'TCRLS01' => [
            'host'      => env('TCRLS01'),
            'username'  => env('SMSC_USER'),
            'password'  => '', // no password
            'key'       => '',
            'keytext'   => '',
            'keyphrase' => '',
            'agent'     => '',
            'timeout'   => 10,
        ],

        'TCRLS02' => [
            'host'      => env('TCRLS02'),
            'username'  => env('SMSC_USER'),
            'password'  => '', // no password
            'key'       => '',
            'keytext'   => '',
            'keyphrase' => '',
            'agent'     => '',
            'timeout'   => 10,
        ],

        'TCRLS03' => [
            'host'      => env('TCRLS03'),
            'username'  => env('SMSC_USER'),
            'password'  => '', // no password
            'key'       => '',
            'keytext'   => '',
            'keyphrase' => '',
            'agent'     => '',
            'timeout'   => 10,
        ],

         'TCRLS04' => [
            'host'      => env('TCRLS04'),
            'username'  => env('SMSC_USER'),
            'password'  => '', // no password
            'key'       => 'path/to/private.key',
            'keytext'   => '',
            'keyphrase' => '',
            'agent'     => '',
            'timeout'   => 10,
        ],

    'groups' => [
        'web' => ['production'],
    ],

];
