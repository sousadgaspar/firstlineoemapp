<?php 

return [

    'default' => 'test',

    'connections' => [
 "DCRLSA" => ["host" => env("DCRLSA"), "hostName" => "DCRLSA", "username"  => env("DCRLSA_USER"), "password"  => env("DCRLSA_PASSWORD"), "timeout"   => env("DCRLSA_TIMOUT"),],
 "AGWLS01" => ["host" => env("AGWLS01"), "hostName" => "AGWLS01", "username"  => env("AGWLS01_USER"), "password"  => env("AGWLS01_PASSWORD"), "timeout"   => env("AGWLS01_TIMOUT"),],
 "APPSERVEROANDM" => ["host" => env("APPSERVEROANDM"), "hostName" => "APPSERVEROANDM", "username"  => env("APPSERVEROANDM_USER"), "password"  => env("APPSERVEROANDM_PASSWORD"), "timeout"   => env("APPSERVEROANDM_TIMOUT"),],
 "AGWLS01" => ["host" => env("AGWLS01"), "hostName" => "AGWLS01", "username"  => env("AGWLS01_USER"), "password"  => env("AGWLS01_PASSWORD"), "timeout"   => env("AGWLS01_TIMOUT"),],
 
    ],
];
