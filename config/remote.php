<?php 

return [

    'default' => 'test',

    'connections' => [
        'TCRLS01' => [
            'host'      => env('TCRLS01'),
            'hostName' => 'TCRLS01',
            'username'  => env('SMSC_USER'),
            'password'  => env('SMSC_PASSWORD'),
            'key'       => env('PRIVATE_SSH_KEY'),
            'keytext'   => '',
            'keyphrase' => '',
            'agent'     => '',
            'timeout'   => 10,
        ],

        'TCRLS02' => [
            'host'      => env('TCRLS02'),
            'hostName' => 'TCRLS02',
            'username'  => env('SMSC_USER'),
            'password'  => env('SMSC_PASSWORD'),
            'key'       => env('PRIVATE_SSH_KEY'),
            'keytext'   => '',
            'keyphrase' => '',
            'agent'     => '',
            'timeout'   => 10,
        ],

        'TCRLS03' => [
            'host'      => env('TCRLS03'),
            'hostName' => 'TCRLS03',
            'username'  => env('SMSC_USER'),
            'password'  => env('SMSC_PASSWORD'),
            'key'       => env('PRIVATE_SSH_KEY'),
            'keytext'   => '',
            'keyphrase' => '',
            'agent'     => '',
            'timeout'   => 10,
        ],

         'TCRLS04' => [
            'host'      => env('TCRLS04'),
            'hostName' => 'TCRLS04',
            'username'  => env('SMSC_USER'),
            'password'  => env('SMSC_PASSWORD'),
            'key'       => env('PRIVATE_SSH_KEY'),
            'keytext'   => '',
            'keyphrase' => '',
            'agent'     => '',
            'timeout'   => 10,
        ],

    ],
];
