<?php 

return [

    'default' => 'test',

    'connections' => [
 "AGWLS01" => ["host" => env("AGWLS01"), "hostName" => "AGWLS01", "username"  => env("AGWLS01_USER"), "password"  => env("AGWLS01_PASSWORD"), "timeout"   => env("AGWLS01_TIMOUT"),],
 
    ],
];
